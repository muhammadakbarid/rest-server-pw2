<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Film extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Film_model');
        $this->load->model('Homeproduction_model');
        $this->load->library('form_validation');
        $this->wmm->auth();
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 'film/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'film/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'film/index.html';
            $config['first_url'] = base_url() . 'film/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Film_model->total_rows($q);
        $film = $this->Film_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'film_data' => $film,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('dashboard/header');
        $this->load->view('film/film_list', $data);
        $this->load->view('dashboard/footer');
    }

    public function read($id)
    {
        $row = $this->Film_model->get_by_id($id);
        // homeproduction by id
        $homeproduction = $this->Homeproduction_model->get_by_id($row->id_homeproduction);

        if ($row) {
            $data = array(
                'id_film' => $row->id_film,
                'id_homeproduction' => $row->id_homeproduction,
                'judul' => $row->judul,
                'producer' => $row->producer,
                'penulis_naskah' => $row->penulis_naskah,
                'musik' => $row->musik,
                'cimatografi' => $row->cimatografi,
                'editor' => $row->editor,
                'durasi' => $row->durasi,
                'poster' => $row->poster,
                'bahasa' => $row->bahasa,
                'negara' => $row->negara,
                'rating' => $row->rating,
                'tahun_rilis' => $row->tahun_rilis,
                'homeproduction' => $homeproduction->nama,
            );
            $this->load->view('dashboard/header');
            $this->load->view('film/film_read', $data);
            $this->load->view('dashboard/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('film'));
        }
    }

    public function create()
    {
        // get data homeproduction
        $homeproduction = $this->Homeproduction_model->get_all();
        $data = array(
            'button' => 'Create',
            'action' => site_url('film/create_action'),
            'id_film' => set_value('id_film'),
            'id_homeproduction' => set_value('id_homeproduction'),
            'judul' => set_value('judul'),
            'producer' => set_value('producer'),
            'penulis_naskah' => set_value('penulis_naskah'),
            'musik' => set_value('musik'),
            'cimatografi' => set_value('cimatografi'),
            'editor' => set_value('editor'),
            'durasi' => set_value('durasi'),
            'poster' => set_value('poster'),
            'bahasa' => set_value('bahasa'),
            'negara' => set_value('negara'),
            'rating' => set_value('rating'),
            'tahun_rilis' => set_value('tahun_rilis'),
            'homeproduction' => $homeproduction,
        );
        $this->load->view('dashboard/header');
        $this->load->view('film/film_form', $data);
        $this->load->view('dashboard/footer');
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            // upload poster
            $temp = "assets/img/";
            if (!file_exists($temp))
                mkdir($temp);

            // $nama_file       = $_POST['poster'];
            $fileupload      = $_FILES['poster']['tmp_name'];
            $ImageName       = $_FILES['poster']['name'];
            $ImageType       = $_FILES['poster']['type'];

            if (!empty($fileupload)) {
                $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
                $ImageExt       = str_replace('.', '', $ImageExt); // Extension
                $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
                $NewImageName   = str_replace(' ', '', $ImageName) . '.' . $ImageExt;

                move_uploaded_file($_FILES["poster"]["tmp_name"], $temp . $NewImageName); // Menyimpan file

                echo "Data Berhasil Diupload";
            } else {
                echo "Data Gagal Diupload";
            }

            $data = array(
                'id_homeproduction' => $this->input->post('id_homeproduction', TRUE),
                'judul' => $this->input->post('judul', TRUE),
                'producer' => $this->input->post('producer', TRUE),
                'penulis_naskah' => $this->input->post('penulis_naskah', TRUE),
                'musik' => $this->input->post('musik', TRUE),
                'cimatografi' => $this->input->post('cimatografi', TRUE),
                'editor' => $this->input->post('editor', TRUE),
                'durasi' => $this->input->post('durasi', TRUE),
                'poster' => $NewImageName,
                'bahasa' => $this->input->post('bahasa', TRUE),
                'negara' => $this->input->post('negara', TRUE),
                'rating' => $this->input->post('rating', TRUE),
                'tahun_rilis' => $this->input->post('tahun_rilis', TRUE),
            );

            $this->Film_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('film'));
        }
    }

    public function update($id)
    {
        $row = $this->Film_model->get_by_id($id);
        // get data homeproduction
        $homeproduction = $this->Homeproduction_model->get_all();
        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('film/update_action'),
                'id_film' => set_value('id_film', $row->id_film),
                'id_homeproduction' => set_value('id_homeproduction', $row->id_homeproduction),
                'judul' => set_value('judul', $row->judul),
                'producer' => set_value('producer', $row->producer),
                'penulis_naskah' => set_value('penulis_naskah', $row->penulis_naskah),
                'musik' => set_value('musik', $row->musik),
                'cimatografi' => set_value('cimatografi', $row->cimatografi),
                'editor' => set_value('editor', $row->editor),
                'durasi' => set_value('durasi', $row->durasi),
                'poster' => set_value('poster', $row->poster),
                'bahasa' => set_value('bahasa', $row->bahasa),
                'negara' => set_value('negara', $row->negara),
                'rating' => set_value('rating', $row->rating),
                'tahun_rilis' => set_value('tahun_rilis', $row->tahun_rilis),
                'homeproduction' => $homeproduction,
            );
            $this->load->view('dashboard/header');
            $this->load->view('film/film_form', $data);
            $this->load->view('dashboard/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('film'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_film', TRUE));
        } else {

            // upload poster
            $temp = "assets/img/";
            if (!file_exists($temp))
                mkdir($temp);

            // $nama_file       = $_POST['poster'];
            $fileupload      = $_FILES['poster']['tmp_name'];
            $ImageName       = $_FILES['poster']['name'];
            $ImageType       = $_FILES['poster']['type'];

            if (!empty($fileupload)) {
                $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
                $ImageExt       = str_replace('.', '', $ImageExt); // Extension
                $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
                $NewImageName   = str_replace(' ', '', $ImageName) . '.' . $ImageExt;

                move_uploaded_file($_FILES["poster"]["tmp_name"], $temp . $NewImageName); // Menyimpan file

                echo "Data Berhasil Diupload";
            } else {
                $NewImageName = $this->input->post('posterbc');
            }


            $data = array(
                'id_homeproduction' => $this->input->post('id_homeproduction', TRUE),
                'judul' => $this->input->post('judul', TRUE),
                'producer' => $this->input->post('producer', TRUE),
                'penulis_naskah' => $this->input->post('penulis_naskah', TRUE),
                'musik' => $this->input->post('musik', TRUE),
                'cimatografi' => $this->input->post('cimatografi', TRUE),
                'editor' => $this->input->post('editor', TRUE),
                'durasi' => $this->input->post('durasi', TRUE),
                'poster' => $NewImageName,
                'bahasa' => $this->input->post('bahasa', TRUE),
                'negara' => $this->input->post('negara', TRUE),
                'rating' => $this->input->post('rating', TRUE),
                'tahun_rilis' => $this->input->post('tahun_rilis', TRUE),
            );

            $this->Film_model->update($this->input->post('id_film', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('film'));
        }
    }

    public function delete($id)
    {
        $row = $this->Film_model->get_by_id($id);

        if ($row) {
            $this->Film_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('film'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('film'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_homeproduction', 'id homeproduction', 'trim|required');
        $this->form_validation->set_rules('judul', 'judul', 'trim|required');
        $this->form_validation->set_rules('producer', 'producer', 'trim|required');
        $this->form_validation->set_rules('penulis_naskah', 'penulis naskah', 'trim|required');
        $this->form_validation->set_rules('musik', 'musik', 'trim|required');
        $this->form_validation->set_rules('cimatografi', 'cimatografi', 'trim|required');
        $this->form_validation->set_rules('editor', 'editor', 'trim|required');
        $this->form_validation->set_rules('durasi', 'durasi', 'trim|required');
        // $this->form_validation->set_rules('poster', 'poster', 'trim|required');
        $this->form_validation->set_rules('bahasa', 'bahasa', 'trim|required');
        $this->form_validation->set_rules('negara', 'negara', 'trim|required');
        $this->form_validation->set_rules('rating', 'rating', 'trim|required');
        $this->form_validation->set_rules('tahun_rilis', 'tahun rilis', 'trim|required');

        $this->form_validation->set_rules('id_film', 'id_film', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Film.php */
/* Location: ./application/controllers/Film.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-02-08 08:31:37 */
/* http://harviacode.com */