<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Keys_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 'user/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'user/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'user/index.html';
            $config['first_url'] = base_url() . 'user/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->User_model->total_rows($q);
        $user = $this->User_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'user_data' => $user,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('dashboard/header');
        $this->load->view('user/user_list', $data);
        $this->load->view('dashboard/footer');

        $admin = $this->wmm->is_admin();

        // if admin false redirect to 404

        if ($admin == false) {
            redirect('404');
        }
    }

    public function read($id)
    {
        $admin = $this->wmm->is_admin();

        // if admin false redirect to 404

        if ($admin == false) {
            redirect('404');
        }
        $row = $this->User_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id_user' => $row->id_user,
                'nama' => $row->nama,
                'email' => $row->email,
                'hak_akses' => $row->hak_akses,
            );
            $this->load->view('dashboard/header');
            $this->load->view('user/user_read', $data);
            $this->load->view('dashboard/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user'));
        }
    }


    public function profile()
    {
        $id = $this->session->userdata('id');
        $row = $this->User_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id_user' => $row->id_user,
                'nama' => $row->nama,
                'email' => $row->email,
                'hak_akses' => $row->hak_akses,
            );
            $this->load->view('dashboard/header');
            $this->load->view('user/profile', $data);
            $this->load->view('dashboard/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user'));
        }
    }

    public function api()
    {

        // session userid
        $userid = $this->session->userdata('id');

        $row = $this->Keys_model->get_by_userid($userid);


        if ($row) {
            $data = array(
                'key' => $row->key,
            );
            $this->load->view('dashboard/header');
            $this->load->view('user/api', $data);
            $this->load->view('dashboard/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dashboard'));
        }
    }

    public function apigenerate()
    {
        // session userid
        $userid = $this->session->userdata('id');
        $row = $this->Keys_model->get_by_userid($userid);


        if ($row) {
            $api_key = md5(uniqid(rand(), true));

            $data_keys = [
                'key' => $api_key,
            ];

            $this->Keys_model->update($row->id, $data_keys);

            redirect('user/api');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user'));
        }
    }

    public function create()
    {

        $admin = $this->wmm->is_admin();

        // if admin false redirect to 404

        if ($admin == false) {
            redirect('404');
        }
        $data = array(
            'button' => 'Create',
            'action' => site_url('user/create_action'),
            'id_user' => set_value('id_user'),
            'nama' => set_value('nama'),
            'email' => set_value('email'),
            'password' => set_value('password'),
            'hak_akses' => set_value('hak_akses'),
        );
        $this->load->view('dashboard/header');
        $this->load->view('user/user_form', $data);
        $this->load->view('dashboard/footer');
    }

    public function create_action()
    {
        $admin = $this->wmm->is_admin();

        // if admin false redirect to 404

        if ($admin == false) {
            redirect('404');
        }
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $password = $this->input->post('password', TRUE);
            // hash password
            $password = password_hash($password, PASSWORD_DEFAULT);
            $data = array(
                'nama' => $this->input->post('nama', TRUE),
                'email' => $this->input->post('email', TRUE),
                'password' => $password,
                'hak_akses' => $this->input->post('hak_akses', TRUE),
            );

            $user_id = $this->User_model->insert($data);
            $api_key = md5(uniqid(rand(), true));
            $data_keys = [
                'key' => $api_key,
                'user_id' => $user_id
            ];

            $this->Keys_model->insert($data_keys);

            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('user'));
        }
    }

    public function update($id)
    {
        $admin = $this->wmm->is_admin();

        // if admin false redirect to 404

        if ($admin == false) {
            redirect('404');
        }
        $row = $this->User_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('user/update_action'),
                'id_user' => set_value('id_user', $row->id_user),
                'nama' => set_value('nama', $row->nama),
                'email' => set_value('email', $row->email),
                'hak_akses' => set_value('hak_akses', $row->hak_akses),
            );
            $this->load->view('dashboard/header');
            $this->load->view('user/user_form', $data);
            $this->load->view('dashboard/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user'));
        }
    }

    public function update_action()
    {
        $admin = $this->wmm->is_admin();

        // if admin false redirect to 404

        if ($admin == false) {
            redirect('404');
        }
        $this->_rules();

        $hak_akses = $this->input->post('hak_akses', TRUE);
        if ($hak_akses == "") {
            $hak_akses = $this->input->post('hak_akses_old', TRUE);
        }
        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_user', TRUE));
        } else {
            // jika user mengubah password
            if ($this->input->post('password')) {
                $password = $this->input->post('password');
                $confirm_password = $this->input->post('confirm_password');

                // chek password = confirm password
                if ($password != $confirm_password) {
                    // password tidak sama
                    // set pesan error "Password tidak sama"
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password tidak sama</div>');
                    redirect(base_url('user/update/' . $this->input->post('id_user', TRUE)));
                } else {
                    // password sama
                    // update data user
                    // enkripsi password
                    $password = password_hash($password, PASSWORD_DEFAULT);

                    $data = array(
                        'nama' => $this->input->post('nama', TRUE),
                        'email' => $this->input->post('email', TRUE),
                        'password' => $password,
                        'hak_akses' => $hak_akses,
                    );
                }
            } else {
                $data = array(
                    'nama' => $this->input->post('nama', TRUE),
                    'email' => $this->input->post('email', TRUE),
                    'hak_akses' => $hak_akses,
                );
            }

            $this->User_model->update($this->input->post('id_user', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('user'));
        }
    }

    public function delete($id)
    {
        $admin = $this->wmm->is_admin();

        // if admin false redirect to 404

        if ($admin == false) {
            redirect('404');
        }
        $row = $this->User_model->get_by_id($id);

        if ($row) {
            $this->User_model->delete($id);
            // delete keys where user_id = $id
            $this->Keys_model->delete_by_userid($id);

            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('user'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        // $this->form_validation->set_rules('password', 'password', 'trim|required');

        $this->form_validation->set_rules('id_user', 'id_user', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }


    public function edit_profile($id)
    {
        $row = $this->User_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('user/edit_profile_action'),
                'id_user' => set_value('id_user', $row->id_user),
                'nama' => set_value('nama', $row->nama),
                'email' => set_value('email', $row->email),
                'hak_akses' => set_value('hak_akses', $row->hak_akses),
            );
            $this->load->view('dashboard/header');
            $this->load->view('user/edit_profile', $data);
            $this->load->view('dashboard/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user/profile'));
        }
    }

    public function edit_profile_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_user', TRUE));
        } else {
            // jika user mengubah password
            if ($this->input->post('password')) {
                $password = $this->input->post('password');
                $confirm_password = $this->input->post('confirm_password');

                // chek password = confirm password
                if ($password != $confirm_password) {
                    // password tidak sama
                    // set pesan error "Password tidak sama"
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password tidak sama</div>');
                    redirect(base_url('user/edit_profile/' . $this->input->post('id_user', TRUE)));
                } else {
                    // password sama
                    // update data user
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $data = array(
                        'nama' => $this->input->post('nama', TRUE),
                        'email' => $this->input->post('email', TRUE),
                        'password' => $password,
                    );
                }
            } else {
                $data = array(
                    'nama' => $this->input->post('nama', TRUE),
                    'email' => $this->input->post('email', TRUE),
                );
            }

            $this->User_model->update($this->input->post('id_user', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('user/profile'));
        }
    }
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-02-08 08:31:46 */
/* http://harviacode.com */