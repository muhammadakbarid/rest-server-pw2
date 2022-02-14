<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="google-site-verification" content="azliSlFKndcGdtJ9n4Ksvg-Qr62jtsfAoGyimPUg3js" />

  <!-- Favicons -->
  <link href="<?= base_url(); ?>/assets/img/favicon.webp" rel="icon">
  <link href="<?= base_url(); ?>/assets/img/favicon.webp" rel="shortcut icon">
  <link href="<?= base_url(); ?>/assets/img/favicon.webp" rel="apple-touch-icon">

  <!-- HTML Meta Tags -->
  <title>WikiMovieMedia</title>
  <meta name="keywords" content="AdrianDroid - Android Flasher">
  <meta name="description" content="Our Services: Bypass FRP Google Account, Bypass iCloud, Bypass Mi Account, Flash Stock Rom, Flash Custom Rom, Flash TWRP Recovery, Remove Phone Screen Lock, Remove Bloatware App, Root / UnRoot, Software Problem, Unlock Bootloader, Unlock Demo Phone.">


  <!-- Vendor CSS Files -->
  <link href="<?= base_url(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS -->
  <link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet">

  <!-- Fonts Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/fontawesome.min.css">


</head>

<body data-bs-spy="scroll" data-bs-target="#navbarNav">

  <!-- Desktop Navbar -->
  <nav class="navbar navbar-expand navbar-dark d-none d-md-block d-lg-block d-xl-block fixed-top desktop">
    <div class="container" data-aos="zoom-out">
      <a class="navbar-brand" href="#">
        <img src="assets/img/logo.webp" width="35" height="35" alt="AdrianDroid" title="Logo AdrianDroid" />
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>" title="Home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services" title="Services">Services</a>
          </li>
          <?php
          // if login
          if ($this->session->userdata('logged_in') == TRUE) {
            echo '<li class="nav-item">
            <a class="nav-link" href="' . base_url() . 'dashboard" title="Dashboard">Dashboard</a>
          </li><li class="nav-item">
          <a class="nav-link" href="' . base_url() . 'auth/logout" title="logout">logout</a>
        </li>';
          } else {
            echo '<li class="nav-item">
            <a class="nav-link" href="' . base_url() . 'auth" title="Login">Login</a>
          </li>';
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Mobile Navbar -->
  <nav class="shadow-sm navbar navbar-dark navbar-expand fixed-bottom d-md-none d-lg-none d-xl-none mobile">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav nav-justified w-100">
        <li class="nav-item">
          <a href="#home" class="nav-link" title="Home">
            <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
              <path d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
            </svg>
          </a>
        </li>
        <li class="nav-item">
          <a href="#services" class="nav-link" title="Services">
            <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
            </svg>
          </a>
        </li>
        <li class="nav-item">
          <a href="#gallery" class="nav-link" title="Gallery">
            <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
              <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z" />
            </svg>
          </a>
        </li>
        <li class="nav-item">
          <a href="#contact" class="nav-link" title="Contact">
            <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z" />
            </svg>
          </a>
        </li>
        <li class="nav-item">
          <a href="#reviews" class="nav-link" title="Reviews">
            <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Jumbotron -->
  <section class="mb-3 jumbotron pattern" id="home">