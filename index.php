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
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/spc2024/img/home02.jpg" class="img-fluid" style="width:100%">
      </div>
      <div class="carousel-item">
        <img src="/spc2024/img/queen.jpg" class="img-fluid" style="width:100%">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/navbar2.php');
  ?>

  <div class="container">
    <h4 class="card-text fss-14 mt-3" style="text-align:justify;">The organizers and hosts of the 19th Siam Physics
      Congress 2024 (SPC2024) are duly honored to receive gracious support from Her Royal Highness (H.R.H.) Princess
      Maha Chakri Sirindhorn, who will preside over the opening ceremony on June 6, 2024.</h6>
      <section class="countdown-container centerer mt-3 mb-3">

        <div class="countdown">
          <span class="days" id="days"></span>
          <div class="days-label">days</div>
        </div>

        <div class="countdown">
          <span class="hours" id="hours"></span>
          <div class="hours-label">hours</div>
        </div>

        <div class="countdown">
          <span class="minutes" id="minutes"></span>
          <div class="minutes-label">minutes</div>
        </div>

        <div class="countdown">
          <span class="seconds" id="seconds"></span>
          <div class="seconds-label">seconds</div>
        </div>

      </section>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-6 mt-3">
          <a href="/spc2024/img/news/posterspc.jpg" target="_blank">
            <img src="/spc2024/img/news/posterspc.jpg" class="d-block w-100"
              style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-6 mt-3">
          <a href="/spc2024/img/news/project1.jpg" target="_blank">
            <img src="/spc2024/img/news/project1.jpg" class="d-block w-100"
              style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-6 mt-3">
          <a href="/spc2024/img/news/project2.jpg" target="_blank">
            <img src="/spc2024/img/news/project2.jpg" class="d-block w-100"
              style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
          </a>
        </div>

        <div class="cards mb-3 mt-5" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;padding-bottom: 15px;">
          <h1 class="card-title centerer" style="color: #7b7b7b;padding-top: 15px;">Announcement</h1>
          <div class="row" style="margin: 15px auto;">
            <div class="col-sm-6 col-md-6 col-lg-4 col-12 centerer mt-3">
              <div class="card border border-warning rounded" style="width: 28rem;"><!-- 18rem -->
                <img class="border-bottom border-warning" src="/spc2024/img/news/834019.jpg" style="width:100%; ">
                <div class="card-body">
                  <h5 class="card-title"><b id="blinkingText3" class="blinkin" style="color:red;">New</b> 13 May 2024
                  </h5>
                  <p class="card-text" style="text-align:justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ขอเชิญเข้าร่วมประชุมวิชาการฟิสิกส์ระดับชาติ
              ครั้งที่ 19 ประจำปี 2567
              จัดขึ้นระหว่างวันที่ 5-7 มิถุนายน 2567 ณ โรงแรมกรุงศรีริเวอร์ จังหวัดพระนครศรีอยุธยา</p>
                  <a href="/spc2024/img/news/8340192.jpg" class="btn btn-warning"
                    style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <h6 class="card-title">-- More --</h6>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-12 centerer mt-3">
              <div class="card border border-warning rounded" style="width: 28rem;"><!-- 18rem -->
                <img class="border-bottom border-warning" src="/spc2024/img/news/13may.jpg" style="width:100%; ">
                <div class="card-body">
                  <h5 class="card-title"><b id="blinkingText" class="blinkin" style="color:red;">New</b> 10 May 2024
                  </h5>
                  <p class="card-text" style="text-align:justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Attention all
                    prospective attendees of Siam Physics Congress 2024! We have some great news for you: the early-bird
                    registration deadline for the conference has been extended to May 13, 2024. That means you still
                    have time to take advantage of the reduced registration fees.
                  </p>
                  <a href="/spc2024/auth/register.php" class="btn btn-warning"
                    style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <h6 class="card-title">-- More --</h6>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-12 centerer mt-3">
              <div class="card border border-warning rounded" style="width: 28rem;"><!-- 18rem -->
                <img class="border-bottom border-warning" src="/spc2024/img/news/tour.jpg" style="width:100%; ">
                <div class="card-body">
                  <h5 class="card-title"><b id="blinkingText2" class="blinkin" style="color:red;">New</b> 1 May 2024
                  </h5>
                  <p class="card-text" style="text-align:justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The SPC2024 Organizing
                    Committee has arranged sightseeing tours for the conference delegates offering an opportunity to
                    experience the central part of Ayuthaya.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Two special trips have
                    been arranged for Wednesday, 5th June from 2.30-4.00 pm. Detailed itineraries for each excursion are
                    available below. Note that the spaces are limited and therefore, seats are allocated on a first
                    come, first served basis.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register >>> <a
                      href="https://shorturl.at/jCFWX" class="btn btn-warning"
                      style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" target="_blank">Click </a>
                  </p>
                  <a href="/spc2024/pages/tour.php" class="btn btn-warning"
                    style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <h6 class="card-title">-- More --</h6>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-12 centerer mt-3">
              <div class="card border border-warning rounded" style="width: 28rem;"><!-- 18rem -->
                <img class="border-bottom border-warning" src="/spc2024/img/news/goal.jpg" style="width:100%; ">
                <div class="card-body">
                  <h5 class="card-title">30 April 2024
                  </h5>
                  <p class="card-text" style="text-align:justify;">ประกาศผลโครงงานอิสระที่ผ่านรอบคัดเลือก รอบแรก
                  </p>
                  <a href="/spc2024/pages/project.php" class="btn btn-warning"
                    style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <h6 class="card-title">-- More --</h6>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-12 centerer mt-3">
              <div class="card border border-warning rounded" style="width: 28rem;">
                <img class="border-bottom border-warning" src="/spc2024/img/news/rate.jpg" style="width:100%; ">
                <div class="card-body">
                  <h5 class="card-title">30 April 2024
                  </h5>
                  <p class="card-text" style="text-align:justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registration and
                    Payment Guide for Participating in SPC2024 and Using the Website System</p>
                  <a href="/spc2024/file/download/registration_payment.pdf" class="btn btn-warning" target="_blank"
                    style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <h6 class="card-title">-- More --</h6>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-12 centerer mt-3">
              <div class="card border border-warning rounded" style="width: 28rem;"><!-- 18rem -->
                <img class="border-bottom border-warning" src="/spc2024/img/news/16extended.jpg" style="width:100%; ">
                <div class="card-body">
                  <h5 class="card-title">17 April 2024
                  </h5>
                  <p class="card-text" style="text-align:justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The notice for
                    qualified applicants of the 16th
                    project contest has been postponed to 30 April 2024. We are sorry for any inconvenience it may cause
                    <br><br><u>Please stay tuned.</u>
                  </p>
                  <a href="/spc2024/pages/project.php" class="btn btn-warning"
                    style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <h6 class="card-title">-- More --</h6>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <a href="/spc2024/pages/news.php" class="btn btn-warning"
            style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;float:right">
            <h4 class="card-title">-- All Announcement --</h4>
          </a>
        </div>
      </div>
  </div>


  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/blink.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/countdown.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
  ?>

</body>

</html>