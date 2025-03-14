<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/connectdb.php');
if (isset($_SESSION['role'])) {
  header("refresh: 1; url= /auth/profile.php");
} else { ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/theme/css/self.css">

  </head>

  <body class="font-mitr">
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/components/navbar2.php');
    ?>
    <div class="container">
      <div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
        <div class="card mb-3"
          style="width: 500px;background-color: rgb(255 122 1 / 20%);box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
          <div class="card-header bg-l text-white text-center">
            <h4>Login เข้าสู่ระบบ</h4>
          </div>
          <div class="card-body">
            <div class="mt-2">
              <img src="/img/logo-b.png" alt="" style="display:table; margin: 0 auto; max-width:200px;">
            </div>
            <form action="authen.php" class="mb-3" method="POST">
              <div class="form-group mt-5">
                <label for="email">Email :</label>
                <input type="email" name="email" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" name="password" class="form-control" required>
              </div>
              <div class="text-end">
                <button type="submit" class="btn btn-l mt-2 text-white" name="login">Log in</button>
              </div>
            </form>
            <a href="register.php"><button class="btn btn-l text-white"
                style="float: right;">Register</button></a>
          </div>
          <a href="forgetpassword.php"><button class="btn btn-l text-white mb-3"
                style="float: right;margin-right: 4%;">Forget Password</button></a>
          </div>
        </div>
      </div>
    </div>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
    ?>
  </body>

  </html>
<?php } ?>