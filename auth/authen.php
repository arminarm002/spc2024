<?php
//Register
include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/connectdb.php');

if (isset($_POST['add'])) {
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $title = $_POST['title'];
  $fname = $_POST['name'];
  $lname = $_POST['lastname'];
  $company = htmlspecialchars($_POST['company'], ENT_QUOTES);
  $career = $_POST['career'];
  $address = $_POST['address'];
  $country = $_POST['country'];
  $tel = $_POST['tel'];
  $fax = $_POST['fax'];
  $extrameal = $_POST['meal'];
  $food = $_POST['food'];
  $type = $_POST['type'];
  $receipt = $_POST['receipt'];
  $fee = $_POST['fee'];
  $password = password_hash($pass, PASSWORD_DEFAULT);

  $sql = $conn->query("SELECT * FROM tb_user WHERE email='" . $email . "' ");

  if ($sql->num_rows > 0) {
    echo '
    <script language="javascript"> 
    alert("This email is already done, Can not register again.")
    </script>
    ';
    header("refresh: 1; url=register.php");
  } else {
    $sql = ("INSERT Into tb_user (
        email, password, title, firstname, lastname, company, career, address, country, 
        telephone, fax, extrameal, food, type, receipt, fee) values (
          '$email', '$password', '$title', '$fname', '$lname', '$company', '$career', '$address', '$country', 
          '$tel', '$fax', '$extrameal', '$food', '$type', '$receipt', '$fee')");
    $query = $conn->query($sql);
    if ($query) {
      echo '<script language="javascript">';
      echo 'alert("Successfully registrater, Please wait for confirm by email")';
      echo '</script>';
      header("refresh: 1; url=login.php");

    } else {
      echo '<script language="javascript">';
      echo 'alert("Somthing Wrong!!!")';
      echo '</script>';
      header("refresh: 1; url=registerpage.php");
    }
  }
}

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

        header("refresh: 1; url=/spc2024/index.php");
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
?>