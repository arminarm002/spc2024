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
  
  <div class="container">
    <h1 class="card-title centerer mt-3">Conference Program Summary</h1>
    <div class="card border-0 mt-3" style="color: #494949;">
      <a href="/spc2024/img/program.jpg" target="_blank">
        <img src="/spc2024/img/program.jpg" style="display:block; margin:auto; width:70%;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
      </a>
    </div>
    <h1 class="card-title centerer mt-5">Overview Program (TBA)</h1>
    <div style="text-align: center;"><img src="/spc2024/img/soon.png" class="w-50"></div>
  </div>

  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
  ?>
  
</body>

</html>