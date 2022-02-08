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
  <link rel="shortcut icon" href="<?= base_url('/'); ?>assets/images/favicon.svg" type="image/x-icon">
  <!-- font awesome cdn -->
  <script src="https://use.fontawesome.com/8bdbe8669e.js"></script>

</head>

<body>
  <div id="app">
    <div id="sidebar" class='active'>
      <div class="sidebar-wrapper active">
        <div class="sidebar-header">
          <img src="<?= base_url('/'); ?>assets/img/logo.png" alt="">

          WMM

        </div>
        <div class="sidebar-menu">
          <ul class="menu">


            <li class='sidebar-title'>Main Menu</li>



            <li class="sidebar-item active ">
              <a href="<?= base_url('dashboard'); ?>" class='sidebar-link'>
                <i data-feather="home" width="20"></i>
                <span>Dashboard</span>
              </a>

            </li>

            <li class='sidebar-title'>Admin</li>

            <li class="sidebar-item ">
              <a href="<?= base_url('film'); ?>" class='sidebar-link'>
                <i data-feather="layout" width="20"></i>
                <span>Data Film</span>
              </a>
            </li>
            <li class="sidebar-item ">
              <a href="<?= base_url('homeproduction'); ?>" class='sidebar-link'>
                <i data-feather="layout" width="20"></i>
                <span>Data Home Production</span>
              </a>
            </li>
            <li class="sidebar-item ">
              <a href="<?= base_url('user'); ?>" class='sidebar-link'>
                <i data-feather="layout" width="20"></i>
                <span>Data User</span>
              </a>
            </li>

            <li class='sidebar-title'>User</li>

            <li class="sidebar-item ">
              <a href="form-layout.html" class='sidebar-link'>
                <i data-feather="layout" width="20"></i>
                <span>Api Key</span>
              </a>
            </li>
            <li class="sidebar-item ">
              <a href="form-layout.html" class='sidebar-link'>
                <i data-feather="layout" width="20"></i>
                <span>Profil</span>
              </a>
            </li>
            <li class="sidebar-item ">
              <a href="form-layout.html" class='sidebar-link'>
                <i data-feather="layout" width="20"></i>
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
            <li class="dropdown nav-icon">
              <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <div class="d-lg-inline-block">
                  <i data-feather="bell"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-large">
                <h6 class='px-4 py-2'>Notifications</h6>
                <ul class="rounded-none list-group">
                  <li class="border-0 list-group-item align-items-start">
                    <div class="mr-3 avatar bg-success">
                      <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                    </div>
                    <div>
                      <h6 class='text-bold'>New Order</h6>
                      <p class='text-xs'>
                        An order made by Ahmad Saugi for product Samsung Galaxy S69
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="mr-2 dropdown nav-icon">
              <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <div class="d-lg-inline-block">
                  <i data-feather="mail"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
              </div>
            </li>
            <li class="dropdown">
              <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <div class="mr-1 avatar">
                  <img src="<?= base_url('/'); ?>assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                </div>
                <div class="d-none d-md-block d-lg-inline-block">Hi, Saugi</div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="main-content container-fluid">