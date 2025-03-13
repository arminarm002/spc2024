<?php
//สร้างตัวแปรเพื่อใช้เชื่อม db
$servername = "localhost";
$username = "db_spc2024";
$password = "#Science@suradech";
$dbname = "db_spc2024";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    // die("Connection failed: " . $conn->connect_error);
}
date_default_timezone_set('Asia/Bangkok');
// $mysqli -> set_charset("utf8");
?>