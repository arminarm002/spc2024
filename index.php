<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/connectdb.php');
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
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/home02.jpg" class="img-fluid" style="width:100%">
      </div>
      <div class="carousel-item">
        <img src="/img/queen.jpg" class="img-fluid" style="width:100%">
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
  include ($_SERVER['DOCUMENT_ROOT'] . '/components/navbar2.php');
  ?>

  <div class="container">
    <h4 class="card-text fss-14 mt-3" style="text-align:justify;">The organizers and hosts of the 19th Siam Physics
      Congress 2024 (SPC2024) are duly honored to receive gracious support from Her Royal Highness (H.R.H.) Princess
      Maha Chakri Sirindhorn, who will preside over the opening ceremony on June 6, 2024.</h6>
      <!-- <section class="countdown-container centerer mt-3 mb-3">

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

      </section> -->
      <div class="videohome">
        <video class="border border-warning rounded" width="100%" height="auto" muted controls loop autoplay
          src="/video/spc2024 open.mp4"></video>
      </div>

      <div class="pt-3 pb-3" style="text-align:center; background-color:#f6dbbb;">
        <div class="row" style="padding: 10px 0px;">
          <div class="col-6">
            <h4>SPC2024 Abstract Book >>> <a
                href="https://drive.google.com/file/d/16L39u1EOuNbV4jMmJwv1XjIlmPEUb_pj/view?usp=sharing"
                class="btn btn-warning" target="_blank" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">--
                Download
                --</a>
            </h4>
          </div>
          <div class="col-6">
            <h4>SPC2024 Program Book >>> <a
                href="https://drive.google.com/file/d/1oleTz4e_hcfVEXf8gYTTEG-TLlHzynLR/view?usp=sharing"
                class="btn btn-warning" target="_blank" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">--
                Download
                --</a>
            </h4>
          </div>
        </div>
        <h4>PASSWORD : <span class="red">SPC2024</span></h4>
        <hr style="width: 90%;margin:10px auto;">
        <h4>
          ประกาศผู้ชนะรางวัลประกวดโครงงานครั้งที่16SPC2024 >>> <a
            href="https://drive.google.com/file/d/1rHklD76ili1MBwfc6qBOA9nBZCnyCKSi/view?usp=sharing"
            class="btn btn-warning" target="_blank" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">--
            Download
            --</a>
        </h4>
        <h4>
        Oral and Poster presentation award >>> <a
            href="https://drive.google.com/file/d/1HwvD_t00bTZ8FD2pWxb0W-ojPPDGRzNC/view"
            class="btn btn-warning" target="_blank" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">--
            Download
            --</a>
        </h4>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-4 col-6 mt-3">
          <a href="/img/news/posterspc.jpg" target="_blank">
            <img src="/img/news/posterspc.jpg" class="d-block w-100"
              style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-6 mt-3">
          <a href="/img/news/project1.jpg" target="_blank">
            <img src="/img/news/project1.jpg" class="d-block w-100"
              style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-6 mt-3">
          <a href="/img/news/project2.jpg" target="_blank">
            <img src="/img/news/project2.jpg" class="d-block w-100"
              style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
          </a>
        </div>

        <div class="cards mb-3 mt-5" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;padding-bottom: 15px;">
          <h1 class="card-title centerer" style="color: #7b7b7b;padding-top: 15px;">Announcement</h1>
          <div class="row" style="margin: 15px auto;">
          <div class="col-sm-6 col-md-6 col-lg-4 col-12 centerer mt-3">
              <div class="card border border-warning rounded" style="width: 28rem;"><!-- 18rem -->
                <img class="border-bottom border-warning" src="/img/news/award2.jpg" style="width:100%; ">
                <div class="card-body">
                  <h5 class="card-title"><b id="blinkingText2" class="blinkin" style="color:red;">New</b> 17 June 2024
                  </h5>
                  <p class="card-text" style="text-align:justify;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oral and Poster presentation award</p>
                  <a href="https://drive.google.com/file/d/1HwvD_t00bTZ8FD2pWxb0W-ojPPDGRzNC/view" class="btn btn-warning" target="_blank"
                    style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <h6 class="card-title">-- Download --</h6>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-12 centerer mt-3">
              <div class="card border border-warning rounded" style="width: 28rem;"><!-- 18rem -->
                <img class="border-bottom border-warning" src="/img/news/parking.jpg" style="width:100%; ">
                <div class="card-body">
                  <h5 class="card-title"><b id="blinkingText3" class="blinkin" style="color:red;">New</b> 30 May 2024
                  </h5>
                  <p class="card-text" style="text-align:justify;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แผนผังที่จอดรถบริเวณโรงแรมและสถานที่ใกล้เคียง</p>
                  <a href="/img/news/parking.jpg" class="btn btn-warning" target="_blank"
                    style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <h6 class="card-title">-- Download --</h6>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-12 centerer mt-3">
              <div class="card border border-warning rounded" style="width: 28rem;"><!-- 18rem -->
                <img class="border-bottom border-warning" src="/img/news/exten2.jpg" style="width:100%; ">
                <div class="card-body">
                  <h5 class="card-title"><b id="blinkingText" class="blinkin" style="color:red;">New</b> 30 May 2024
                  </h5>
                  <p class="card-text" style="text-align:justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The full-paper
                    submission for SPC e-proceedings is extended to June 15th, 2024!!!<br>Download Template : >>>
                    <a style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"
                      href="/file/download/spc2024-proceedings.docx" class="btn btn-warning" target="_blank"> Click
                    </a><br>
                    E-Proceedings Submission Guide : >>>
                    <a style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"
                      href="/file/download/E-Proceedings Submission Guide.pdf" class="btn btn-warning" target="_blank">
                      Click
                    </a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-12 centerer mt-3">
              <div class="card border border-warning rounded" style="width: 28rem;"><!-- 18rem -->
                <img class="border-bottom border-warning" src="/img/news/presentlist.jpg" style="width:100%; ">
                <div class="card-body">
                  <h5 class="card-title">28 May 2024
                  </h5>
                  <p class="card-text" style="text-align:justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oral and Poster
                    presentation List and Program</p>
                  <a href="/file/download/presentationlist.pdf" class="btn btn-warning" target="_blank"
                    style="margin:5px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <h6 class="card-title">presentation list</h6>
                  </a>
                  <a href="/file/download/presentationprogram.pdf" class="btn btn-warning" target="_blank"
                    style="margin:5px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <h6 class="card-title">presentation program</h6>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-12 centerer mt-3">
              <div class="card border border-warning rounded" style="width: 28rem;"><!-- 18rem -->
                <img class="border-bottom border-warning" src="/img/news/834019.jpg" style="width:100%; ">
                <div class="card-body">
                  <h5 class="card-title">13 May 2024
                  </h5>
                  <p class="card-text" style="text-align:justify;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ขอเชิญเข้าร่วมประชุมวิชาการฟิสิกส์ระดับชาติ
                    ครั้งที่ 19 ประจำปี 2567
                    จัดขึ้นระหว่างวันที่ 5-7 มิถุนายน 2567 ณ โรงแรมกรุงศรีริเวอร์ จังหวัดพระนครศรีอยุธยา</p>
                  <a href="/img/news/8340192.jpg" class="btn btn-warning" target="_blank"
                    style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <h6 class="card-title">-- More --</h6>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-12 centerer mt-3">
              <div class="card border border-warning rounded" style="width: 28rem;"><!-- 18rem -->
                <img class="border-bottom border-warning" src="/img/news/13may.jpg" style="width:100%; ">
                <div class="card-body">
                  <h5 class="card-title">10 May 2024
                  </h5>
                  <p class="card-text" style="text-align:justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Attention all
                    prospective attendees of Siam Physics Congress 2024! We have some great news for you: the early-bird
                    registration deadline for the conference has been extended to May 13, 2024. That means you still
                    have time to take advantage of the reduced registration fees.
                  </p>
                  <a href="https://forms.gle/Sh1Arn4sVrKbN3Wm9" class="btn btn-warning"
                    style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <h6 class="card-title">-- More --</h6>
                  </a>
                </div>
              </div>
            </div>
            
          </div>
          <a href="/pages/news.php" class="btn btn-warning"
            style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;float:right">
            <h4 class="card-title">-- All Announcement --</h4>
          </a>
        </div>
      </div>
  </div>


  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/script/blink.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
  ?>

</body>

</html>