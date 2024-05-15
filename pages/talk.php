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
    <h1 class="centerer mt-3 mb-2">Plenary Talks & Speakers</h1><br>
    <h1 style="text-align: center;">Plenary Talks</h1>
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
    <h1 style="text-align: center;">Keynote Lectures</h1>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">
        <br>
        <h5 style="color:#df6a00">Symposium : Physics Innovation & Education</h4>
          <img src="/spc2024/img/speaker/kl01.png" class="w-50">
          <h6>Prof. Dr.Dheerawan Boonyawan<br>
            <span style="font-size: 0.8rem;">Department of Physics and Materials Science, Faculty of Science
              Chiang Mai University
            </span><br>Title : Air Plasma Spray and PlasOne: Top-to-Toe Cold Atmospheric Plasma Innovation
          </h6>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">
        <br>
        <h5 style="color:#df6a00">Symposium : Condensed Matters & Material Physics</h5>
        <img src="/spc2024/img/speaker/kl02.png" class="w-50">
        <h6>Assoc.Prof.Dr.Jakrapong Kaewkhao<br>
          <span style="font-size: 0.8rem;">Center of Excellence in Glass Technology and Materials Science (CEGM)
            Faculty of Science and Technology, Nakhon Pathom Rajabhat University
          </span>
          <br>Title : Scintillation Material from Glass: Advantages and Application
        </h6>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">
        <br>
        <h5 style="color:#df6a00">Symposium : Astronomy, Astrophysics & Cosmology</h5>
        <img src="/spc2024/img/speaker/kl03.png" class="w-50">
        <h6>Prof. Dr. David Ruffolo<br>
          <span style="font-size: 0.8rem;">Department of Physics, Faculty of Science, Mahidol University
          </span><br>Title : Space Radiation Science and Technology
        </h6>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">
        <br>
        <h5 style="color:#df6a00">Symposium : Mathematics, Computational & Numerical Physics</h5>
        <img src="/spc2024/img/speaker/kl05.png" class="w-50">
        <h6>Assoc. Prof. Dr. Jatuporn Thongsri<br>
          <span style="font-size: 0.8rem;">College of Advanced Manufacturing Innovation, King Mongkut’s Institute of
            Technology Ladkrabang
          </span><br>Title :
        </h6>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">
        <br>
        <h5 style="color:#df6a00">Symposium : Optical Physics & Technology</h5>
        <img src="/spc2024/img/speaker/kl07.png" class="w-50">
        <h6>Assoc. Prof. Dr. Nattaporn Chattham<br>
          <span style="font-size: 0.8rem;">Department of Physics, Faculty of Science, Kasetsart University
          </span><br>Title : Exploring Molecular Orientation in Smectic Liquid Crystal Films Induced by Mass Flux:
          Preparation for the Microgravity Experiment on the International Space Station
        </h6>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">
        <br>
        <h5 style="color:#df6a00">Symposium : Applied Physics & Technology</h5>
        <img src="/spc2024/img/speaker/kl08.png" class="w-50">
        <h6>Assoc. Prof. Dr. Jessada Chureemart<br>
          <span style="font-size: 0.8rem;">Department of Physics, Mahasarakham University
          </span><br>Title : Physics and Engineering in the Application of Magnetic Recording Technology
        </h6>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">
        <br>
        <h5 style="color:#df6a00">Symposium : Plasma, Radiation, Nuclear Physics, and Technology</h5>
        <img src="/spc2024/img/speaker/kl10.png" class="w-50">
        <h6>Assoc. Prof. Dr. Somsak Dangtip<br>
          <span style="font-size: 0.8rem;">Thailand Institute of Nuclear Technology
          </span><br>Title : Capability Building and Networking for Fusion Technology through the First Tokamak of
          Thailand (TT-1)”
        </h6>
      </div>
    </div>
    <hr>

    <!-- *** Invited Speakers *** -->
    <h1 style="text-align: center;">Invited Speakers</h1>
    <div class="row mt-3" style="background-color: #f6dab8;">
      <div class="col-lg-5 col-md-6 col-sm-6" style="margin: auto;">
        <h5 style="color:#df6a00">Symposium : Physics Innovation & Education</h4>
      </div>
      <div class="col-lg-7 col-md-6 col-sm-6">
        <div class="row mt-3" style="text-align: center;">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/is01-1.png" class="w-50">
            <h6>Assoc. Prof. Dr. Mudtorlep Nisoa<br>
              <span style="font-size: 0.8rem;">Division of physics, School of Science, Walailak University
              </span><br>Title : Engineering physics research to develop microwave heating technology for agricultural
              and industrial development
            </h6>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/is01-2.png" class="w-50">
            <h6>Assoc. Prof. Dr. Suthira Taychakhoonavudh<br>
              <span style="font-size: 0.8rem;">Chief Executive Officer and co-founder of Baiya Phytopharm
              </span><br>Title :
            </h6>
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
            <img src="/spc2024/img/speaker/is02-1.png" class="w-50">
            <h6>Assoc. Prof. Dr. Saichon Sriphan<br>
              <span style="font-size: 0.8rem;">King Mongkut's University of Technology North Bangkok
              </span><br>Title : Tribovoltaic effect based on solid-solid interface: 
