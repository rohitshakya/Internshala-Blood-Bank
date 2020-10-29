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
if(!isset($_SESSION['email']))
{
  header('Location: ../index.html'); //check for login, otherwise it will redirect to index.html
}?>
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

      <a href="index.html" class="logo mr-auto"><img src="../assets/img/logo.png" alt=""></a>
      
      <?php 
        echo $_SESSION['email']; //user email address after login
      ?>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="./hhome.php">Home</a></li>
          <li><a href="./addbloodinfo.php">Add Blood Info</a></li>
          <li><a href="./request.php">View Request</a></li>
          <li><a href="./logout.php">Logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->
      <a href="./view-available-sample.php" class="appointment-btn scrollto" href="javascript:void(0)" onclick="scrollToDownload()"><span class="d-none d-md-inline">Available Blood Sample</span></a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
 <br><br><br>
    <section id="home" class="gallery">
      <div class="container" data-aos="fade-up">
      		<img src="../assets/img/bloodbank.png" alt="">
      </div>
    </section>
<br><br>
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