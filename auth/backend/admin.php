<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/connectdb.php');
if ($_SESSION['role'] == "admin") {
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
          <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="list-group"
              style="--bs-list-group-bg: rgb(255 122 1 / 20%);--bs-list-group-action-hover-bg: rgb(127 94 65 / 44%);">
              <a class="list-group-item list-group-item-action active" aria-current="true"
                style="background-color: #ff7a01;border-color: #813d00;">Profile</a>
              <a href="/index.php" class="list-group-item list-group-item-action">Home</a>
              <a href="/auth/changepass.php" class="list-group-item list-group-item-action">Change Password</a>
            </div>
          </div>
          <div class="col-sm-12 col-md-8 col-lg-9">
            <div class="row">
              <div class="card">
                <div class="cardbody" style="padding:2% 5%;">
                  <h2>
                    <?php
                    echo $_SESSION['title'] . $_SESSION['firstname'] . " " . $_SESSION['lastname'] . "<br>";
                    ?>
                  </h2>
                  <h4>รายชื่อผู้สมัคร ทั้งหมด</h4>
                  <div class="table-responsive">
                    <table class="table table-striped strip">
                      <thead>
                        <tr style="text-align: center;">
                          <th>No.</th>
                          <th>Name</th>
                          <th>Type</th>
                          <th>E-mail</th>
                          <th>Telephone</th>
                          <th>extrameal</th>
                          <th>Intolerance</th>
                          <th>Amount</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        $sql2 = $conn->query("SELECT * FROM tb_user WHERE role = 'user' ORDER BY approve");
                        foreach ($sql2 as $tr) {
                                                    ?>
                          <tr>
                            <td>
                              <?php echo $no; $no++; ?>
                            </td>
                            <td>
                              <?php echo $tr['title'] . $tr['firstname'] . " " . $tr['lastname'] ?>
                            </td>
                            <td>
                              <?php echo $tr['type'] ?>
                            </td>
                            <td>
                              <?php echo $tr['email'] ?>
                            </td>
                            <td>
                              <?php echo $tr['telephone'] ?>
                            </td>
                            <td>
                              <?php echo $tr['extrameal'] ?>
                            </td>
                            <td>
                              <?php echo $tr['food'] ?>
                            </td>
                            <td>
                              <?php echo $tr['total_price'] . "THB" ?>
                            </td>
                            <td>
                              <?php echo $tr['approve'] ?>
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
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
<?php } else {
  header("refresh: 1; url= /../index.php");
} ?>