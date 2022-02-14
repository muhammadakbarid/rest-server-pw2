<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Wmm
{

  // CI
  private $CI;

  public function __construct()
  {
    $this->CI = &get_instance();
  }

  function auth()
  {
    $CI = &get_instance();
    $verify = $this->verify();

    if ($verify == false) {
      $CI->session->set_flashdata('error', 'You are not authorized to access this page.');
      redirect('auth');
    }
  }

  function is_admin()
  {
    $CI = &get_instance();
    $hak_akses = $CI->session->userdata('hak_akses');

    // if $admin is not true
    if ($hak_akses != 'admin') {
      return false;
    } else {
      return true;
    }
  }

  function auth_login()
  {
    $CI = &get_instance();
    $verify = $this->verify();

    if ($verify == true) {
      redirect('dashboard');
    }
  }

  function verify()
  {
    $CI = &get_instance();
    $user_session_id = $CI->session->userdata('logged_in');
    if ($user_session_id) {
      return true;
    } else {
      return false;
    }
  }
}
