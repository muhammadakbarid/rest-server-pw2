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
    $this->load->view('dashboard/header');
    $this->load->view('dashboard/index');
    $this->load->view('dashboard/footer');
  }
}
