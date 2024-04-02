<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/connectdb.php');
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
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/navbar2.php');
  ?>
  <div class="container mt-3">
    <div class="row" style="margin: 10% 0%;">
      <div class="col-6 centerer">
        <div class="card border rounded"><!-- 18rem -->
          <img class="" src="/spc2024/img/participant.png" style="width:100%;box-shadow: rgba(0, 0, 0, 0.35) 0px -5px 15px;">
          <a href="register.php" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            <button type="button" class="btn btn-outline-primary" style="width: 100%;">
            <p style="font-size:3.5vw;">General audience</p>
            </button>
          </a>
        </div>
      </div>
      <div class="col-6 centerer">
        <div class="card border rounded"><!-- 18rem -->
          <img class="" src="/spc2024/img/presenter.png" style="width:100%;box-shadow: rgba(0, 0, 0, 0.35) 0px -5px 15px;">
          <a href="https://cmt3.research.microsoft.com/User/Login?ReturnUrl=%2FSPC2024" target="_blank" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            <button type="button" class="btn btn-outline-info" style="width: 100%;">
              <p style="font-size:2.5vw;">For Oral and Poster presentation</p>
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
  ?>

</body>

</html>