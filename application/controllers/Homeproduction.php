<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Homeproduction extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Homeproduction_model');
        $this->load->model('Film_model');
        $this->load->library('form_validation');
        $this->wmm->auth();
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 'homeproduction/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'homeproduction/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'homeproduction/index.html';
            $config['first_url'] = base_url() . 'homeproduction/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Homeproduction_model->total_rows($q);
        $homeproduction = $this->Homeproduction_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'homeproduction_data' => $homeproduction,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('dashboard/header');
        $this->load->view('homeproduction/homeproduction_list', $data);
        $this->load->view('dashboard/footer');
    }

    public function read($id)
    {
        $row = $this->Homeproduction_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id_homeproduction' => $row->id_homeproduction,
                'nama' => $row->nama,
                'pemilik' => $row->pemilik,
                'tahun_berdiri' => $row->tahun_berdiri,
                'email' => $row->email,
                'alamat' => $row->alamat,
                'no_tlp' => $row->no_tlp,
                'logo' => $row->logo,
                'website' => $row->website,
                'instagram' => $row->instagram,
                'facebook' => $row->facebook,
                'twitter' => $row->twitter,
            );
            $this->load->view('dashboard/header');
            $this->load->view('homeproduction/homeproduction_read', $data);
            $this->load->view('dashboard/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('homeproduction'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('homeproduction/create_action'),
            'id_homeproduction' => set_value('id_homeproduction'),
            'nama' => set_value('nama'),
            'pemilik' => set_value('pemilik'),
            'tahun_berdiri' => set_value('tahun_berdiri'),
            'email' => set_value('email'),
            'alamat' => set_value('alamat'),
            'no_tlp' => set_value('no_tlp'),
            'logo' => set_value('logo'),
            'website' => set_value('website'),
            'instagram' => set_value('instagram'),
            'facebook' => set_value('facebook'),
            'twitter' => set_value('twitter'),
        );
        $this->load->view('dashboard/header');
        $this->load->view('homeproduction/homeproduction_form', $data);
        $this->load->view('dashboard/footer');
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            // upload logo
            $temp = "assets/img/logo/";
            if (!file_exists($temp))
                mkdir($temp);

            // $nama_file       = $_POST['logo'];
            $fileupload      = $_FILES['logo']['tmp_name'];
            $ImageName       = $_FILES['logo']['name'];
            $ImageType       = $_FILES['logo']['type'];

            if (!empty($fileupload)) {
                $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
                $ImageExt       = str_replace('.', '', $ImageExt); // Extension
                $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
                $NewImageName   = str_replace(' ', '', $ImageName) . '.' . $ImageExt;

                move_uploaded_file($_FILES["logo"]["tmp_name"], $temp . $NewImageName); // Menyimpan file

                echo "Data Berhasil Diupload";
            } else {
                echo "Data Gagal Diupload";
            }

            $data = array(
                'nama' => $this->input->post('nama', TRUE),
                'pemilik' => $this->input->post('pemilik', TRUE),
                'tahun_berdiri' => $this->input->post('tahun_berdiri', TRUE),
                'email' => $this->input->post('email', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'no_tlp' => $this->input->post('no_tlp', TRUE),
                'logo' => $NewImageName,
                'website' => $this->input->post('website', TRUE),
                'instagram' => $this->input->post('instagram', TRUE),
                'facebook' => $this->input->post('facebook', TRUE),
                'twitter' => $this->input->post('twitter', TRUE),
            );

            $this->Homeproduction_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('homeproduction'));
        }
    }

    public function update($id)
    {
        $row = $this->Homeproduction_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('homeproduction/update_action'),
                'id_homeproduction' => set_value('id_homeproduction', $row->id_homeproduction),
                'nama' => set_value('nama', $row->nama),
                'pemilik' => set_value('pemilik', $row->pemilik),
                'tahun_berdiri' => set_value('tahun_berdiri', $row->tahun_berdiri),
                'email' => set_value('email', $row->email),
                'alamat' => set_value('alamat', $row->alamat),
                'no_tlp' => set_value('no_tlp', $row->no_tlp),
                'logo' => set_value('logo', $row->logo),
                'website' => set_value('website', $row->website),
                'instagram' => set_value('instagram', $row->instagram),
                'facebook' => set_value('facebook', $row->facebook),
                'twitter' => set_value('twitter', $row->twitter),
            );
            $this->load->view('dashboard/header');
            $this->load->view('homeproduction/homeproduction_form', $data);
            $this->load->view('dashboard/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('homeproduction'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_homeproduction', TRUE));
        } else {
            // upload logo
            $temp = "assets/img/logo/";
            if (!file_exists($temp))
                mkdir($temp);

            // $nama_file       = $_POST['logo'];
            $fileupload      = $_FILES['logo']['tmp_name'];
            $ImageName       = $_FILES['logo']['name'];
            $ImageType       = $_FILES['logo']['type'];

            if (!empty($fileupload)) {
                $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
                $ImageExt       = str_replace('.', '', $ImageExt); // Extension
                $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
                $NewImageName   = str_replace(' ', '', $ImageName) . '.' . $ImageExt;

                move_uploaded_file($_FILES["logo"]["tmp_name"], $temp . $NewImageName); // Menyimpan file

                echo "Data Berhasil Diupload";
            } else {
                $NewImageName = $this->input->post('logobc');
            }
            $data = array(
                'nama' => $this->input->post('nama', TRUE),
                'pemilik' => $this->input->post('pemilik', TRUE),
                'tahun_berdiri' => $this->input->post('tahun_berdiri', TRUE),
                'email' => $this->input->post('email', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'no_tlp' => $this->input->post('no_tlp', TRUE),
                'logo' => $NewImageName,
                'website' => $this->input->post('website', TRUE),
                'instagram' => $this->input->post('instagram', TRUE),
                'facebook' => $this->input->post('facebook', TRUE),
                'twitter' => $this->input->post('twitter', TRUE),
            );

            $this->Homeproduction_model->update($this->input->post('id_homeproduction', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('homeproduction'));
        }
    }

    public function delete($id)
    {
        $row = $this->Homeproduction_model->get_by_id($id);

        if ($row) {
            $this->Homeproduction_model->delete($id);
            // delete film where id_homeproduction=$id
            $this->Film_model->delete_by_id_homeproduction($id);

            // unlink logo
            $temp = "assets/img/logo/";
            if (!file_exists($temp))
                mkdir($temp);

            $file = $temp . $row->logo;
            if (file_exists($file)) {
                unlink($file);
            }


            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('homeproduction'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('homeproduction'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('pemilik', 'pemilik', 'trim|required');
        $this->form_validation->set_rules('tahun_berdiri', 'tahun berdiri', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('no_tlp', 'no tlp', 'trim|required');
        // $this->form_validation->set_rules('logo', 'logo', 'trim|required');
        $this->form_validation->set_rules('website', 'website', 'trim|required');
        $this->form_validation->set_rules('instagram', 'instagram', 'trim|required');
        $this->form_validation->set_rules('facebook', 'facebook', 'trim|required');
        $this->form_validation->set_rules('twitter', 'twitter', 'trim|required');

        $this->form_validation->set_rules('id_homeproduction', 'id_homeproduction', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Homeproduction.php */
/* Location: ./application/controllers/Homeproduction.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-02-08 08:31:43 */
/* http://harviacode.com */