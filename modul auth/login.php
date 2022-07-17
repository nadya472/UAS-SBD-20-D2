<?php
session_start();
require_once 'function5.php';

if(isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

  // cek username
  if(mysqli_num_rows($result) === 1 ) {

    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"]) ) {
      header("location: ../index.php");

      exit;



    }
  }
  $error = true;



}


?>


<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Vuesax admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Vuesax admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>Login Page</title>
  <link rel="apple-touch-icon" href="../images/Health Care.png">
  <link rel="shortcut icon" type="image/x-icon" href="../images/Health Care.png">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="../assets/vendors/css/vendors.min.css">
  <!-- END: Vendor CSS-->

  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-extended.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/colors.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/components.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/themes/dark-layout.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/themes/semi-dark-layout.css">

  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" type="text/css" href="../assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/pages/authentication.css">
  <!-- END: Page CSS-->

  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="semi-dark-layout">
  <!-- BEGIN: Content-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="row flexbox-container">
          <div class="col-xl-8 col-11 d-flex justify-content-center">
            <div class="card bg-authentication rounded-0 mb-0">
              <div class="row m-0">
                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                  <img src="../images/Health Care.png" width="300" alt="branding logo">
                </div>
                <div class="col-lg-6 col-12 p-0">
                  <div class="card rounded-0 mb-0 px-2">
                    <div class="card-header pb-1">
                      <div class="card-title">
                        <h4 class="mb-0">Login</h4>
                      </div>
                    </div>
                    <p class="px-2">Welcome! please login to your account.</p>
                    <?php if(isset($error)) :?>
                      <p style="color:red; font-style:italic;"> Username atau password salah
                    <?php endif; ?>
                    <div class="card-content">
                      <div class="card-body pt-1">
                        <form action="" method="post">
                          <fieldset class="form-label-group form-group position-relative has-icon-left">
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
                            <div class="form-control-position">
                              <i class="feather icon-user"></i>
                            </div>
                            <label for="username">Username</label>
                          </fieldset>

                          <fieldset class="form-label-group position-relative has-icon-left">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                            <div class="form-control-position">
                              <i class="feather icon-lock"></i>
                            </div>
                            <label for="password">Password</label>
                          </fieldset>
                          <!-- <a href="auth-register.html" class="btn btn-outline-primary float-left btn-inline">Register</a> -->
                          <div class="sc col-log-2" style="float:right">
                                <input type="submit" name="login" value="Login" class="btn btn-primary rounded py-1 px-1" >
                                <a href="registrasi.php" class="btn btn-primary rounded py-1 px-1">Registrasi</a>
                         </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- END: Content-->


  <!-- BEGIN: Vendor JS-->
  <script src="../assets/vendors/js/vendors.min.js"></script>
  <!-- BEGIN Vendor JS-->

  <!-- BEGIN: Page Vendor JS-->
  <!-- END: Page Vendor JS-->

  <!-- BEGIN: Theme JS-->
  <script src="../assets/js/core/app-menu.js"></script>
  <script src="../assets/js/core/app.js"></script>
  <script src="../assets/js/scripts/components.js"></script>
  <!-- END: Theme JS-->

  <!-- BEGIN: Page JS-->
  <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>