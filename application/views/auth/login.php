<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign in - Voler Admin Dashboard</title>
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
  <link rel="shortcut icon" href="<?= base_url('/'); ?>assets/img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/app.css">
</head>

<body>
  <div id="auth">

    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-5 col-sm-12">
          <div class="pt-4 card">
            <div class="card-body">
              <div class="mb-5 text-center">
                <img src="<?= base_url('/'); ?>assets/img/logo.png" height="48" class='mb-4'>
                <h3>WikiMovieMedia</h3>
                <p>Please sign in to continue to WMM.</p>
              </div>
              <form action="<?= base_url('auth/login'); ?>" method="POST">
                <!-- if $this->session->flashdata('item'); -->
                <div class="form-group">
                  <?php if ($this->session->flashdata('message')) { ?>
                    <?= $this->session->flashdata('message'); ?>
                  <?php } ?>
                </div>




                <div class="form-group position-relative has-icon-left">
                  <label for="email">email</label>
                  <div class="position-relative">
                    <input type="text" class="form-control" id="email" name="email">
                    <div class="form-control-icon">
                      <i data-feather="user"></i>
                    </div>
                  </div>
                </div>
                <div class="form-group position-relative has-icon-left">
                  <div class="clearfix">
                    <label for="password">Password</label>
                    <!-- <a href="auth-forgot-password.html" class='float-end'>
                      <small>Forgot password?</small>
                    </a> -->
                  </div>
                  <div class="position-relative">
                    <input type="password" class="form-control" id="password" name="password">
                    <div class="form-control-icon">
                      <i data-feather="lock"></i>
                    </div>
                  </div>
                </div>

                <div class='clearfix my-4'>
                  <div class="checkbox float-start">
                    <a href="<?= base_url('/auth/register'); ?>">Don't have an account? Register here.</a>
                  </div>

                </div>
                <div class="clearfix">
                  <button class="btn btn-primary float-end">Login</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <script src="<?= base_url(); ?>assets/js/feather-icons/feather.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/app.js"></script>

  <script src="<?= base_url(); ?>assets/js/main.js"></script>
</body>

</html>