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
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/navbar.php');
  ?>
  <div class="container">
    <h1 class="card-title centerer mt-3">Awards</h1>
    <div class="card border-0" style="color: #494949;">
      <h5>Presentation Awards</h5>
      <ul class="unlist">
        <li>Best Oral Presentation Awards</li>
        <li>Best Poster Awards</li>
        <li>Honorable Mention Awards</li>
      </ul>
    </div>
  </div>

  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
  ?>

</body>

</html>