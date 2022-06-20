<header>
  <nav id="navigation_bar" class="navbar navbar-default" style="background-color: BLACK;">
    <div class="container">
      <div class="navbar-header" style="background-color: BLACK;">
        <style>
          div {
            font-family: Play;
            font-size: 20px;
            color: yellow;
          }
        </style>

        <div class="user_login">
          <?php if (strlen($_SESSION['login']) == 0) {  ?>
            <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal" style="background-color:yellow;">My Account</a> </div>
          <?php } else {
            echo  "Вітаємо у сервісі оренди авто";
          } ?>
        </div>
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
                <?php
                $email = $_SESSION['login'];
                $sql = "SELECT FullName FROM tblusers WHERE EmailId=:email ";
                $query = $dbh->prepare($sql);
                $query->bindParam(':email', $email, PDO::PARAM_STR);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                if ($query->rowCount() > 0) {
                  foreach ($results as $result) {
                    echo htmlentities($result->FullName);
                  }
                } ?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
                <?php if ($_SESSION['login']) { ?>
                  <li><a href="profile.php">Налаштування профілю</a></li>
                  <li><a href="update-password.php">Оновлення паролю</a></li>
                  <li><a href="my-booking.php">Мої замовлення</a></li>
                  <li><a href="logout.php">Вийти</a></li>
                <?php } else { ?>
                  <li><a href="#loginform" data-toggle="modal" data-dismiss="modal">Налаштування профілю</a></li>
                  <li><a href="#loginform" data-toggle="modal" data-dismiss="modal">Оновлення паролю</a></li>
                  <li><a href="#loginform" data-toggle="modal" data-dismiss="modal">Мої замовлення</a></li>
                  <li><a href="#loginform" data-toggle="modal" data-dismiss="modal">Вийти</a></li>
                <?php } ?>
              </ul>
            </li>
          </ul>
        </div>
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="collapse navbar-collapse" id="navigation">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Головна</a> </li>
            <li><a href="car-listing.php">Парк машин</a>
            <li><a href="contact-us.php">Зв'язатися з нами</a></li>
            <li><a href="page.php">Про нас</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>