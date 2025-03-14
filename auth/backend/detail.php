<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/connectdb.php');
$id = $_GET['userid'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SPC2024 KMITL</title>
  <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/theme/css/self.css">
</head>

<body class="font-mitr">
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');
  ?>
  <div class="container">
    <div class="card mt-3" style="box-shadow:rgba(0, 0, 0, 0.35) 0px 5px 15px;">
      <div class="card-body">
        <?php $sql = $conn->query("SELECT * FROM tb_user INNER JOIN tb_pay 
    ON tb_user.pay_id = tb_pay.pay_id WHERE user_id = '" . $id . "' ");
        foreach ($sql as $row) { ?>
          <h1>
            <?php
            echo $row['title'] . $row['firstname'] . " " . $row['lastname'];
            ?>
          </h1>
          <h3>
            <?php
            echo $row['type'] . "<br>";
            echo "E-mail : " . $row['email'] . "<br>Telephone : " . $row['telephone'] . "<br>Fax : " . $row['fax'] . "<br><br>";
            ?>
          </h3>
          <h5>
            <?php
            echo $row['career'] . " from " . $row['company'] . "<br>";
            echo $row['address'] . " , " . $row['country'] . "<br>";
            echo "Extrameal : <font class='gray'>" . $row['extrameal'] . "</font><br>";
            ;
            echo "Food allergy and intolerance : <font class='gray'>" . $row['food'] . "</font><br>";
            echo "Name and address for payment receipt (ชื่อและที่อยู่ในใบเสร็จสำหรับเบิก) : <font class='gray'>" . $row['receipt'] . "</font>";
            echo "<br><br>" . $row['pay_name'];
            if ($row['pay_id'] == 2 || $row['pay_id'] == 3 || $row['pay_id'] == 4) {
              echo " ส่ง Abstract จำนวน " . $row['amount'] . " เรื่อง<br>รวมเป็นเงิน " . $row['total_price'] . " บาท<br>";
            } else {
              echo "<br>ราคา " . $row['total_price'] . " บาท<br>";
            } ?>
          </h5>

          <?php
          $sliporkey = $conn->query("SELECT * FROM tb_slip WHERE email = '" . $row['email'] . "' ");
          foreach ($sliporkey as $split) {
            if (Is_numeric($split['slip_name'])) { ?>
              <!-- The Key -->
              <div class="card mt-3">
                <div class="cardbody" style="padding:2% 5%;">
                  <h5 class="card-title">"KEY" for Attach file : </h5>
                  <?php
                  echo $split['slip_name'];
                  ?>
                </div>
              </div>
            <?php } else { ?>
              <!-- สำเนาบัตรนักเรียน / นักศึกษา -->
              <?php if ($row['pay_id'] == 4) { ?>
                <div class="card mt-3" style="box-shadow:rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                  <div class="cardbody" style="padding:2% 5%;">
                    <h5 class="card-title">สำเนาบัตรนักเรียน</h5>
                    <?php $sql2 = $conn->query("SELECT * FROM tb_student WHERE email = '" . $row['email'] . "' ");
                    foreach ($sql2 as $row2) {
                      $type = strrchr($row2['student_name'], ".");
                      if ($type == ".pdf") {
                        echo "<a href='/file/upload/studentcard/{$row2['student_name']}' target='_blank'>Link Student ID Card</a>";
                      } else {
                        echo "<a href='/file/upload/studentcard/{$row2['student_name']}' target='_blank'>
                  <img src='/file/upload/studentcard/" . $row2['student_name'] . "' class='img-thumbnail'
                    style='box-shadow:rgba(0, 0, 0, 0.35) 0px 5px 15px;width: 15rem;margin: 0% 5%;'></a>";
                      }
                    } ?>
                  </div>
                </div>
              <?php } ?>
              <!-- สลีปโอนเงิน -->
              <div class="card mt-5" style="box-shadow:rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                <div class="cardbody" style="padding:2% 5%;">
                  <h5 class="card-title">หลักฐานการโอนเงิน</h5>
                  <?php $sql3 = $conn->query("SELECT * FROM tb_slip WHERE email = '" . $row['email'] . "' ");
                  foreach ($sql3 as $row3) {
                    $type2 = strrchr($row3['slip_name'], ".");
                    if ($type2 == ".pdf") {
                      echo "<a href='/file/upload/slip/{$row3['slip_name']}' target='_blank'>Link Slip</a>";
                    } else {
                      echo "<a href='/file/upload/slip/{$row3['slip_name']}' target='_blank'><img src='/file/upload/slip/" . $row3['slip_name'] . "' class='img-thumbnail'
          style='box-shadow:rgba(0, 0, 0, 0.35) 0px 5px 15px;width: 20rem;margin: 2% 5%;'></a>";
                    }
                  } ?>
                </div>
              </div>
            <?php }
          } ?>

          <div class="mt-5" style="background-color: rgb(255 122 1 / 20%);padding: 2%;">
            <form action="approvephp.php?userid=<?php echo $row['user_id']; ?>" method="POST">
              <div id="add" class="form-outline mb-2" style="display:none;">
                <label class="form-label">
                  <h5>ในกรณี disapprove โปรดระบุสาเหตุเพื่อส่งข้อความถึงผู้สมัคร : </h5>
                </label>
                <input id="addinput" type="text" class="form-control" name="message" />
              </div>
              <div class="form-outline mb-2 mt-3">
                <label class="form-label">
                  <h5>Please Input Password to Confirm : </h5>
                </label>
                <input type="password" class="form-control" name="password" required />
              </div>
              <div class="text-end">
                <?php if ($row['approve'] == "wait") { ?>
                  <button id="dis1" type="button" class="btn btn-l mt-2 text-white"
                    onclick="addmessage()">Disapprove</button>
                  <button id="dis2" type="submit" class="btn btn-l mt-2 text-white" name="disapprove"
                    style="display:none;">Disapprove</button>
                  <button type="submit" class="btn btn-l mt-2 text-white" name="approve" id="ap">Approve</button>
                <?php } else if ($row['approve'] == "approve") { ?>
                    <button type="submit" class="btn btn-l mt-2 text-white" name="disapprove"
                      onclick="addmessage()">Disapprove</button>
                <?php } else if ($row['approve'] == "disapprove") { ?>
                      <button type="submit" class="btn btn-l mt-2 text-white" name="approve">Approve</button>
                <?php } ?>
              </div>
            </form>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>

  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
  ?>
  <script type="text/javascript">
    function addmessage() {
      document.getElementById('add').style.display = 'contents';
      document.getElementById('dis1').style.display = 'none';
      document.getElementById('dis2').style.display = 'inline';
      document.getElementById('ap').style.display = 'none';
      document.getElementById('addinput').setAttribute('required', '');
    };
  </script>
</body>

</html>