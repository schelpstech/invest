<?php
include "../controller/conf.php";
?>
<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta description="Invest with HK Square Farms at 40% per annum for 3months, 6months and 12 months">
  <title>HK Square Farms - Investment Platform</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/logohk.png' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
          <div class="card card-primary">
              <div class="card-header">
             
                      
                      <img alt="image" src="./assets/img/logonew.png" class="header-logo" class="avatar-icon" width=100  />
                   
                <h3>Login</h3>
              </div>
              <div class="row">
                    <div class="form-group col-12" id="response">
                    <?php
							
              if (isset($_SESSION['reginfo']) && $_SESSION['reginfo'])
              {
                printf('<b>%s</b>', $_SESSION['reginfo']);
                unset($_SESSION['reginfo']);
              }
            ?>
              </div>
              <div class="card-body">
                <form method="POST" action="../backend/accessinv.php" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Account Number / Email Address</label>
                    <input id="email" type="text" class="form-control" name="email" autocomple="new-email" tabindex="1" required="yes" autofocus>
                    <div class="invalid-feedback">
                      Please enter your Investment Account Number or Email Address
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" autocomple="new-password" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login to Your Investment Account 
                    </button>
                  </div>
                </form>
                <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="register.php">Create One</a>
            </div>
                
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>