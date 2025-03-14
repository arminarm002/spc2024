<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/connectdb.php');
session_start();

//Register
if (isset($_POST['add'])) {
  if (isset($_POST['ab-number'])) {
    $abnumber = $_POST['ab-number'];
  } else {
    $abnumber = "0";
  }
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $title = $_POST['title'];
  $fname = $_POST['name'];
  $lname = $_POST['lastname'];
  $company = htmlspecialchars($_POST['company'], ENT_QUOTES);
  $career = htmlspecialchars($_POST['career'], ENT_QUOTES);
  $address = htmlspecialchars($_POST['address'], ENT_QUOTES);
  $country = $_POST['country'];
  $tel = $_POST['tel'];
  $fax = $_POST['fax'];
  $extrameal = $_POST['meal'];
  $food = $_POST['food'];
  $typeu = $_POST['type'];
  $receipt = htmlspecialchars($_POST['receipt'], ENT_QUOTES);
  $fee = $_POST['fee'];
  $amount = $_POST['amount'];
  $role = "user";
  $password = password_hash($pass, PASSWORD_DEFAULT);

  $date_end = $conn->query("SELECT * FROM tb_setdate");
  foreach ($date_end as $rowdate) {
    $datepro = $rowdate['date_end'];
  }
  $datenows = date("Y-m-d");
  if ($datenows < $datepro) {


    if ($fee == "1") {
      $amount = 1;
    } else if ($fee == "2") {
      $amount = 1;
    } else if ($fee == "5") {
      $amount = 1;
    }
    if ($fee == "1") {
      $total = $amount * 4000;

    } else if ($fee == "2") {
      $total = $amount * 5000;

    } else if ($fee == "3") {
      $total = $amount * 4000;

    } else if ($fee == "4") {
      $total = $amount * 3000;

    } else if ($fee == "5") {
      $total = $amount * 3000;
    }

  } else {

    if ($fee == "1") {
      $amount = 1;
    } else if ($fee == "2") {
      $amount = 1;
    } else if ($fee == "5") {
      $amount = 1;
    }
    if ($fee == "1") {
      $total = $amount * 5000;

    } else if ($fee == "2") {
      $total = $amount * 6000;

    } else if ($fee == "3") {
      $total = $amount * 5000;

    } else if ($fee == "4") {
      $total = $amount * 4000;

    } else if ($fee == "5") {
      $total = $amount * 4000;
    }
  }
  $sql = $conn->query("SELECT * FROM tb_user WHERE email='" . $email . "' ");

  if ($sql->num_rows > 0) {
    echo '<script language="javascript">';
    echo 'alert("This email is already done, Can not register again.")';
    echo '</script>';
    header("refresh: 1; url=register.php");
  } else {
    $sqlregis = "INSERT INTO tb_user
    (email, password, title, firstname, lastname, company, career, address, country, telephone, fax, extrameal, food, type, receipt, pay_id, amount, total_price, role, approve, abstract_number	) VALUES 
    ('$email', '$password', '$title', '$fname', '$lname', '$company', '$career', '$address', '$country', '$tel', '$fax', '$extrameal', '$food', '$typeu', '$receipt', '$fee', '$amount', '$total', '$role', 'wait', '$abnumber')";

    $sql2 = $conn->query($sqlregis);

    if ($sql2) {
      //ฟังก์ชั่นวันที่
      date_default_timezone_set('Asia/Bangkok');
      $date = date("Ymd");
      $numrand = sprintf("%06d", rand(0, 999999));
      $key = $conn->query("INSERT INTO tb_slip (slip_date, slip_name, email) VALUES ('$date', '$numrand', '$email') ");
      if ($key) {
        echo '<script language="javascript">';
        echo 'alert("Successfully registrater, Please Log in to get KEY for Attach file")';
        echo '</script>';
        header("refresh: 1; url=login.php");
      } else {
        echo '<script language="javascript">';
        echo 'alert("Somthing Wrong!")';
        echo '</script>';
        header("refresh: 1; url=register.php");
      }
    }
  }
}

// Log in
if (isset($_POST['login'])) {
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
        header("refresh: 1; url=login.php");
        echo '<script language="javascript">';
        echo 'alert("Password Invalid")';
        echo '</script>';        
      }
    }
  } else {
    header("refresh: 1; url=login.php");
    echo '<script language="javascript">';
    echo 'alert("Username Invalid")';
    echo '</script>';    
  }
}

//Update Personal Data
if (isset($_POST['updatedetail'])) {
  $fname = $_POST['name'];
  $lname = $_POST['lastname'];
  $address = htmlspecialchars($_POST['address'], ENT_QUOTES);
  $receipt = htmlspecialchars($_POST['receipt'], ENT_QUOTES);

  $sqlupdate = "UPDATE tb_user SET firstname='$fname', lastname='$lname', address='$address', receipt='$receipt'  WHERE email='" . $_SESSION['email'] . "' ";

  $updatedata = $conn->query($sqlupdate);

  if ($updatedata) {
    header("refresh: 1; url=profile.php");
    echo '<script language="javascript">';
    echo 'alert("Successfully Update")';
    echo '</script>';
      } else {
        header("refresh: 1; url=updatedetail.php");
        echo '<script language="javascript">';
    echo 'alert("Somthing Wrong!")';
    echo '</script>';    
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