<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- CSS Local -->
  <link href="style5.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

  <!-- Font From Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500;700&family=Roboto:wght@900&display=swap" rel="stylesheet">

  <!-- Icon From FontAwesome -->
  <script src="https://kit.fontawesome.com/c12c059ff2.js" crossorigin="anonymous"></script>

  <title>Rest Server API Akbar Nazzilla</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="bg-white navbar navbar-expand-lg navbar-light border-bottom" style="height: 5rem;">
    <div class="container">
      <a class="navbar-brand poppins" href="#">Rest Server</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav fw-bold ms-auto poppins">
          <li class="nav-item">
            <a class="nav-link text-warning me-4" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary me-4" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary me-4" href="#project">Portofolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary me-4" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Of Navbar -->

  <!-- Landing Page -->
  <section class="text-center text-white jumbotron">
    <div class="container">
      <br>
      <div class="row align-items-center">
        <div class="col-md text-start">
          <p class="mb-0 text-landing2 fs-4 fw-bold">WELCOME</p>
          <h1 class="display-1 roboto text-landing2 fw-bolder">REST <span class="text-landing1">SERVER</span></h1>
          <p class="mt-3 mb-0 lead text-dark fs-3"><br></p>
          <p class="mt-0 mb-4 lead2 text-dark fw-light fs-4"><br><br></p>
          <a href="#contact"><button type="button" class="mb-5 btn1 btn btn-primary rounded-pill ps-3 pe-3">Kuy Grab!</button></a>
        </div>
        <div class="col-md">
          <img src="images/landingpage.svg" alt="landing" class="img-fluid">
        </div>
      </div>
      <br><br>
    </div>
  </section>
  <!-- End Of Landing Page -->


  <!-- About Me -->
  <section class="about" id="about">
    <div class="container text-white">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
          <img src="images/rony.jpg" alt="profile" class="border-0 img-thumbnail rounded-circle">
        </div>

        <div class="text-center col-md-6 ps-3 pe-3" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1500">
          <br>
          <p class="fw-bold fs-3">HI, Nice to meet you.</p>
          <br>
          Let me introduce myself, I am Informatics engineering student at Universitas PGRI Ronggolawe Tuban, interested in programming especially web programming, experienced as a freelance junior web developer, succeeded in creating websites according to client needs. trying to continue to learn and explore programming languages in order to become a professional web developer. <br>
          I have some expertise in web programming including: HTML, CSS, Javascript, Bootstrap, PHP, OOP, Codeigniter, MySql, Git, etc.
          <br><br>
          <a href="Resume Khoironi Arief.pdf">
            <button type="button" data-aos="zoom-in-down" data-aos-delay="500" data-aos-duration="1500" class="mt-3 mb-5 btn btn-warning rounded-pill ps-3 pe-3 fw-bold text-dark">Download CV</button></a>
        </div>
      </div>
      <br>

    </div>
  </section>
  <!-- End Of About Me -->


  <section class="project">
    <!-- Panel Spesializing -->
    <div class="container pb-5 text-white">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
        <div class="pt-5 pb-5 shadow col-10 align-self-center panel">
          <p class="mb-0 text-center poppins text-primary fs-5 fw-bold">SPESIALIZING IN</p>
          <br>
          <div class="row justify-content-center ps-3 pe-3">
            <div class="p-1 col-md-4">
              <div class="text-center"><img src="images/frontend.png" alt="frontend" style="height: 60px;"></div>
              <p class="pt-3 mb-0 text-center text-primary fs-6 fw-bold">Front End Developer</p>
              <p class="pt-1 mt-0 text-center text-dark uk1">HTML, CSS, Javascript, Bootstrap.</p>
            </div>
            <div class="p-1 col-md-4">
              <div class="text-center"><img src="images/backend.png" alt="backend" style="height: 60px;"></div>
              <p class="pt-3 mb-0 text-center text-primary fs-6 fw-bold">Back End Developer</p>
              <p class="pt-1 mt-0 text-center text-dark uk1">PHP, MySQL, CodeIgniter.</p>
            </div>
            <div class="p-1 col-md-4">
              <div class="text-center"><img src="images/design.png" alt="design" style="height: 60px;"></div>
              <p class="pt-3 mb-0 text-center text-primary fs-6 fw-bold">Graphic Designer</p>
              <p class="pt-1 mt-0 text-center text-dark uk1">Figma, CorelDraw.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="project"></div>
    <!-- End Of Panel -->

    <br><br><br>
    <p class="text-center text-primary fs-1 fw-bold poppins">MY PROJECTS</p>
    <br><br><br>

    <!-- My Project -->
    <div class="container">
      <div id="carouselExampleDark" class="carousel slide carousel-dark" data-bs-ride="carousel">
        <div class="row align-items-center">

          <!-- Button Prev -->
          <div class="text-center col-1">
            <button class="border-0 project" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
          </div>
          <!-- End Of Button Prev -->

          <!-- Project Items -->
          <div class="col-10">
            <div class="carousel-inner">

              <!-- Project 1 -->
              <div class="carousel-item active" data-bs-interval="10000">
                <div class="border-0 card">
                  <div class="p-3 row align-items-center">
                    <div class="col-md-6">
                      <p class="pt-4 text-warning fw-bold fs-4 ps-4 poppins">Sistem Informasi Administrasi</p><br>
                      <p class="text-dark fs-6 ps-4 pe-5">Project magang di dinas pendidikan, membuat sistem informasi untuk pencatatan surat masuk dan keluar. <br>
                        Front end : HTML | CSS | Javascript | Bootstrap <br>
                        Back end : Native PHP | Mysql</p>
                      <a class="mb-5 btn btn-primary btn-sm ms-4 rounded-pill ps-3 pe-3 poppins" href="https://suratdispendik.000webhostapp.com">Demo</a>
                      <a class="mb-5 btn btn-primary btn-sm ms-2 rounded-pill ps-3 pe-3 poppins" href="https://github.com/khoirony/dispendik">Source Code</a>
                    </div>
                    <div class="p-3 col-md-6 pe-5">
                      <a href="https://suratdispendik.000webhostapp.com">
                        <img src="images/1.jpeg" class="shadow card-img-top" alt="...">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Of Project 1 -->

              <!-- Project 2 -->
              <div class="carousel-item">
                <div class="border-0 card">
                  <div class="p-3 row align-items-center">
                    <div class="col-md-6">
                      <p class="pt-4 text-warning fw-bold fs-4 ps-4 poppins">BUMI HARTA INTERNUSA</p><br>
                      <p class="text-dark fs-6 ps-4 pe-5">Project membuat website company profile untuk perusahan eksportir kelapa dengan nama BUMI HARTA INTERNUSA.<br>
                        Front end : HTML | CSS | Javascript | Bootstrap <br>
                        Back end : Native PHP | Mysql</p>
                      <a class="mb-5 btn btn-primary btn-sm ms-4 rounded-pill ps-3 pe-3 poppins" href="https://bumicoco.com">Demo</a>
                      <a class="mb-5 btn btn-primary btn-sm ms-2 rounded-pill ps-3 pe-3 poppins" href="https://github.com/khoirony/bumicoco">Source Code</a>
                    </div>
                    <div class="p-3 col-md-6 pe-5">
                      <a href="https://bumicoco.com">
                        <img src="images/2.jpeg" class="shadow card-img-top" alt="...">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Of Project 2 -->

              <!-- Project 3 -->
              <div class="carousel-item">
                <div class="border-0 card">
                  <div class="p-3 row align-items-center">
                    <div class="col-md-6">
                      <p class="pt-4 text-warning fw-bold fs-4 ps-4 poppins">Sistem Pendukung Keputusan <span class="text-danger">(soon)</span></p><br>
                      <p class="text-dark fs-6 ps-4 pe-5">Project website untuk skripsi saya S1 Teknik Informatika Unirow Tuban.<br>
                        Front end : HTML | CSS | Javascript | Bootstrap <br>
                        Back end : PHP | Mysql | CodeIgniter</p>
                      <button class="mb-5 btn btn-primary btn-sm ms-4 rounded-pill ps-3 pe-3 poppins" href="https://suratdispendik.000webhostapp.com">Demo</button>
                      <button class="mb-5 btn btn-primary btn-sm ms-2 rounded-pill ps-3 pe-3 poppins" href="https://github.com/khoirony/dispendik">Source Code</button>
                    </div>
                    <div class="p-3 col-md-6 pe-5">
                      <a href="https://suratdispendik.000webhostapp.com">
                        <img src="images/3.jpeg" class="shadow card-img-top" alt="...">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Of Project 3 -->

            </div>
          </div>
          <!-- End Of Project Items -->

          <!-- Button Next -->
          <div class="text-center col-1">
            <button class="border-0 project" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
          </div>
          <!-- End Of Button Next -->

        </div>

        <!-- Carousel Indicator -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

      </div>
    </div>
    <!-- End Of My Project -->
    <br><br><br><br>
    <div id="contact"></div>
    <br><br><br>
  </section>

  <!-- Color Gradient -->
  <div class="gradient" id="gradient">
    <p class="mb-0 text-center poppins text-primary fs-1 fw-bold">GET IN TOUCH</p>
    <p class="mt-0 text-center poppins fw-light">
      Interesting in working together? <br>
      Feel free to contact me for any project or collaboration.
    </p>
    <br>
  </div>

  <!-- Contact Section -->
  <section class="contact">
    <div class="container">
      <br>
      <div class="row">
        <div class="col-md-6">
          <img src="images/contact.svg" alt="contact" class="img-fluid">
        </div>
        <div class="col-md-6">

          <!-- Notif after send message -->
          <div id="status"><br></div>

          <!-- Form Message -->
          <form action="https://formspree.io/f/mjvlvlwq" method="post" id="formcontact">
            <div class="mt-1 mb-3">
              <input type="text" class="border-0 form-control form-control-lg formcustom" id="Nama" name="Nama Lengkap" placeholder="Full Name">
            </div>
            <div class="mb-3">
              <input type="email" class="border-0 form-control form-control-lg formcustom" id="Email" name="Email" aria-describedby="emailHelp" placeholder="Your Email">
            </div>
            <div class="mb-3">
              <textarea class="border-0 form-control form-control-lg formcustom" id="Pesan" name="Pesan" rows="3" placeholder="Message"></textarea>
            </div>
            <center>
              <button type="submit" class="btn btn-primary rounded-pill ps-4 pe-4 poppins">Send</button>
            </center>
          </form>
          <!-- End Of Form Message -->

        </div>
      </div>
    </div>
  </section>
  <!-- End Of Contact Section -->
  <br><br><br><br><br>

  <!-- Footer -->
  <footer class="text-center text-white bg-grey" id="footer">
    <div class="container pt-5 pb-4">
      <p class="text-dark">
        <a href="https://www.linkedin.com/in/khoirony-arief/" class="m-3 text-primary me-5"><i class="bi bi-linkedin fs-2"></i></a>
        <a href="https://github.com/khoirony" class="m-3 text-primary me-5"><i class="bi bi-github fs-2"></i></a>
        <a href="mailto:khoironyarief08@gmail.com" class="m-3 text-primary me-5"><i class="bi bi-envelope-fill fs-2"></i></a>
        <a href="https://wa.me/6283870461640" class="m-3 text-primary"><i class="bi bi-whatsapp fs-2"></i> </a>
      </p>
      <p class="text-center text-dark fw-light poppins">&copy;<span class="text-primary">2021 All Right Reserved</span> - Developed by Khoirony Arief</p>
    </div>
  </footer>
  <!-- End Of Footer -->

  <!-- AOS Scroll Script -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- GSAP Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/TextPlugin.min.js"></script>
  <script>
    gsap.registerPlugin(TextPlugin);
    gsap.to('.lead', {
      duration: 2,
      delay: 0.1,
      text: 'Website penyedia data batik Indonesia'
    });
    gsap.to('.lead2', {
      duration: 2.5,
      delay: 2.2,
      text: 'Sulit dimengerti, semoga harimu menyenangkan!'
    });
    gsap.from('.jumbotron img', {
      duration: 2,
      y: 50,
      opacity: 0,
      ease: 'expo.out'
    });
    gsap.from('.btn1', {
      duration: 1,
      delay: 4.5,
      y: -100,
      opacity: 0
    });
    //gsap.from('.navbar', { duration: 1.5, y: -100, opacity: 0, ease: 'bounce' });
  </script>

  <!-- Script send email 3rd party -->
  <script>
    var form = document.getElementById("formcontact");

    async function handleSubmit(event) {
      event.preventDefault();
      var status = document.getElementById("status");
      var data = new FormData(event.target);

      var nama = document.getElementById("Nama").value;
      var email = document.getElementById("Email").value;
      var message = document.getElementById("Pesan").value;
      if (nama != "" && email != "" && message != "") {
        fetch(event.target.action, {
          method: form.method,
          body: data,
          headers: {
            'Accept': 'application/json'
          }
        }).then(response => {
          status.innerHTML = "<div class='pt-2 pb-2 alert alert-warning' role='alert'><i class='fas fa-check me-1'></i>Thanks for your message!</div>";
          form.reset()
        }).catch(error => {
          status.innerHTML = "<div class='pt-2 pb-2 alert alert-danger' role='alert'><i class='fas fa-exclamation me-1'></i>Oops! There was a problem submitting your form</div>"
        });
      } else if (nama == "") {
        status.innerHTML = "<div class='pt-2 pb-2 alert alert-danger' role='alert'><i class='fas fa-exclamation me-1'></i> Full Name field is empty</div>";
      } else if (email == "") {
        status.innerHTML = "<div class='pt-2 pb-2 alert alert-danger' role='alert'><i class='fas fa-exclamation me-1'></i>Email field is empty</div>";
      } else if (message == "") {
        status.innerHTML = "<div class='pt-2 pb-2 alert alert-danger' role='alert'><i class='fas fa-exclamation me-1'></i>You must type your message</div>";
      } else {
        status.innerHTML = "<div class='pt-2 pb-2 alert alert-danger' role='alert'><i class='fas fa-exclamation me-1'></i>You must fill this form first!</div>";
      }


    }
    form.addEventListener("submit", handleSubmit)
  </script>

  <!-- Bootstrap Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>