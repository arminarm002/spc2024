<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/connectdb.php');
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
  <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/theme/css/self.css">
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
  include($_SERVER['DOCUMENT_ROOT'] . '/components/navbar2.php');
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
          <td><b id="blinkingText" class="blinkin" style="color:red;">New</b> 26 August 2024</td>
          <td>
            <a target="_blank" class="anews"
              href="https://drive.google.com/file/d/1-KrgQ_UquyYUOKJ7DCnr5sobz_kyOEko/view?usp=drive_link">SPC2024 Proceeding</a>
          </td>
        </tr>
        <tr>
          <td><b id="blinkingText2" class="blinkin" style="color:red;">New</b> 19 June 2024</td>
          <td>
            <a target="_blank" class="anews"
              href="https://drive.google.com/drive/folders/1bUzR9dybL51K-vfrDNCty2_KiD_bo3qj?usp=sharing">Event photo
              gallery : SPC2024</a>
          </td>
        </tr>
        <tr>
          <td><b id="blinkingText3" class="blinkin" style="color:red;">New</b> 17 June 2024</td>
          <td>
            <a target="_blank" class="anews"
              href="https://drive.google.com/file/d/1HwvD_t00bTZ8FD2pWxb0W-ojPPDGRzNC/view">Oral and Poster presentation
              awar</a>
          </td>
        </tr>
        <tr>
          <td>30 May 2024</td>
          <td>
            <a class="anews" href="/img/news/parking.jpg" target="_blank">แผนผังที่จอดรถบริเวณโรงแรมและสถานที่ใกล้เคียง
            </a>
          </td>
        </tr>
        <tr>
          <td>30 May 2024</td>
          <td>
            <p>The full-paper submission for SPC e-proceedings is extended to June 15th, 2024!!!</p>
            <a href="/file/download/spc2024-proceedings.docx" target="_blank"> Download Template</a> &nbsp;
            <a href="/file/download/E-Proceedings Submission Guide.pdf" target="_blank">E-Proceedings Submission Guid
            </a>
          </td>
        </tr>
        <tr>
          <td>28 May 2024</td>
          <td>
            <a class="anews" href="/file/download/presentationlist.pdf" target="_blank">SPC2024 Oral and Poster
              presentation list
            </a>
          </td>
        </tr>
        <tr>
          <td>1 May 2024</td>
          <td>
            <a class="anews" href="https://forms.gle/Sh1Arn4sVrKbN3Wm9" target="_blank">Attention all prospective
              attendees of Siam Physics Congress 2024! We have some great news for you: the early-bird registration
              deadline for the conference has been extended to May 13, 2024. That means you still have time to take
              advantage of the reduced registration fees.
            </a>
          </td>
        </tr>
        <tr>
          <td>1 May 2024</td>
          <td>
            <a class="anews" href="/pages/tour.php" target="_blank">The SPC2024
              Organizing Committee has arranged sightseeing tours for the conference delegates offering an opportunity
              to experience the central part of Ayuthaya.<br>A special two groups of tours have been arranged for
              Wednesday, 5th June from 2.30-4.00 pm. Detailed itineraries for each excursion are available below. Note
              that the spaces are limited and therefore, seats are allocated on a first come, first served basis.
            </a>
          </td>
        </tr>
        <tr>
          <td>30 April 2024</td>
          <td>
            <a class="anews" href="/file/download/registration_payment.pdf"
              target="_blank">ประกาศผลโครงงานอิสระที่ผ่านรอบคัดเลือก รอบแรก
            </a>
          </td>
        </tr>
        <tr>
          <td>30 April 2024</td>
          <td>
            <a class="anews" href="/file/download/registration_payment.pdf" target="_blank">Registration and
              Payment Guide for Participating in SPC2024 and Using the Website System
            </a>
          </td>
        </tr>
        <tr>
          <td>17 April 2024</td>
          <td>
            <a class="anews" href="/pages/project.php" target="_blank">The notice for qualified applicants of
              the 16th project contest has been postponed to 30 April 2024. We are sorry for any inconvenience it may
              cause <u>Please stay tuned.</u>
            </a>
          </td>
        </tr>
        <tr>
          <td>1 April 2024</td>
          <td>
            <a class="anews" href="/img/news/posterspc.jpg" target="_blank">We are pleased to announce that the
              topic of "<u>Plasma, Radiation, Nuclear Physics, and Technology</u>" has been added to the SPC2024
              Symposium. Abstract submissions are open until April 20, 2024.
            </a>
          </td>
        </tr>
        <tr>
          <td>31 March 2024</td>
          <td>
            <a class="anews" href="/img/news/posterspc.jpg" target="_blank">Abstract submission deadline
              extended to 20 April 2024
            </a>
          </td>
        </tr>
        <tr>
          <td>20 March 2024</td>
          <td>
            <a href="/file/download/manual book.pdf" class="anews" target="_blank">Registration Guide for
              Participating in SPC2024 and Using the Website System
            </a>
          </td>
        </tr>
        <tr>
          <td>15 February 2024</td>
          <td>
            <a href="/img/news/8340192.jpg" class="anews" target="_blank">ขอเชิญเข้าร่วมประชุมวิชาการฟิสิกส์ระดับชาติ
              ครั้งที่ 19 ประจำปี 2567
              จัดขึ้นระหว่างวันที่ 5-7 มิถุนายน 2567 ณ โรงแรมกรุงศรีริเวอร์ จังหวัดพระนครศรีอยุธยา
            </a>
          </td>
        </tr>
        <tr>
          <td>12 February 2024</td>
          <td>
            <a href="/pages/talk.php" class="anews" target="_blank">The updated list of plenary talks includes
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
  include($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/script/blink.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
  ?>

</body>

</html>