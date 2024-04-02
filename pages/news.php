<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SPC2024 KMITL</title>
  <meta name="author" content="Suradech Kuruphan">
  <meta name="description"
    content="19 th of Siam Physics Congress 2024 (SPC2024), Krungsri River Hotel, Phra Nakorn Sri Ayutthaya, Thailand, JUNE 5-7, 2024.">
  <meta name="keywords"
    content="spc2024, SPC2024,19 th of Siam Physics Congress, ครั้งที่ 19, ประกวดโครงงานอิสระ, สมาคมฟิสิกส์">
  <link rel="stylesheet" href="/spc2024/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/spc2024/theme/css/self.css">
  <style>
    /* สีข้อความที่กระพริบ */
    .blinking {
      animation: blink-animation 1s infinite;
    }

    /* แอนิเมชันของการกระพริบ */
    @keyframes blink-animation {
      0% {
        opacity: 1.0;
      }

      50% {
        opacity: 0.0;
      }

      100% {
        opacity: 1.0;
      }
    }
  </style>
</head>

<body class="font-mitr">
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/navbar2.php');
  ?>

  <div class="container">
    <h1 class="card-title centerer mt-3">All Announcement & News</h1>
    <table class="table table-striped strip" style="border: thick double #ff7a01;">
      <thead>
        <tr>
          <th class="fs-28">Announcement</th>
          <th> </th>
        </tr>
      </thead>
      <tbody>
      <tr>
          <td><b id="blinkingText3" class="blinkin" style="color:red;">New</b> 1 April 2024</td>
          <td>
            <a class="anews" href="/spc2024/img/news/posterspc.jpg" target="_blank">We are pleased to announce that the topic of "<u>Plasma, Radiation, Nuclear Physics, and Technology</u>" has been added to the SPC2024 Symposium. Abstract submissions are open until April 20, 2024.
            </a>
          </td>
        </tr>
        <tr>
          <td><b id="blinkingText" class="blinkin" style="color:red;">New</b> 31 March 2024</td>
          <td>
            <a class="anews" href="/spc2024/img/news/posterspc.jpg" target="_blank">Abstract submission deadline
              extended to 20 April 2024
            </a>
          </td>
        </tr>
        <tr>
          <td><b id="blinkingText2" class="blinkin blinkingText" style="color:red;">New</b> 20 March 2024</td>
          <td>
            <a href="/spc2024/file/download/manual book.pdf" class="anews" target="_blank">Registration Guide for
              Participating in SPC2024 and Using the Website System
            </a>
          </td>
        </tr>
        <tr>
          <td>15 February 2024</td>
          <td>
            <a href="/spc2024/img/news/8340192.jpg" class="anews"
              target="_blank">ขอเชิญเข้าร่วมประชุมวิชาการฟิสิกส์ระดับชาติ
              ครั้งที่ 19 ประจำปี 2567
              จัดขึ้นระหว่างวันที่ 5-7 มิถุนายน 2567 ณ โรงแรมกรุงศรีริเวอร์ จังหวัดพระนครศรีอยุธยา
            </a>
          </td>
        </tr>
        <tr>
          <td>12 February 2024</td>
          <td>
            <a href="/spc2024/pages/talk.php" class="anews" target="_blank">The updated list of plenary talks includes
              presentations by Prof. Yifang Wang And Prof. Albrecht Karle
            </a>
          </td>
        </tr>
        <tr>
          <td>3 October 2023</td>
          <td>
            <a href="https://news.cgtn.com/news/2023-10-03/3-scientists-awarded-2023-Nobel-Prize-in-Physics-1nBg0xV00aA/index.html"
              class="anews" target="_blank">3 scientists awarded 2023 Nobel Prize
            </a>
          </td>
        </tr>
        <tr>
          <td>17 June 2023</td>
          <td>
            <a href="https://www.facebook.com/profile/100063613568041/search/?q=%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%A1%E0%B8%AD%E0%B8%9A%E0%B8%98%E0%B8%87"
              class="anews" target="_blank">ภาควิชาฟิสิกส์
              คณะวิทยาศาสตร์และวิทยาลัยเทคโนโลยีและนวัตกรรมวัสดุ รับมอบธงร่วมเป็นเจ้าภาพจัดงานประชุมวิชาการ Siam
              Physics Congress ครั้งที่ 19
            </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/blink.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
  ?>

</body>

</html>