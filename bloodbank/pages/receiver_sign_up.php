<!--
 * Author : Rohit Shakya
 * Date   : Oct-2020
 * Editor : Sublime text
 * Local server: Xampp
 * Title : Internshala Blood Bank Assignment  
 * Version: v1.2
 -->  
 <?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Blood Bank | Internshala</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-clock-time"></i> Monday - Saturday, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="icofont-phone"></i> Call us now +1 5589 55488 55
      </div>
    </div>
  </div>

  <main id="main">
  	 <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-clock-time"></i> Monday - Saturday, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="icofont-phone"></i> Call us now +1 5589 55488 55
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="../index.html" class="logo mr-auto"><img src="../assets/img/logo.png" alt=""></a>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="./home.php">Home</a></li>
          <li  class="active"><a href="./receiver_sign_up.php">Register</a></li>
          <li><a href="./receiver_login.php">Login</a></li>
          <li><a href="./hospital_login.php">Admin</a></li>
          <li><a href="./hospital_sign_up.php">Admin Sign Up</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    <a href="./view-available-sample.php" class="appointment-btn scrollto" href="javascript:void(0)" onclick="scrollToDownload()"><span class="d-none d-md-inline">Available Blood Sample</span></a>

    </div>
  </header><!-- End Header -->

  <main id="main">
<br><br><br><br><br><br>
      <div class="container" data-aos="fade-up">
        <div class="panel panel-success panel-size-custom">
            <div class="panel-body">
          <div class="col-lg-6">
            <form action="./receiver_register.php" method="POST">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div><br>
              <div class="form-group">
                <input type="text" class="form-control" name="bloodtype" id="bloodtype" placeholder="Blood Group" data-rule="minlen:1" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div><br>
              <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm Password" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div><br>
              </div>
              <input name="submit" class="appointment-btn scrollto" type="submit"></div>
            </form>
          </div>
        </div>      
      </div>
    </section>
  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

         <!--Additional content-->

        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Internshala</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://rohitshakya.github.io/">Rohit Shakya</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</body>
</html>