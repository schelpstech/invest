<?php
include "../controller/conf.php";
?>
<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
  
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header">
             
                      
                      <img alt="image" src="./assets/img/logonew.png" class="header-logo" class="avatar-icon" width=100  />
                   
                <h3>Register Investment Account</h3>
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
              </div>
              <div class="card-body">
              <form method="POST" action="../backend/enlistinv.php">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">First Name</label>
                      <input  type="text" id="investfname" name="investfname" class="form-control" required="yes" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input  type="text" id="investname"  name="investname"class="form-control"  required="yes">
                    </div>
                  </div> 
                  
                <div class="row">

                <div class="form-group col-6">
                    <label for="email">Email</label>
                    <input  type="email" autocomplete="no" id="investemail" name="investemail" class="form-control" required="yes">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group col-6">
                    <label for="email">Phone number</label>
                    <input id="investphone" name="investphone" type="tel"  class="form-control"  required="yes">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                 </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="investpin" name="investpin" type="password"  class="form-control pwstrength" data-indicator="pwindicator"
                        onchange="checkpinlength();" minlength="8" maxlength="20" required="yes" autocomplete="new-password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="investpinb" type="password" class="form-control"  minlength="8" maxlength="20" required="yes" onchange="checkpin();" autocomplete="new-password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="agree" required="yes">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div>
                  
                  
                    
                    <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block">
                      Register Investment Account
                    </button>
                  </div>
                    </form>
                
              </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="auth-login.php">Login</a>
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
  <script src="assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/auth-register.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
  <script src="../js/validate.js"></script>
  <script src="../js/jquery-3.3.1.min.js"></script>
</body>


<!-- auth-register.html  21 Nov 2019 04:05:02 GMT -->
</html>