<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/connectdb.php');
header("Content-Type: application/xls;  charset=utf-8");
header("Content-Disposition: attachment; filename=รายชื่อผู้สมัคร.xls; worksheet1=ชื่อชีท");
header("Pragma: no-cache");
header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SPC2024 KMITL</title>
</head>

<body class="font-mitr">
  <h2>รายชื่อผู้สมัคร รอการอนุมัติ</h2>
  <div class="table-responsive">
    <table class="table table-striped strip">
      <thead>
        <tr style="text-align: center;">
          <th>ID</th>
          <th>E-mail</th>
          <th>Name</th>
          <th>Telephone</th>
          <th>Type</th>
          <th>Registration Fee for SPC2024</th>
          <th>Abstract Number</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 0;
        $sql2 = $conn->query("SELECT * FROM tb_user WHERE role = 'user' ");
        foreach ($sql2 as $tr) {
          $no++;
          ?>
          <tr>
            <td>
              <?php echo $tr['user_id'] ?>
            </td>
            <td>
              <?php echo $tr['email'] ?>
            </td>
            <td>
              <?php echo $tr['title'] . $tr['firstname'] . " " . $tr['lastname'] ?>
            </td>
            <td style="text-align: center;">
              <?php echo $tr['telephone'] ?>
            </td>
            <td style="text-align: center;">
              <?php echo $tr['type'] ?>
            </td>
            <td style="text-align: center;">
              <?php echo $tr['total_price'] ?>
            </td>
            <td style="text-align: center;">
              <?php echo $tr['abstract_number'] ?>
            </td>
            <td style="text-align: center;">
              <?php echo $tr['approve'] ?>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  </div>


  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
  ?>

</body>

</html>