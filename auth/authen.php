<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/connectdb.php');

// Log in
if (isset($_POST['login'])) {
  session_start();
  $email = $_POST['email'];
  $pass = $_POST['password'];

  $result = $conn->query("SELECT * FROM tb_user WHERE email='" . $email . "'");

  if ($result->num_rows > 0) {
    foreach ($result as $row) {
      $newpass = $row['password'];
      $password = password_verify($pass, $newpass);
      if ($password) {
        $_SESSION['id'] = $row['user_id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['title'] = $row['title'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['company'] = $row['company'];
        $_SESSION['career'] = $row['career'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['country'] = $row['country'];
        $_SESSION['phone'] = $row['telephone'];
        $_SESSION['fax'] = $row['fax'];
        $_SESSION['extrameal'] = $row['extrameal'];
        $_SESSION['type'] = $row['type'];
        $_SESSION['pay_id'] = $row['pay_id'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['abstract_number'] = $row['abstract_number'];

        if ($_SESSION['role'] == "user") {
          if ($_SESSION['type'] == "Oral Presenter" || $_SESSION['type'] == "Poster Presenter") {
            if ($_SESSION['abstract_number'] == 0) {
              header("refresh: 1; url=/auth/fillabnum.php");
            } else {
              header("refresh: 1; url=/auth/profile.php");
            }
          } else {
            header("refresh: 1; url=/auth/profile.php");
          }
        } else if ($_SESSION['role'] == "admin") {
          header("refresh: 1; url=/auth/backend/admin.php");
        } else if ($_SESSION['role'] == "thaiphysic") {
          header("refresh: 1; url=/auth/backend/thaiphysic.php");
        }
      } else {
        echo '<script language="javascript">';
        echo 'alert("Password Invalid")';
        echo '</script>';
        header("refresh: 1; url=login.php");
      }
    }
  } else {
    echo '<script language="javascript">';
    echo 'alert("Username Invalid")';
    echo '</script>';
    header("refresh: 1; url=login.php");
  }
}

// Add Abstract Number
if (isset($_POST['abstractnumber'])) {
  session_start();
  $abnumber = $_POST['abnumber'];

  $result = $conn->query("SELECT * FROM tb_user WHERE abstract_number='" . $abnumber . "'");

  if ($result->num_rows > 0) {
    echo '<script language="javascript">';
    echo 'alert("This Abstract Number is Already in The System, Please Contact The Staff.")';
    echo '</script>';
    header("refresh: 1; url=fillabnum.php");
  } else {

    $updateabnum = $conn->query("UPDATE tb_user SET abstract_number='$abnumber' WHERE email='" . $_SESSION['email'] . "' ");

    if ($updateabnum) {
      $_SESSION['abstract_number'] = $abnumber;
      echo '<script language="javascript">';
      echo 'alert("Successfully")';
      echo '</script>';
      header("refresh: 1; url=/auth/profile.php");

    } else {
      echo '<script language="javascript">';
      echo 'alert("Somthing Wrong!")';
      echo '</script>';
      header("refresh: 1; url=/auth/fillabnum.php");
    }
  }
}
?>