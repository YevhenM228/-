<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>

<html>

<head>
  <title>Оренда автомобілів</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">
  <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
  <link href="assets/css/slick.css" rel="stylesheet">
  <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
  <style>
    .container {
      position: relative;
      font-family: Arial;
    }

    .text-block {
      position: absolute;
      bottom: 20px;
      left: 20px;

      color: white;
      padding-left: 20px;
      padding-right: 20px;
    }

    .text-blockk {
      position: absolute;
      bottom: 20px;
      right: 20px;
      color: white;
      padding-left: 20px;
      padding-right: 20px;
    }
  </style>
</head>

<body style="background-color:black;">
  <?php include('includes/header.php'); ?>
  <section id="banner">
    <img class="imgcar" src="img\car.jpg" style="width:100%;">
    <div class="container">
      <div class="text-block">
        <h4 style="color:white;">Вибери машину для оренди</h4> <br /><br />
      </div>
      <div class="text-blockk">
        <a href="car-listing.php" class="btn" style="background-color:yellow;">Пошук машини</a> <br /><br /><br />
      </div>

    </div>

    </div>

  </section>

  <section style="background-color:black;">
    <section id="banner">
      <div class="section-header text-center">
        <br />
        <h2 style="color:yellow;">Автомобілі для самостійного водіння в оренду</h2>
        <p>
        <div class="items">
          <div>
            <p style="color:white;">Величезний автопарк. Ми пропонуємо популярні та нові моделі автомобілів різних класів. <br>
            Презентабельний вигляд вашого авто – це не лише гарний настрій та зручності під час вікенду, а й гарантія успіху ділової зустрічі. <br>
            Вигідні умови оренди авто у Львові.  Автомобіль доставлять у будь-яку точку міста. <br>
            Мінімальний термін прокату становить одну добу.<br>
             Бездоганний технічний стан.<br>
              Кожна автівка – чиста, охайна, без жодних несправностей чи поломок. Адже ваша поїздка має бути насамперед безпечною і комфортною. <br>
              Відмінний сервіс. Ми виконаємо ваше замовлення максимально швидко і зручно для вас. І працюємо цілодобово.
          </p>
          </div>
          <div>
            <h3 style="color:yellow;">Без прихованих платежів</h3>
            <p style="color:white;">Наші ціни включають податки та страховку.<br>Те, що ви бачите, ви дійсно платите!</p>
          </div>
          <div>
            <h3 style="color:yellow;">Їдьте будь-куди</h3>
            <p style="color:white;">Наші автомобілі мають всі  дозволи. Тільки не забудьте платити державні збори та вхідні податки.</p>
          </div>
          <div>
            <h3 style="color:yellow;">Цілодобова допомога на дорозі</h3>
            <p style="color:white;">У нас є цілодобові партнери зі Львова. Допомога ніколи не буде далеко від вас.</p>
          </div>
          <div>
            <h3 style="color:yellow;">Страхування від збитків</h3>
            <p style="color:white;">Усі ваші бронювання включають страхування від збитків! Їдьте безпечно, але не хвилюйтеся!</p><br><br>
          </div>
        </div>
        </p>
      </div>
    </section>
    

    <section class="fun-facts-section">
      <div class="container div_zindex">
        <div class="row">
          <div class="col-lg-3 col-xs-6 col-sm-3">
            <div class="fun-facts-m" >
              <div class="cell">
                <h2 style = "font-size:20px;"><i class="fa fa-calendar" aria-hidden="true"></i>5+</h2>
                <p style="color:white;">Поїздок щодня</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6 col-sm-3">
            <div class="fun-facts-m" >
              <div class="cell">
                <h2 style = "font-size:20px;"><i class="fa fa-car" aria-hidden="true"></i>20 000+</h2>
                <p style="color:white;">Км проїзджено</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6 col-sm-3">
            <div class="fun-facts-m" >
              <div class="cell">
                <h2 style = "font-size:20px;"><i class="fa fa-user-circle-o" aria-hidden="true"></i> 1750+</h2>
                <p style="color:white;">Щасливих користувачів</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6 col-sm-3">
            <div class="fun-facts-m" >
              <div class="cell">
                <h2 style = "font-size:20px;"><i class="fa fa-car" aria-hidden="true"></i>10+</h2>
                <p style="color:white;">Число машин</p><br><br>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Dark Overlay-->
      <div class="dark-overlay"></div>
    </section>
    <!--Footer -->
    <?php include('includes/footer.php'); ?>
    <!-- /Footer-->
    <!--Back to top-->

    <!--/Back to top-->
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
    <!--bootstrap-slider-JS-->
    <script src="assets/js/bootstrap-slider.min.js"></script>
    <!--Slider-JS-->
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

</body>

</html>