<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SPC2024 KMITL</title>
  <link rel="stylesheet" href="/spc2024/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/spc2024/theme/css/self.css">
</head>

<body class="font-mitr">
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/navbar2.php');
  ?>
  <div class="container">
    <h1 class="centerer mt-3">Registration Fee (THB)</h1>
    <h4 class="centerer mt-3"><b>Register Form </b>&nbsp;>>>&nbsp; 
      <a href="/spc2024/auth/register.php" class="btn btn-warning">Click</a>
    </h4>
    <div class="centerer mt-3">
      <a href="/spc2024/img/news/registration.jpg" target="_blank" style="text-align: center;">
        <img class="w-75" src="/spc2024/img/news/registration.jpg"
          style="box-shadow: rgba(0, 0, 0, 0.50) 2px 5px 15px;">
      </a>
    </div>

    <h1 class="centerer mt-3">Payment</h1>
    <div class="centerer mt-3">
      <a href="/spc2024/img/news/payment.jpg" target="_blank" style="text-align: center;">
        <img class="w-75" src="/spc2024/img/news/payment.jpg" style="box-shadow: rgba(0, 0, 0, 0.50) 2px 5px 15px;">
      </a>
    </div>
  </div>
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
  ?>
</body>

</html>