transition from emerging mechanism into potential applications
            </h6>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/is02-2.png" class="w-50">
            <h6>Assoc. Prof. Dr. Pongsakorn Kanjanaboos<br>
              <span style="font-size: 0.8rem;">School of Materials Science and Innovation, Faculty of Science,
                Mahidol University</span><br>Title : Functional Materials and Scalable Processes for Low-Cost Perovskite
              Solar Cells and Radiative Cooling Films
            </h6>
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
            <img src="/spc2024/img/speaker/is03-1.png" class="w-50">
            <h6>Prof. Dr. Burin Gumjudpai<br>
              <span style="font-size: 0.8rem;">NAS, Centre for Theoretical Physics and Natural Philosophy, Mahidol
                University, Nakhonsawan Campus Project
              </span><br>Title : Gravitational UV/IR Mixing with Matter Effects in Cosmology
            </h6>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/is03-2.png" class="w-50">
            <h6>Assoc. Prof. Dr. Piyabut Burikham<br>
              <span style="font-size: 0.8rem;">Department of Physics, Chulalongkorn University
              </span><br>Title : Thermodynamics of black hole in certain class of Weyl geometric gravity
            </h6>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/is03-3.png" class="w-50">
            <h6>Dr. Taweewat Somboonpanyakul<br>
              <span style="font-size: 0.8rem;">Department of Physics, Chulalongkorn University
              </span><br>Title : CHIPS1911+4455: A Cooling flow in a Mering Cluster
            </h6>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/is03-4.png" class="w-50">
            <h6>Dr. Saran Poshyachinda<br>
              <span style="font-size: 0.8rem;">National Astronomical Research Institute of Thailand (NARIT)
              </span><br>Title :
            </h6>
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
            <img src="/spc2024/img/speaker/is04.png" class="w-50">
            <h6>Dr. Thakonwat Chanwattana<br>
              <span style="font-size: 0.8rem;">Accelerator Research and Instrumentation Section, Accelerator Research
                and Development Division, Synchrotron Light Research Institute
                (Public Organization)
              </span><br>Title : SLRI Ongoing Synchrotron and Accelerator Projects
            </h6>
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
            <img src="/spc2024/img/speaker/is05-1.png" class="w-50">
            <h6>Assoc. Prof. Dr. Thanayut Kaewmaraya<br>
              <span style="font-size: 0.8rem;">Department of Physics, Faculty of Science, Khon Kaen University
              </span><br>Title : Two-dimensional Materials as Cathode Host for Inhibiting Polysulfide Shuttling and Promoting Kinetics in Metal–Sulfur Batteries
            </h6>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/is05-2.png" class="w-50">
            <h6>Assoc. Prof. Dr. Papichaya Chaisakul<br>
              <span style="font-size: 0.8rem;">Department of Physics, Faculty of Science, Kasetsart University
              </span><br>Title : Finite-Difference Time-Domain method for the investigation of silicon-based photonic
              integrated circuits
            </h6>
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
            <img src="/spc2024/img/speaker/someone.png" class="w-50">
            <h6>Assoc. Prof. Dr. Areeya Chantasri<br>
              <span style="font-size: 0.8rem;">Department of Physics, Faculty of Science, Mahidol University
              </span><br>Title :
            </h6>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/is06-2.png" class="w-50">
            <h6>Prof. Dr. Yoshiaki Yasuno<span style="font-size: 0.8rem;">Institute of Applied Physics, University of
                Tsukuba, Japan</span><br>Title : Contrast augmentation of optical coherence tomography by computational methods</h6>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/is06-3.png" class="w-50">
            <h6>Asst. Prof. Dr. Pruet Kalasuwan<span style="font-size: 0.8rem;">Faculty of Science, Prince of Songkla
                University</span><br>Title : Exploring the realm of quantum communication within the context of Thailand
            </h6>
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
            <img src="/spc2024/img/speaker/is07-1.png" class="w-50">
            <h6>Assoc. Prof. Dr. Amarin Ratanavis<br>
              <span style="font-size: 0.8rem;">Department of Industrial Physics and Medical Instrumentation, Faculty of
                Applied Science, Lasers and Optics Research Center, Science and Technology Research Institute, King
                Mongkut’s University of Technology North Bangkok
              </span><br>Title : Development of Laser Systems and Applications
            </h6>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/is07-2.png" class="w-50">
            <h6>Asst. Prof. Dr. Chat Teeka<br>
              <span style="font-size: 0.8rem;">Program in General Science, Faculty of Science and Technology, Suan Dusit
                University, Bangkok, Thailand
              </span><br>Title : Artificial Intelligence in Meta–Optics
            </h6>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/is07-3.png" class="w-50">
            <h6>Prof. Dr. C.K. Jayasankar<br>
              <span style="font-size: 0.8rem;">Department of Physics, Sri Venkateswara University, Tirupati, India
              </span><br>Title : An overview of visible and infrared down- and up-conversion luminescence properties of
              Er3+-doped glasses for photonic applications
            </h6>
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
            <img src="/spc2024/img/speaker/someone.png" class="w-50">
            <h6>Assoc. Prof. Dr. Soodkhet Projprapai<br>
              <span style="font-size: 0.8rem;">School of Ceramic Engineering, Institute of Engineering, Suranaree
                University of Technology, Founder of Suratec
              </span><br>Title :
            </h6>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/is08-2.png" class="w-50">
            <h6>Assoc. Prof. Dr. Ratchanok Somphonsane<br>
              <span style="font-size: 0.8rem;">Department of Physics, School of Science, King’s Mongkut Institute of
                Technology Ladkrabang
              </span><br>Title : Inducing Spin-Dependent Functionality in 2D Semiconductors
            </h6>
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
            <img src="/spc2024/img/speaker/is09-1.png" class="w-50">
            <h6>Asst. Prof. Dr. Norraphat Srimanobhas<br>
              <span style="font-size: 0.8rem;">Department of Physics, Faculty of Science, Chulalongkorn University
              </span><br>Title : Highlights from Flavor Physics and CP Violation conference 2024
            </h6>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/spc2024/img/speaker/is09-2.png" class="w-50">
            <h6>Dr. Pinit Kidkhunthod<br>
              <span style="font-size: 0.8rem;">Synchrotron Light Research Institute (Public Organization)
              </span><br>Title : Hard X-ray absorption spectroscopy (HXAS) beamline
              at the new 3 GeV SPS-II
            </h6>
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