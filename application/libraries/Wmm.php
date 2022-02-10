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
  public function auth()
  {
    $x = $this->CI->session->userdata('logged_in');

    if (!$x) {
      redirect('auth');
    }
  }
}
