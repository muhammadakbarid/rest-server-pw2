<?php
// controller dashboard codeigniter 3
class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->wmm->auth();
    // $this->load->
    // $this->load->model('m_dashboard');
  }
  public function index()
  {

    // jumlah user
    $data['jumlah_user'] = $this->db->get('user')->num_rows();
    // jumlah film
    $data['jumlah_film'] = $this->db->get('film')->num_rows();
    // jumlah homeproduction
    $data['jumlah_homeproduction'] = $this->db->get('homeproduction')->num_rows();

    // get data film
    $data['film'] = $this->db->get('film')->result_array();
    // get data homeproduction
    $data['homeproduction'] = $this->db->get('homeproduction')->result_array();

    $this->load->view('dashboard/header');
    $this->load->view('dashboard/index', $data);
    $this->load->view('dashboard/footer');
  }
}
