<?php 
session_start();

if(isset($_SESSION['login'])):
  echo "<script>history.back();</script>";
else:
unset($_SESSION['login']); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="http://localhost/project/public/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="http://localhost/project/public/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="http://localhost/project/public/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="http://localhost/project/public/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="http://localhost/project/public/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">

              <form action="auth-login.php" method="post">
                <div class="form-group">
                  <label class="label">Email</label>
                  <div class="input-group">
                    <input name="email" type="email" class="form-control" placeholder="example@gmail.com">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input name="password" type="password" class="form-control" placeholder="*********">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button name="login" type="submit" class="btn btn-primary submit-btn btn-block">Login</button>
                </div>
                <div class="form-group d-flex justify-content-between">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked> Keep me signed in
                    </label>
                  </div>
                  <a href="forgot.php" class="text-small forgot-password text-black">Forgot Password</a>
                </div>
              </form>

            </div>
            <ul class="auth-footer">
              <li>
                <a href="#">Conditions</a>
              </li>
              <li>
                <a href="#">Help</a>
              </li>
              <li>
                <a href="#">Terms</a>
              </li>
            </ul>
            <p class="footer-text text-center">copyright © 2018 Bootstrapdash. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="http://localhost/project/public/vendors/js/vendor.bundle.base.js"></script>
  <script src="http://localhost/project/public/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="http://localhost/project/public/js/off-canvas.js"></script>
  <script src="http://localhost/project/public/js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
<?php endif; ?>