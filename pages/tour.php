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
    <h3 class="card-title centerer mt-3" style="text-align: center;">The SPC2024 Organizing Committee has arranged sightseeing tours for the
      conference delegates offering an opportunity to experience the central part of Ayuthaya</h3>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 centerer mt-3">
        <div class="card border-0 mt-3" style="color: #494949;">
          <a href="/spc2024/img/news/tour1.jpg" target="_blank">
            <img src="/spc2024/img/news/tour1.jpg"
              style="display:block; margin:auto; width:70%;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
          </a>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 centerer mt-3">
        <div class="card border-0 mt-3" style="color: #494949;">
          <a href="/spc2024/img/news/tour2.jpg" target="_blank">
            <img src="/spc2024/img/news/tour2.jpg"
              style="display:block; margin:auto; width:70%;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
          </a>
        </div>
      </div>
    </div>
    <h5 class="mt-3">A special two groups of
      tours have been arranged for Wednesday, 5th June from 2.30-4.00 pm. Detailed itineraries for each
      excursion are available below. Note that the spaces are limited and therefore, seats are allocated
      on a first come, first served basis.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register >>> <a
        href="https://shorturl.at/jCFWX" class="btn btn-warning" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"
        target="_blank">Click </a></h5>
  </div>
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
  ?>

</body>

</html>