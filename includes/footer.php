<?php
if (isset($_POST['emailsubscibe'])) {
  $subscriberemail = $_POST['subscriberemail'];
  $sql = "SELECT SubscriberEmail FROM tblsubscribers WHERE SubscriberEmail=:subscriberemail";
  $query = $dbh->prepare($sql);
  $query->bindParam(':subscriberemail', $subscriberemail, PDO::PARAM_STR);
  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_OBJ);
  $cnt = 1;
  if ($query->rowCount() > 0) {
    echo "<script>alert('Already Subscribed.');</script>";
  } else {
    $sql = "INSERT INTO  tblsubscribers(SubscriberEmail) VALUES(:subscriberemail)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':subscriberemail', $subscriberemail, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {
      echo "<script>alert('Subscribed successfully.');</script>";
    } else {
      echo "<script>alert('Something went wrong. Please try again');</script>";
    }
  }
}
?>

<footer>

  <div class="footer-top">


    <div class="k">
      <ul>
        <li><a href="index.php" style="color:yellow">Головна</a></li>
        <li><a href="car-listing.php" style="color:yellow">Парк машин</a></li>
        <li><a href="contact-us.php" style="color:yellow">Зв'язатися з нами</a></li>
        <li><a href="page.php" style="color:yellow">Про нас</a></li>
      </ul>
    </div>
    <div class="k2">
      <h6>Давайте залишатися на зв'язку</h6>
      <div class="newsletter-form">
        <form method="post">
          <div class="form-group">
            <input type="email" name="subscriberemail" class="form-control newsletter-input" style="background-color:white;" required placeholder="Введіть   Email" />
          </div>
          <button type="submit" name="emailsubscibe" class="btn btn-block" style="background-color:yellow;">Підписатися</button>
        </form>
      </div>
    </div>

  </div>

  <div class="content-container"></div>
  <div class="footer__copyrights">

    <p>© Created by Yevhen Melnyk</p><a class="footer-clock" href="#">18:20:56</a>
    <p>All rights Reserved</p>
  </div>
  </div>
</footer>
<script>
  (function() {
    function updateClock() {
      const clockContainer = document.querySelector('.footer-clock');
      clockContainer.innerText = new Date().toLocaleTimeString();
    }
    updateClock();
    setInterval(updateClock, 1000);
  })();
</script>