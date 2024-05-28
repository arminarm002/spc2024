<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/connectdb.php');
if ($_SESSION['role']) {
  if ($_SESSION['role'] == "thaiphysic") {
    
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>SPC2024 KMITL</title>
      <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
      <link rel="stylesheet" href="/theme/css/self.css">
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    </head>

    <body class="font-mitr">
      <?php
      include ($_SERVER['DOCUMENT_ROOT'] . '/components/navbar2.php');

      $sql = $conn->query("SELECT * FROM tb_user WHERE approve = 'wait' AND role = 'user' ");
      $i = 0;
      foreach ($sql as $row) {
        $i++;
      } ?>

      <div class="container-fluid">
        <div class="row mt-3">
          <div class="col-sm-12 col-md-4 col-lg-3">
            <?php include ($_SERVER['DOCUMENT_ROOT'] . '/components/sidebar.php'); ?>
          </div>
          <div class="col-sm-12 col-md-8 col-lg-9">
            
            <?php if ($i != 0) { ?>
              <div class="alert alert-secondary" role="alert">
                มีข้อมูลที่ยังไม่ได้ตรวจสอบ จำนวน
                <?php echo $i; ?> ข้อมูล
              </div>
            <?php } else { ?>
              <div class="alert alert-success" role="alert">
                ตรวจสอบข้อมูลทั้งหมดแล้ว
              </div>
            <?php } ?>
            <div class="card">
              <div class="cardbody" style="padding:2% 5%;">
                <h2>
                  <?php
                  echo $_SESSION['title'] . $_SESSION['firstname'] . " " . $_SESSION['lastname'] . "<br>";
                  ?>
                </h2>
                <a href="export.php" class="btn btn-primary"> ดาวน์โหลดข้อมูลผู้ลงทะเบียนทั้งหมด </a>
                <h2>รายชื่อผู้สมัคร รอการอนุมัติ</h2>
                <input type="text" class="form-control mt-3" name="search" id="search" placeholder="ค้นหารายชื่อโดยใช้ KEY">
                <div class="table-responsive" id="display">
                  <table class="table table-striped strip">
                    <thead>
                      <tr style="text-align: center;">
                        <th>Name</th>
                        <th>Type</th>
                        <th>E-mail</th>
                        <th>Telephone</th>
                        <th>Abstract Number</th>
                        <th>Evidence</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $sql2 = $conn->query("SELECT * FROM tb_user WHERE approve = 'wait' AND role = 'user' ");
                      foreach ($sql2 as $tr) {
                        ?>
                        <tr>
                          <td>
                            <?php echo $tr['title'] . $tr['firstname'] . " " . $tr['lastname'] ?>
                          </td>
                          <td>
                            <?php echo $tr['type'] ?>
                          </td>
                          <td>
                            <?php echo $tr['email'] ?>
                          </td>
                          <td style="text-align: center;">
                            <?php echo $tr['telephone'] ?>
                          </td>
                          <td style="text-align: center;">
                            <?php echo $tr['abstract_number'] ?>
                          </td>
                          <td>
                            <a class="btn btn-l text-white" href="detail.php?userid=<?php echo $tr['user_id']; ?>">Detail</a>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div><!-- row ใหญ่ -->
      </div><!-- container -->

      <script>
			$(document).ready(function () {
				$("#search").keyup(function () {
					var text = $('#search').val();
					$.ajax({
						type: "POST",
						url: "search.php",
						data: { search: text },
						success: function (response) {
							$("#display").html(response);
						},
						error: function () {
							$("#display").html("something wrong with ajax...!!");
						}
					});
				});
			});	
		</script>
    
      <?php
      include ($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
      include ($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
      ?>

    </body>

    </html>
  <?php } else if ($_SESSION['role'] == "user") {
    header("refresh: 1; url= /auth/profile.php");
  } else if ($_SESSION['role'] == "admin") {
    header("refresh: 1; url= /auth/backend/admin.php");
  }
} else {
  header("refresh: 1; url= /../index.php");
} ?>