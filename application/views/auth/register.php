<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up - Voler Admin Dashboard</title>
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">

  <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/app.css">
</head>

<body>
  <div id="auth">

    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-7 col-sm-12">
          <div class="pt-4 card">
            <div class="card-body">
              <div class="mb-5 text-center">
                <img src="<?= base_url(); ?>assets/images/favicon.svg" height="48" class='mb-4'>
                <h3>Sign Up</h3>
                <p>Please fill the form to register.</p>
              </div>
              <form action="<?= base_url('auth/register_action'); ?>" method="POST">
                <div class="row">
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Name</label>
                      <input type="text" id="first-name-column" class="form-control" name="nama">
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="email-id-column">Email</label>
                      <input type="email" id="email-id-column" class="form-control" name="email">
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="password-id-column">password</label>
                      <input type="password" id="password-id-column" class="form-control" name="password">
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="confirm_password-id-column">confirm password</label>
                      <input type="confirm_password" id="confirm_password-id-column" class="form-control" name="confirm_password">
                    </div>
                  </div>
                </diV>

                <a href="<?= base_url('auth/login'); ?>">Have an account? Login</a>
                <div class="clearfix">
                  <button class="btn btn-primary float-end">Register</button>
                </div>
              </form>
              <div class="divider">
                <div class="divider-text">OR</div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <button class="mb-2 btn btn-block btn-primary"><i data-feather="facebook"></i>
                    Facebook</button>
                </div>
                <div class="col-sm-6">
                  <button class="mb-2 btn btn-block btn-secondary"><i data-feather="github"></i>
                    Github</button>
                </div>
              </div>
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