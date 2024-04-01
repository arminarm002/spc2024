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
    <h1 class="card-title centerer mt-3">Important Dates</h1>
    <img src="/spc2024/img/exten.png" class="extenlogo mt-3">
    <table class="table tb-stip table-striped table-hover" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
      <tbody style="font-size: 1.5vw;">
        <tr>
          <td>Abstract submission</td>
          <td>1 February - <span class="redmidline">31 March 2024</span>
            <span class="red"> 20 April 2024</span>
          </td>
        </tr>
        <tr>
          <td>Notification of abstract acceptance</td>
          <td>30 April 2024</td>
        </tr>
        <tr>
          <td>Deadline of payment acceptance</td>
          <td>15 May 2024</td>
        </tr>
        <tr>
          <td>Full text submission</td>
          <td>10 July 2024</td>
        </tr>
      </tbody>
    </table>
    <table class="table tb-stip table-striped table-hover mt-5" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
      <thead style="text-align: center;font-size: 2.5vw;">
        <tr>
          <td colspan="2">
            <p>Overall Program of SPC2024</p>
          </td>
        </tr>
      </thead>
      <tbody style="font-size: 2vw;">
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="2">
            <h4 class="fs-35 centerer">Coming soon</h4>
          </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>

  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
  ?>
</body>

</html>