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
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/navbar.php');
  ?>

  <section class="mt-3">
    <div class="container">
      <h1 class="card-title centerer mt-3">Organizer</h1>
      <div class="blog-con">

        <div class="row mt-3">
          <div class="col-lg-2 col-md-3 col-3" style="text-align: center;">
            <a href="http://www.thaiphysoc.org/" target="_blank">
              <img src="/spc2024/img/co-host/physic.png" class="img-fluid">
            </a>
          </div>
          <div class="col-lg-2 col-md-3 col-3 center2">
            <a href="http://www.thaiphysoc.org/" target="_blank">
              <h6 class="abw resfont2">Thai physics society</h6>
            </a>
          </div>
          <div class="col-lg-2 col-md-3 col-3" style="text-align: center;">
            <a href="https://www.science.kmitl.ac.th/new" target="_blank">
              <img src="/spc2024/img/co-host/logo-b.png" class="img-fluid">
            </a>
          </div>
          <div class="col-lg-2 col-md-3 col-3 center2">
            <a href="https://www.science.kmitl.ac.th/new" target="_blank">
              <h6 class="abw resfont2">King Mongkut's Institute of Technology Ladkrabang</h6>
            </a>
          </div>
          <div class="col-lg-2 col-md-3 col-3" style="text-align: center;">
            <a href="http://www.cmit.kmitl.ac.th/" target="_blank">
              <img src="/spc2024/img/co-host/cmit.png" class="img-fluid">
            </a>
          </div>
          <div class="col-lg-2 col-md-3 col-3 center2">
            <a href="http://www.cmit.kmitl.ac.th/" target="_blank">
              <h6 class="abw resfont2">College of materials innovation and technology</h6>
            </a>
          </div>
          <div class="col-lg-2 col-md-3 col-3" style="text-align: center;">
            <a href="https://www.princess-it.org/" target="_blank">
              <img src="/spc2024/img/co-host/hrh.png" class="img-fluid w-75">
            </a>
          </div>
          <div class="col-lg-2 col-md-3 col-3 center2">
            <a href="https://www.princess-it.org/" target="_blank">
              <h6 class="abw resfont2">The information technology foundation under the Initiative of Her Royal Highness
                Priness Maha Chakri Sirindhorn</h6>
            </a>
          </div>
          <div class="col-lg-2 col-md-3 col-3" style="text-align: center;">
            <a href="https://www.aru.ac.th/" target="_blank">
              <img src="/spc2024/img/co-host/pru.png" class="img-fluid w-75">
            </a>
          </div>
          <div class="col-lg-2 col-md-3 col-3 center2">
            <a href="https://www.aru.ac.th/" target="_blank">
              <h6 class="abw resfont2">Phranakhon Si Ayutthaya Rajabhat University</h6>
            </a>
          </div>
          <div class="col-lg-2 col-md-3 col-3" style="text-align: center;">
            <a href="https://www.nst.or.th/" target="_blank">
              <img src="/spc2024/img/co-host/nst.png" class="img-fluid w-75">
            </a>
          </div>
          <div class="col-lg-2 col-md-3 col-3 center2">
            <a href="https://www.nst.or.th/" target="_blank">
              <h6 class="abw resfont2">Nuclear Society of Thailand</h6>
            </a>
          </div>
        </div>
        <hr>
      </div>

      <h1 class="card-title centerer mt-3">Sponsors</h1>
      <div class="blog-con">
        <div class="blog-item">
          <h2 class="mt-3" style="text-align: center;">Supreme</h2>

          <!-- Supremea -->
          <div class="row">

            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.tsri.or.th/" target="_blank">
                <img src="/spc2024/img/sponsors/08.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.tsri.or.th/" target="_blank">
                <h6 class="abw resfont2">สำนักงานคณะกรรมการส่งเสริมวิทยาศาสตร์ วิจัยและนวัตกรรม (สกสว.)</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.pttep.com/th/home.aspx" target="_blank">
                <img src="/spc2024/img/sponsors/26.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.pttep.com/th/home.aspx" target="_blank">
                <h6 class="abw resfont2">บริษัท ปตท.สำรวจและผลิตปิโตรเลียม จำกัด (มหาชน)</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.slri.or.th/th/" target="_blank">
                <img src="/spc2024/img/sponsors/27.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.slri.or.th/th/" target="_blank">
                <h6 class="abw resfont2">สถาบันวิจัยแสงซินโครตรอน (องค์การมหาชน)</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2"></div>
            <div class="col-lg-2 col-md-3 col-3 center2"></div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.nstda.or.th/" target="_blank">
                <img src="/spc2024/img/sponsors/30.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.nstda.or.th/" target="_blank">
                <h6 class="abw resfont2">สำนักงานพัฒนาวิทยาศาสตร์และเทคโนโลยีแห่งชาติ (สวทช.)</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2"></div>
            <div class="col-lg-2 col-md-3 col-3 center2"></div>
          </div>

          <hr>
          <h2 style="text-align: center;">Platinum</h2>

          <!-- Platinum แถวที่ 1 -->
          <div class="row">
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.narit.or.th/" target="_blank">
                <img src="/spc2024/img/sponsors/05.png" class="img-fluid w-75 resw-100">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.narit.or.th/" target="_blank">
                <h6 class="abw resfont2">สถาบันวิจัยดาราศาสตร์แห่งชาติ (องค์การมหาชน)</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.posn.or.th/" target="_blank">
                <img src="/spc2024/img/sponsors/28.png" class="img-fluid w-75 resw-100">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.posn.or.th/" target="_blank">
                <h6 class="abw resfont2">มูลนิธิ สอวน.</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3" style="text-align: center;">
              <a href="https://www.nst.or.th/" target="_blank">
                <img src="/spc2024/img/co-host/nst.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.nst.or.th/" target="_blank">
                <h6 class="abw resfont2">Nuclear Society of Thailand</h6>
              </a>
            </div>
          </div>

          <hr>
          <h2 style="text-align: center;">Gold</h2>

          <!-- Gold  -->
          <div class="row">
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.fortistrading.co.th/" target="_blank">
                <img src="/spc2024/img/sponsors/15.png" class="img-fluid w-75 resw-100">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.fortistrading.co.th/" target="_blank">
                <h6 class="abw resfont2">บริษัท FORTIS TRADING CO.,LTD</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="http://www.saengvith2000.com/index.php?ContentID=ContentID-110322171728296" target="_blank">
                <img src="/spc2024/img/sponsors/18.png" class="img-fluid w-75 resw-100">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="http://www.saengvith2000.com/index.php?ContentID=ContentID-110322171728296" target="_blank">
                <h6 class="abw resfont2">บริษัท แสงวิทย์ 2000 จำกัด</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3" style="text-align: center;">
              <a href="https://www.puditec.com/" target="_blank">
                <img src="/spc2024/img/sponsors/17.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.puditec.com/" target="_blank">
                <h6 class="abw resfont2">บริษัท ภูดิศณ์เทค จำกัด</h6>
              </a>
            </div>
          </div>

          <!-- <hr>
          <h2 style="text-align: center;">Silver</h2> -->

          <!-- Silver -->
          <!-- <div class="row">
            <div class="col-2 center2" style="text-align: center;"></div>
            <div class="col-2 center2"></div>
            <div class="col-2 center2" style="text-align: center;">
              <a href="https://www.ipst.ac.th/ipsten" target="_blank">
                <img src="/spc2024/img/sponsors/01.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>The Institute for Promotion of Teaching Science and Technology (IPST)</h6>
            </div>
            <div class="col-2 center2" style="text-align: center;"></div>
            <div class="col-2 center2"></div>
          </div> -->

          <!-- <hr>
          <h2 style="text-align: center;">Copper</h2> -->

          <!-- Copper -->
          <hr>
          <h2 style="text-align: center;">Copper</h2>
          <div class="row">
            <!-- <div class="col-lg-2 col-md-3 col-3 center2"></div> -->
            <div class="col-lg-2 col-md-3 col-3" style="text-align: center;">
              <a href="https://www.asgexperience.com/" target="_blank">
                <img src="/spc2024/img/sponsors/29.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.asgexperience.com/" target="_blank">
                <h6 class="abw resfont2">บริษัท เอเอ็สจี เอ็กพีเรียนซ์ จำกัด</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3" style="text-align: center;">
              <a href="https://www.analytik-jena.com/" target="_blank">
                <img src="/spc2024/img/sponsors/31.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.analytik-jena.com/" target="_blank">
                <h6 class="abw resfont2">บริษัท อนาไลติค เยน่า ฟาร์อีสต์ (ประเทศไทย) จำกัด</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2"></div>
          </div>

        </div>
      </div>
    </div>
  </section>

  </div>

  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
  ?>
</body>

</html>