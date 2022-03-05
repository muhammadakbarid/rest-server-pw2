<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - WikiMovieMedia</title>

  <link rel="stylesheet" href="<?= base_url('/'); ?>assets/css/bootstrap.css">

  <link rel="stylesheet" href="<?= base_url('/'); ?>assets/vendors/chartjs/Chart.min.css">

  <link rel="stylesheet" href="<?= base_url('/'); ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="<?= base_url('/'); ?>assets/css/app.css">
  <link rel="shortcut icon" href="<?= base_url('/'); ?>assets/img/logo.png" type="image/x-icon">
  <!-- font awesome cdn -->
  <!-- <script src="https://use.fontawesome.com/2e63de4c36.js"></script> -->

</head>

<body>
  <div id="app">
    <div id="sidebar" class='active'>
      <div class="sidebar-wrapper active">
        <div class="sidebar-header">
          <a href="<?= base_url(); ?>">
            <img src="<?= base_url('/'); ?>assets/img/logo.png" alt="">

            WMM
          </a>
        </div>
        <div class="sidebar-menu">
          <ul class="menu">
            <li class='sidebar-title'>Main Menu</li>

            <li class="sidebar-item">
              <a href="<?= base_url('dashboard'); ?>" class='sidebar-link'>
                <i data-feather="home" width="20"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <!-- if user admin login -->
            <?php if ($this->session->userdata('hak_akses') == "admin") : ?>
              <li class='sidebar-title'>Admin</li>

              <li class="sidebar-item ">
                <a href="<?= base_url('film'); ?>" class='sidebar-link'>
                  <i data-feather="film" width="20"></i>
                  <span>Data Film</span>
                </a>
              </li>
              <li class="sidebar-item ">
                <a href="<?= base_url('homeproduction'); ?>" class='sidebar-link'>
                  <i data-feather="home" width="20"></i>
                  <span>Data Home Production</span>
                </a>
              </li>
              <li class="sidebar-item ">
                <a href="<?= base_url('user'); ?>" class='sidebar-link'>
                  <i data-feather="users" width="20"></i>
                  <span>Data User</span>
                </a>
              </li>
            <?php endif; ?>
            <li class='sidebar-title'>User</li>

            <li class="sidebar-item ">
              <a href="<?= base_url('user/api'); ?>" class='sidebar-link'>
                <i data-feather="code" width="20"></i>
                <span>Api Key</span>
              </a>
            </li>
            <li class="sidebar-item ">
              <a href="<?= base_url('user/profile'); ?>" class='sidebar-link'>
                <i data-feather="user" width="20"></i>
                <span>Profil</span>
              </a>
            </li>
            <li class="sidebar-item ">
              <a href="https://documenter.getpostman.com/view/18014074/UVkvJCFf" class='sidebar-link' target="_BLANK">
                <i data-feather="book-open" width="20"></i>
                <span>Dokumentasi Api</span>
              </a>
            </li>

          </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
      </div>
    </div>
    <div id="main">
      <nav class="navbar navbar-header navbar-expand navbar-light">
        <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
        <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="ml-auto navbar-nav d-flex align-items-center navbar-light">

            <li class="dropdown">
              <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <div class="mr-1 avatar">
                  <img src="<?= base_url('/'); ?>assets/img/logo.png" alt="" srcset="">
                </div>
                <div class="d-none d-md-block d-lg-inline-block"><?= $this->session->userdata('nama'); ?></div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <span class="dropdown-item"><?= $this->session->userdata('hak_akses'); ?></span>
                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><i data-feather="log-out"></i> Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="main-content container-fluid">