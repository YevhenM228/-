<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>AHNA | CAR Rental</title>
  <!--Bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
  <!--Custome Style -->
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">
  <!--OWL Carousel slider-->
  <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
  <!--slick-slider -->
  <link href="assets/css/slick.css" rel="stylesheet">
  <!--bootstrap-slider -->
  <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
  <!--FontAwesome Font Style -->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">

  <!-- Fav and touch icons -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>

<body style="background-color:forestgreen;">

  <!--Header-->
  <?php include('includes/header.php'); ?>


  <section class="about-company">
    <div class="container_about-compani">
      <h2 class="about-us">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">Про нас</font>
        </font>
      </h2>
      <div class="slogan">
        <p>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Ми робимо все для того, щоб ви їздили з максимальним комфортом!</font>
          </font>
        </p>
      </div>
      <div class="offers">
        <p class="offers-p_first">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">
              Наша компанія працює на ринку прокату автомобілів України більше 2 років. </font>
            <font style="vertical-align: inherit;">Ви можете орендувати автомобіль будь-якого призначення, від ділової поїздки до підкорення доріг зі складним покриттям.
            </font>
          </font>
        </p>
        <p>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">
              У нас є кілька пунктів прийому у Львові, щоб ви могли взяти та залишити орендований автомобіль у будь-якому зручному місці. </font>
            <font style="vertical-align: inherit;">Пропонуємо найвигідніші умови оренди автомобіля.
            </font>
          </font>
        </p>
      </div>
      <a class="contact_buttom" href="contact-us.php">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">Зв'яжіться з нами</font>
        </font>
      </a>
    </div>
  </section>



  <!--Footer -->
  <?php include('includes/footer.php'); ?>
  <!-- /Footer-->



  <!--Login-Form -->
  <?php include('includes/login.php'); ?>
  <!--/Login-Form -->

  <!--Register-Form -->
  <?php include('includes/registration.php'); ?>

  <!--/Register-Form -->

  <!--Forgot-password-Form -->
  <?php include('includes/forgotpassword.php'); ?>
  <!--/Forgot-password-Form -->

  <!-- Scripts -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/interface.js"></script>
  <!--Switcher-->
  <script src="assets/switcher/js/switcher.js"></script>
  <!--bootstrap-slider-JS-->
  <script src="assets/js/bootstrap-slider.min.js"></script>
  <!--Slider-JS-->
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  
</body>


</html>