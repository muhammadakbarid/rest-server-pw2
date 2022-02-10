<?php
// controller dashboard codeigniter 3
class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model');
    $this->load->model('Keys_model');
  }

  public function index()
  {
    $this->load->view('auth/login');
    $this->wmm->auth_login();
  }

  public function login()
  {

    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $password = password_verify($password, PASSWORD_DEFAULT);

    if ($this->User_model->checkuser($email, $password)) {
      // jika login berhasil
      $user = $this->User_model->get_by_email($email);
      $data = [
        'email' => $user->email,
        'nama' => $user->nama,
        'hak_akses' => $user->hak_akses,
        'id' => $user->id_user,
        'logged_in' => true
      ];

      $this->session->set_userdata($data);
      redirect('dashboard');
    } else {
      // jika login gagal tampilkan pesan kesalahan
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      Email atau Password salah!
      </div>');
      redirect('auth');
    }
  }

  // register
  public function register()
  {
    $this->wmm->auth_login();
    $this->load->view('auth/register');
  }

  // register action
  public function register_action()
  {
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $confirm_password = $this->input->post('confirm_password');

    if ($password == $confirm_password) {
      $password = password_hash($password, PASSWORD_DEFAULT);
      $data = [
        'nama' => $nama,
        'email' => $email,
        'password' => $password,
      ];

      $user_id = $this->User_model->insert($data);
      // generate random api key to keys table
      $api_key = md5(uniqid(rand(), true));
      $data_keys = [
        'key' => $api_key,
        'user_id' => $user_id
      ];

      $this->Keys_model->insert($data_keys);


      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      Registrasi berhasil! Silahkan login.
      </div>');
      redirect('auth');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      Password tidak sama!
      </div>');
      redirect('auth/register');
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('auth');
  }
}
