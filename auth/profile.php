<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/connectdb.php');
if ($_SESSION['role'] && $_SESSION['role'] == "user") {


  if ($_SESSION['type'] == "Oral Presenter" || $_SESSION['type'] == "Poster Presenter") {
    if ($_SESSION['abstract_number'] == "") {
      header("refresh: 1; url= /auth/fillabnum.php");
    } else {
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
        include ($_SERVER['DOCUMENT_ROOT'] . '/components/navbar2.php');

        $sql = $conn->query("SELECT * FROM tb_user INNER JOIN tb_pay 
    ON tb_user.pay_id = tb_pay.pay_id WHERE email='" . $_SESSION['email'] . "'");
        foreach ($sql as $row) { ?>

          <div class="container-fluid">
            <div class="row mt-3">
              <div class="col-sm-3 col-md-2">
                <?php include ($_SERVER['DOCUMENT_ROOT'] . '/components/sidebar.php'); ?>
              </div>
              <div class="col">
                <?php if ($row['approve'] == "wait") { ?>
                  <div class="alert alert-secondary" role="alert">
                    กรุณารอการยืนยันจากเจ้าหน้าที่
                  </div>
                <?php } else if ($row['approve'] == "approve") { ?>
                    <div class="alert alert-success" role="alert">
                      การลงทะเบียนของคุณ ได้รับการอนุมัติเรียบร้อย
                    </div>
                <?php } else if ($row['approve'] == "disapprove") { ?>
                      <div class="alert alert-danger" role="alert">
                        การลงทะเบียนของคุณ ไม่ผ่านการอนุมัติ เนื่องจาก "
                    <?php echo $row['message']; ?>" หากยืนยันว่าการลงทะเบียนของท่านถูกต้องครบถ้วน กรุณาติดต่อเจ้าหน้าที่
                      </div>
                <?php } ?>
                <div class="row">
                  <div class="col-sm-8">
                    <!-- ข้อมูลหลัก -->
                    <div class="card">
                      <div class="cardbody" style="padding:2% 5%;">
                        <h2>
                          <?php
                          echo $row['title'] . $row['firstname'] . " " . $row['lastname'] . "<br>";
                          ?>
                        </h2>
                        <h4>
                          <?php
                          echo "(" . $row['type'] . ")" . " " . " Abstract Number : " . $row['abstract_number'] . "<br>"
                            . $row['pay_name'] . " ";
                          if ($row['pay_id'] == 3 || $row['pay_id'] == 4) {
                            echo "ส่ง Abstract จำนวน " . $row['amount'] . " เรื่อง<br>รวมเป็นเงิน " . $row['total_price'] . " บาท<br>";
                          } else {
                            echo "<br>ราคา " . $row['total_price'] . " บาท<br>";
                          } echo "ที่อยู่สำหรับใบเสร็จ".$row['receipt'];
                          ?>
                        </h4>
                      </div>
                    </div>
                    <?php
                    $sliporkey = $conn->query("SELECT * FROM tb_slip WHERE email='" . $_SESSION['email'] . "'");
                    foreach ($sliporkey as $split) {
                      if (Is_numeric($split['slip_name'])) { ?>
                        <!-- The Key -->
                        <div class="card mt-3">
                          <div class="cardbody" style="padding:2% 5%;">
                            <h5 class="card-title">"KEY" for Attach file</h5>
                            <?php echo $split['slip_name']; ?>
                            <p>Go to Attach file >>> <a href="https://forms.gle/GGaWnWZJL7K8z1AY7"
                                class="btn btn-warning submisspagebutton" target="_blank">Click</a></p>
                          </div>
                        </div>
                      <?php } else { ?>
                        <!-- สำเนาบัตรนักเรียน / นักศึกษา -->
                        <?php if ($_SESSION['pay_id'] == 4) { ?>
                          <div class="card mt-3">
                            <div class="cardbody" style="padding:2% 5%;">
                              <h5 class="card-title">สำเนาบัตรนักเรียน</h5>
                              <?php $sql2 = $conn->query("SELECT * FROM tb_student WHERE email='" . $_SESSION['email'] . "'");
                              foreach ($sql2 as $row2) {
                                echo "<img src='/file/upload/studentcard/" . $row2['student_name'] . "' class='img-thumbnail'
                    style='box-shadow:rgba(0, 0, 0, 0.35) 0px 5px 15px;width: 15rem;margin: 0% 5%;'>";
                              } ?>
                            </div>
                          </div>
                        <?php } ?>
                        <!-- สลีปโอนเงิน -->
                        <div class="card mt-3">
                          <div class="cardbody" style="padding:2% 5%;">
                            <h5 class="card-title">หลักฐานการโอนเงิน</h5>
                            <?php $sql3 = $conn->query("SELECT * FROM tb_slip WHERE email='" . $_SESSION['email'] . "'");
                            foreach ($sql3 as $row3) {
                              echo "<img src='/file/upload/slip/" . $row3['slip_name'] . "' class='img-thumbnail'
                      style='box-shadow:rgba(0, 0, 0, 0.35) 0px 5px 15px;width: 20rem;margin: 2% 5%;'>";
                            } ?>
                          </div>
                        </div>
                      <?php }
                    }
                    ?>
                    <?php if ($row['approve'] == "disapprove") { ?>
                      <div class="card mt-3" style="background-color: rgb(255 122 1 / 20%);padding: 2%;">
                        <div class="card-body">
                          <form action="request.php?userid=<?php echo $row['user_id']; ?>" method="POST">
                            <div class="form-outline mb-2 mt-3">
                              <label class="form-label">
                                <h5>ยืนยันการส่งข้อมูล ให้เจ้าหน้าที่พิจารณาอีกครั้ง
                                  <br>Please Input Password to Confirm :
                                </h5>
                              </label>
                              <input type="password" class="form-control" name="password" required />
                            </div>
                            <div class="text-end">
                              <button type="submit" class="btn btn-l mt-2 text-white" name="request">Request</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    <?php } ?>
                  </div>

                  <div class="col-sm-4">
                    <!-- ข้อมูลทั่วไป -->
                    <div class="card mtop-3 bgorange">
                      <div class="cardbody" style="padding:2% 5%;">

                        <h4>
                          <?php echo $row['title'] . $row['firstname'] . " " . $row['lastname'] . "<br>"; ?>
                        </h4>
                        <h6>
                          <?php
                          echo $row['career'] . " from " . $row['company'] . $row['country'] . "<br>fax : " . $row['fax'] . "<br>Tel. : " . $row['telephone'] . "<br>Name and address for payment receipt
                      (ชื่อและที่อยู่ในใบเสร็จสำหรับเบิก) : " . $row['receipt'];
                          ?>
                        </h6>
                      </div>
                    </div>
                    <!-- ข้อมูลอาหาร -->
                    <div class="card mt-3 bgorange">
                      <div class="cardbody" style="padding:2% 5%;">
                        <h4>
                          Food
                        </h4>
                        <h6>
                          <?php
                          echo $row['extrameal'] . "<br>Food allergy and intolerance : " . $row['food'] . "<br>";
                          ?>
                        </h6>
                      </div>
                    </div>
                    <!-- ข้อมูลติดต่อ -->
                    <div class="card mt-3 bgorange">
                      <div class="cardbody" style="padding:2% 5%;">
                        <h4>Contact Us</h4>
                        <h6>Email : <i class="bi bi-envelope"></i>xxx@gmail.com</h6>
                        <h6>Tel. : <i class="bi bi-telephone"></i>098-7654321</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- row ใหญ่ -->
          </div><!-- container -->

        <?php } ?>

        <?php
        include ($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
        include ($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
        ?>

      </body>

      </html>


    <?php }
  } else { ?>
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
      include ($_SERVER['DOCUMENT_ROOT'] . '/components/navbar2.php');

      $sql = $conn->query("SELECT * FROM tb_user INNER JOIN tb_pay 
    ON tb_user.pay_id = tb_pay.pay_id WHERE email='" . $_SESSION['email'] . "'");
      foreach ($sql as $row) { ?>

        <div class="container-fluid">
          <div class="row mt-3">
            <div class="col-sm-3 col-md-2">
              <?php include ($_SERVER['DOCUMENT_ROOT'] . '/components/sidebar.php'); ?>
            </div>
            <div class="col">
              <?php if ($row['approve'] == "wait") { ?>
                <div class="alert alert-secondary" role="alert">
                  กรุณารอการยืนยันจากเจ้าหน้าที่
                </div>
              <?php } else if ($row['approve'] == "approve") { ?>
                  <div class="alert alert-success" role="alert">
                    การลงทะเบียนของคุณ ได้รับการอนุมัติเรียบร้อย
                  </div>
              <?php } else if ($row['approve'] == "disapprove") { ?>
                    <div class="alert alert-danger" role="alert">
                      การลงทะเบียนของคุณ ไม่ผ่านการอนุมัติ เนื่องจาก "
                  <?php echo $row['message']; ?>" หากยืนยันว่าการลงทะเบียนของท่านถูกต้องครบถ้วน กรุณาติดต่อเจ้าหน้าที่
                    </div>
              <?php } ?>
              <div class="row">
                <div class="col-sm-8">
                  <!-- ข้อมูลหลัก -->
                  <div class="card">
                    <div class="cardbody" style="padding:2% 5%;">
                      <h2>
                        <?php
                        echo $row['title'] . $row['firstname'] . " " . $row['lastname'] . "<br>";
                        ?>
                      </h2>
                      <h4>
                        <?php
                        echo "(" . $row['type'] . ")" . " " . " Abstract Number : " . $row['abstract_number'] . "<br>"
                          . $row['pay_name'] . " ";
                        if ($row['pay_id'] == 3 || $row['pay_id'] == 4) {
                          echo "ส่ง Abstract จำนวน " . $row['amount'] . " เรื่อง<br>รวมเป็นเงิน " . $row['total_price'] . " บาท<br>";
                        } else {
                          echo "<br>ราคา " . $row['total_price'] . " บาท<br>";
                        } echo "ที่อยู่สำหรับใบเสร็จ : ".$row['receipt'];
                        ?>
                      </h4>
                    </div>
                  </div>

                  <?php
                  $sliporkey = $conn->query("SELECT * FROM tb_slip WHERE email='" . $_SESSION['email'] . "'");
                  foreach ($sliporkey as $split) {
                    if (Is_numeric($split['slip_name'])) { ?>
                      <!-- The Key -->
                      <div class="card mt-3">
                        <div class="cardbody" style="padding:2% 5%;">
                          <h5 class="card-title">"KEY" for Attach file</h5>
                          <?php echo $split['slip_name']; ?>
                          <p>Go to Attach file >>> <a href="https://forms.gle/GGaWnWZJL7K8z1AY7"
                              class="btn btn-warning submisspagebutton" target="_blank">Click</a></p>
                        </div>
                      </div>
                    <?php } else { ?>
                      <!-- สำเนาบัตรนักเรียน / นักศึกษา -->
                      <?php if ($_SESSION['pay_id'] == 4) { ?>
                        <div class="card mt-3">
                          <div class="cardbody" style="padding:2% 5%;">
                            <h5 class="card-title">สำเนาบัตรนักเรียน</h5>
                            <?php $sql2 = $conn->query("SELECT * FROM tb_student WHERE email='" . $_SESSION['email'] . "'");
                            foreach ($sql2 as $row2) {
                              echo "<img src='/file/upload/studentcard/" . $row2['student_name'] . "' class='img-thumbnail'
                    style='box-shadow:rgba(0, 0, 0, 0.35) 0px 5px 15px;width: 15rem;margin: 0% 5%;'>";
                            } ?>
                          </div>
                        </div>
                      <?php } ?>
                      <!-- สลีปโอนเงิน -->
                      <div class="card mt-3">
                        <div class="cardbody" style="padding:2% 5%;">
                          <h5 class="card-title">หลักฐานการโอนเงิน</h5>
                          <?php $sql3 = $conn->query("SELECT * FROM tb_slip WHERE email='" . $_SESSION['email'] . "'");
                          foreach ($sql3 as $row3) {
                            echo "<img src='/file/upload/slip/" . $row3['slip_name'] . "' class='img-thumbnail'
                      style='box-shadow:rgba(0, 0, 0, 0.35) 0px 5px 15px;width: 20rem;margin: 2% 5%;'>";
                          } ?>
                        </div>
                      </div>
                    <?php }
                  }
                  ?>

                  <?php if ($row['approve'] == "disapprove") { ?>
                    <div class="card mt-3" style="background-color: rgb(255 122 1 / 20%);padding: 2%;">
                      <div class="card-body">
                        <form action="request.php?userid=<?php echo $row['user_id']; ?>" method="POST">
                          <div class="form-outline mb-2 mt-3">
                            <label class="form-label">
                              <h5>ยืนยันการส่งข้อมูล ให้เจ้าหน้าที่พิจารณาอีกครั้ง
                                <br>Please Input Password to Confirm :
                              </h5>
                            </label>
                            <input type="password" class="form-control" name="password" required />
                          </div>
                          <div class="text-end">
                            <button type="submit" class="btn btn-l mt-2 text-white" name="request">Request</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  <?php } ?>
                </div>

                <div class="col-sm-4">
                  <!-- ข้อมูลทั่วไป -->
                  <div class="card mtop-3 bgorange">
                    <div class="cardbody" style="padding:2% 5%;">

                      <h4>
                        <?php echo $row['title'] . $row['firstname'] . " " . $row['lastname'] . "<br>"; ?>
                      </h4>
                      <h6>
                        <?php
                        echo $row['career'] . " from " . $row['company'] . $row['country'] . "<br>fax : " . $row['fax'] . "<br>Tel. : " . $row['telephone'] . "<br>Name and address for payment receipt
                      (ชื่อและที่อยู่ในใบเสร็จสำหรับเบิก) : " . $row['receipt'];
                        ?>
                      </h6>
                    </div>
                  </div>
                  <!-- ข้อมูลอาหาร -->
                  <div class="card mt-3 bgorange">
                    <div class="cardbody" style="padding:2% 5%;">
                      <h4>
                        Food
                      </h4>
                      <h6>
                        <?php
                        echo $row['extrameal'] . "<br>Food allergy and intolerance : " . $row['food'] . "<br>";
                        ?>
                      </h6>
                    </div>
                  </div>
                  <!-- ข้อมูลติดต่อ -->
                  <div class="card mt-3 bgorange">
                    <div class="cardbody" style="padding:2% 5%;">
                      <h4>Contact Us</h4>
                      <h6>Email : <i class="bi bi-envelope"></i>xxx@gmail.com</h6>
                      <h6>Tel. : <i class="bi bi-telephone"></i>098-7654321</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- row ใหญ่ -->
        </div><!-- container -->

      <?php } ?>

      <?php
      include ($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
      include ($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
      ?>

    </body>

    </html>
  <?php }


} else if ($_SESSION['role'] && $_SESSION['role'] == "thaiphysic"){
  header("refresh: 1; url= backend/thaiphysic.php");
} else {
  header("refresh: 1; url= /../index.php");
} ?>