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
  <link rel="stylesheet" href="/spc2024/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/spc2024/theme/css/self.css">
</head>

<body class="font-mitr">
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/navbar2.php');
  ?>

  <div class="container">
    <h1 class="centerer mt-3">Plenary Talks & Speakers</h1><br>
    <h2 style="text-align: center;">Plenary Talks</h2>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12" style="text-align: center;">
        <img src="/spc2024/img/speaker/pss01.png" class="w-25">
        <h2 style="color:#df6a00">Prof. Yifang WANG</h2>
        <h5 style="color:#df6a00">Director of Institute of High Energy Physics of Chinese Academy of Sciences</h5>
        <h5 style="color:#df6a00"><b>Title : </b> Jiangmen Underground Neutrino Observatory (JUNO)</h5>
        <p class="color-black" style="text-align:justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; He is an author on more
          than 500 scientific papers on neutrino physics, e+ e- collision physics, cosmic rays and astrophysics,
          detector design and construction, and methods for data analysis, covering his work on the L3, AMS, Palo Verde,
          KamLAND and BES experiments. He led the design and construction of the BESIII detector at the Beijing
          Electron-Positron Collider, and the Daya Bay Reactor Neutrino Experiment, which precisely measured the
          neutrino mixing angle theta13. He proposed the idea of the Circular Electron-Positron Collider (CEPC) followed
          by a proton collider (SPPC) as a possible future step for particle physics. As the spokesperson of Jiangmen
          Underground Neutrino Observatory(JUNO), he is leading the design and construction of the project.
          He was awarded the W. K. H. Panofsky Prize in 2013, the 20th Nikkei Asia Prize in 2015, the Breakthrough Prize
          in Fundamental Physics in 2016 , the Bruno Pontecorvo Prize in 2016 and the Future Science Prize in 2019.
        </p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12" style="text-align: center;">
        <img src="/spc2024/img/speaker/pss02.png" class="w-25">
        <h2 style="color:#df6a00">Prof. Albrecht Karle</h2>
        <h5 style="color:#df6a00">Full professor and former Chair of the Department of Physics at the University of
          Wisconsin-Madison.</h5>
        <h5 style="color:#df6a00"><b>Title : </b> The Telescope in the Ice: Neutrino astronomy at the South Pole -
          recent
          results from IceCube</h5>
        <p class="color-black" style="text-align:justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; His primary research is
          about our understanding of the origin of energetic cosmic rays and neutrinos using the IceCube Neutrino
          Observatory, where he is Associate Director for Science and Instrumentation.
          He is a Co-Principal Investigator of IceCube Neutrino Observatory and Principal Investigator of the IceCube
          Upgrade construction project, an extension of IceCube for precision neutrino physics and astrophysics.
          Karle analyzes data focusing on the search for sources of neutrinos in the Southern Sky using veto techniques
          to
          reject backgrounds. Karle is also involved in advancing the radio detection method of cosmic neutrinos using
          the
          glacial ice at the South Pole and in Greenland.
          He is also working on developing the conceptual design of the next-generation large extension IceCube-Gen2.
        </p>
      </div>
    </div>

    <hr>
    <h2 style="text-align: center;">Keynote Lectures</h2>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">
        <br>
        <h5 style="color:#df6a00">Symposium : Physics Innovation & Education</h4>
          <img src="/spc2024/img/speaker/someone.png" class="w-25">
          <h6>Prof. Dr.Dheerawan Boonyawan</h6>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">
        <br>
        <h5 style="color:#df6a00">Symposium : Condensed Matters & Material Physics</h5>
        <img src="/spc2024/img/speaker/kl02.png" class="w-25">
        <h6>Assoc.Prof.Dr.Jakrapong Kaewkhao<br>
          <span style="font-size: 0.8rem;">Faculty of Science and Technology,Nakhon Pathom Rajabhat University</span>
        </h6>
        <h6>Title : Scintillation Material from Glass: Advantages and Application</h6>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">
        <br>
        <h5 style="color:#df6a00">Symposium : Astronomy, Astrophysics & Cosmology</h5>
        <img src="/spc2024/img/speaker/someone.png" class="w-25">
        <h6>Prof. Dr. David Ruffolo</h6>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">
        <br>
        <h5 style="color:#df6a00">Symposium : Mathematics, Computational & Numerical Physics</h5>
        <img src="/spc2024/img/speaker/kl01.png" class="w-25">
        <h6>Assoc. Prof. Jatuporn Thongsri</h6>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">
        <br>
        <h5 style="color:#df6a00">Symposium : Quantum Physics & Technology</h5>
        <img src="/spc2024/img/speaker/someone.png" class="w-25">
        <h6>Prof. Halina Rubinsztein-Dunlop<br><span style="font-size: 0.8rem;">Department of Physics, University of
            Queensland, Australia</span></h6>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">
        <br>
        <h5 style="color:#df6a00">Symposium : Optical Physics & Technology</h5>
        <img src="/spc2024/img/speaker/someone.png" class="w-25">
        <h6>Assoc.Prof. Nattaporn Chattham</h6>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">
        <br>
        <h5 style="color:#df6a00">Symposium : Applied Physics &Technology, Biophysics, Nano-physics and others</h5>
        <img src="/spc2024/img/speaker/someone.png" class="w-25">
        <h6>Assoc. Prof. Jessada Chureemart<br>
          <span style="font-size: 0.8rem;">Department of Physics, Mahasarakham University</span>
        </h6>
      </div>
    </div>
    <hr>

    <!-- *** Invited Speakers *** -->
    <h2 style="text-align: center;">Invited Speakers</h2>
    <div class="row mt-3" style="background-color: #f6dab8;">
      <div class="col-lg-5 col-md-6 col-sm-6" style="margin: auto;">
        <h5 style="color:#df6a00">Symposium : Physics Innovation & Education</h4>
      </div>
      <div class="col-lg-7 col-md-6 col-sm-6">
        <div class="row mt-3" style="text-align: center;">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/someone.png" class="w-25">
            <h6>Assoc.Prof.Dr. Mudtorlep Nisoa</h6>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/someone.png" class="w-25">
            <h6>Assoc.Prof.Dr. Suthira Taychakhoonavudh</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-lg-5 col-md-6 col-sm-6" style="margin: auto;">
        <h5 style="color:#df6a00">Symposium : Condensed Matters & Material Physics</h4>
      </div>
      <div class="col-lg-7 col-md-6 col-sm-6">
        <div class="row mt-3" style="text-align: center;">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/someone.png" class="w-25">
            <h6>Assoc.Prof.Dr. Saichon Sriphan</h6>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/someone.png" class="w-25">
            <h6>Assoc.Prof. Pongsakorn Kanjanaboos</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3" style="background-color: #f6dab8;">
      <div class="col-lg-5 col-md-6 col-sm-6" style="margin: auto;">
        <h5 style="color:#df6a00">Symposium : Astronomy, Astrophysics & Cosmology</h4>
      </div>
      <div class="col-lg-7 col-md-6 col-sm-6">
        <div class="row mt-3" style="text-align: center;">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/someone.png" class="w-25">
            <h6>Prof.Dr. Burin Gumjudpai</h6>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/someone.png" class="w-25">
            <h6>Assoc.Prof.Dr. Piyabut Burikham</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-lg-5 col-md-6 col-sm-6" style="margin: auto;">
        <h5 style="color:#df6a00">Symposium : Accelerators & Synchrotron radiations</h4>
      </div>
      <div class="col-lg-7 col-md-6 col-sm-6">
        <div class="row mt-3" style="text-align: center;">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/someone.png" class="w-25">
            <h6>Dr.Thakonwat Chanwattana</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3" style="background-color: #f6dab8;">
      <div class="col-lg-5 col-md-6 col-sm-6" style="margin: auto;">
        <h5 style="color:#df6a00">Symposium : Mathematics, Computational & Numerical Physics</h4>
      </div>
      <div class="col-lg-7 col-md-6 col-sm-6">
        <div class="row mt-3" style="text-align: center;">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/someone.png" class="w-25">
            <h6>Assoc. Prof. Thanayut Kaewmaraya</h6>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/someone.png" class="w-25">
            <h6>Assoc. Prof. Papichaya Chaisakul</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-lg-5 col-md-6 col-sm-6" style="margin: auto;">
        <h5 style="color:#df6a00">Symposium : Quantum Physics & Technology</h4>
      </div>
      <div class="col-lg-7 col-md-6 col-sm-6">
        <div class="row mt-3" style="text-align: center;">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/someone.png" class="w-25">
            <h6>Assoc. Prof. Areeya Chantasri</h6>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/someone.png" class="w-25">
            <h6>Prof. Yoshiaki Yasuno<span style="font-size: 0.8rem;">Institute of Applied Physics, University of
                Tsukuba, Japan</span></h6>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3" style="background-color: #f6dab8;">
      <div class="col-lg-5 col-md-6 col-sm-6" style="margin: auto;">
        <h5 style="color:#df6a00">Symposium : Optical Physics & Technology</h4>
      </div>
      <div class="col-lg-7 col-md-6 col-sm-6">
        <div class="row mt-3" style="text-align: center;">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/someone.png" class="w-25">
            <h6>Assoc.Prof. Amarin Rattanawit</h6>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/someone.png" class="w-25">
            <h6>Asst.Prof. Dr. Chat Teeka</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-lg-5 col-md-6 col-sm-6" style="margin: auto;">
        <h5 style="color:#df6a00">Symposium : Applied Physics &Technology, Biophysics, Nano-physics and others</h4>
      </div>
      <div class="col-lg-7 col-md-6 col-sm-6">
        <div class="row mt-3" style="text-align: center;">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/someone.png" class="w-25">
            <h6>Assoc. Prof. Soodkhet Projprapai<span style="font-size: 0.8rem;">School of Ceramic Engineering,
                Institute of Engineering, Suranaree University of Technology</span></h6>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/someone.png" class="w-25">
            <h6>Assoc. Prof. Dr. Ratchanok Somphonsane</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3" style="background-color: #f6dab8;">
      <div class="col-lg-5 col-md-6 col-sm-6" style="margin: auto;">
        <h5 style="color:#df6a00">Symposium : High Energy & Particle Physics</h4>
      </div>
      <div class="col-lg-7 col-md-6 col-sm-6">
        <div class="row mt-3" style="text-align: center;">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/someone.png" class="w-25">
            <h6>Asst.Prof.Dr.Norraphat Srimanobhas</h6>
          </div>
        </div>
      </div>
    </div>


  </div>
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
  ?>
</body>

</html>