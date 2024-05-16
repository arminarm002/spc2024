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
              <a href="https://www.thep-center.org/" target="_blank">
                <img src="/spc2024/img/sponsors/02.png" class="img-fluid w-75 resw-100">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.thep-center.org/" target="_blank">
                <h6 class="abw resfont2">ศูนย์ความเป็นเลิศด้านฟิสิกส์</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.costat.or.th/2567/" target="_blank">
                <img src="/spc2024/img/sponsors/09.png" class="img-fluid w-75 resw-100">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.costat.or.th/2567/" target="_blank">
                <h6 class="abw resfont2">สภาสมาคมวิทยาศาสตร์และเทคโนโลยีแห่งประเทศไทย</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2"></div>
            <div class="col-lg-2 col-md-3 col-3 center2"></div>
            <div class="col-lg-2 col-md-3 col-3 center2"></div>
            <div class="col-lg-2 col-md-3 col-3 center2"></div>
          </div>

          <hr>
          <!-- Platinum -->
          <h2 style="text-align: center;">Platinum</h2>
          <div class="row">
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.barascientific.com/slide/" target="_blank">
                <img src="/spc2024/img/sponsors/33.png" class="img-fluid w-75 resw-100">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.barascientific.com/slide/" target="_blank">
                <h6 class="abw resfont2">บริษัท พาราไซแอนติฟิค จำกัด</h6>
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
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://en.cnnc.com.cn/" target="_blank">
                <img src="/spc2024/img/sponsors/51.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://en.cnnc.com.cn/" target="_blank">
                <h6 class="abw resfont2">China National Nuclear Corporation Overseas Ltd.</h6>
              </a>
            </div>

            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.designalternative.co.th/" target="_blank">
                <img src="/spc2024/img/sponsors/37.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.designalternative.co.th/" target="_blank">
                <h6 class="abw resfont2">บริษัท ดีไซน์ ออลเทอร์เนทีฟ จำกัด</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="http://www.aml-tech.com/index.php" target="_blank">
                <img src="/spc2024/img/sponsors/38.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="http://www.aml-tech.com/index.php" target="_blank">
                <h6 class="abw resfont2">บริษัท เอเอ็มแอล เทคโนโลยี จำกัด (สำนักงานใหญ่)</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <img src="/spc2024/img/sponsors/47.png" class="img-fluid w-75">
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <h6 class="abw resfont2">ศูนย์กลางความรู้ด้านการให้ความร้อนด้วยคลื่นไมโครเวฟ
                การพัฒนาที่ยั่งยืนเพื่อลดการปล่อยคาร์บอนไดออกไซด์ของมนุษยชาติ</h6>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.nrct.go.th/" target="_blank">
                <img src="/spc2024/img/sponsors/10.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.nrct.go.th/" target="_blank">
                <h6 class="abw resfont2">สำนักงานการวิจัยแห่งชาติ (วช.)</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="http://www.mrsthailand.or.th/annual-meetings.php" target="_blank">
                <img src="/spc2024/img/sponsors/57.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="http://www.mrsthailand.or.th/annual-meetings.php" target="_blank">
                <h6 class="abw resfont2">สมาคมวิจัยวัสดุ ประเทศไทย</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.thermofisher.com/th/en/home.html" target="_blank">
                <img src="/spc2024/img/sponsors/58.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.thermofisher.com/th/en/home.html" target="_blank">
                <h6 class="abw resfont2">บริษัท เทอร์โม ฟิชเชอร์ ไซเอนทิฟิค (ประเทศไทย) จำกัด</h6>
              </a>
            </div>
          </div>

          <hr>
          <!-- Gold  -->
          <h2 style="text-align: center;">Gold</h2>
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
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.anton-paar.com/si-en/" target="_blank">
                <img src="/spc2024/img/sponsors/34.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.anton-paar.com/si-en/" target="_blank">
                <h6 class="abw resfont2">บริษัท แอนตัน พาร์ (ประเทศไทย)</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.lableader.co.th/" target="_blank">
                <img src="/spc2024/img/sponsors/35.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.lableader.co.th/" target="_blank">
                <h6 class="abw resfont2">บริษัท แล็บ ลีดเดอร์ จำกัด</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <img src="/spc2024/img/sponsors/36.png" class="img-fluid w-75">
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <h6 class="abw resfont2">โครงการวิจัยควอนตัม รศ.ดร.วรวัฒน์ มีวาสนา</h6>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.vernier-thai.com/" target="_blank">
                <img src="/spc2024/img/sponsors/39.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.vernier-thai.com/" target="_blank">
                <h6 class="abw resfont2">บริษัท เวอร์เนียร์ ไทย จำกัด</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.intesalogic.com/" target="_blank">
                <img src="/spc2024/img/sponsors/40.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.intesalogic.com/" target="_blank">
                <h6 class="abw resfont2">บริษัท อินเทซ่าลอจิก จำกัด</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.intesalogic.com/" target="_blank">
                <img src="/spc2024/img/sponsors/41.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.intesalogic.com/" target="_blank">
                <h6 class="abw resfont2">บริษัท เทคคอมพ์ (ประเทศไทย) จำกัด (สำนักงานใหญ่)</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.coax.co.th/th/" target="_blank">
                <img src="/spc2024/img/sponsors/42.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.coax.co.th/th/" target="_blank">
                <h6 class="abw resfont2">บริษัท โคแอกซ์ กรุป คอร์ปอเรชั่น จำกัด</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://k2graphene.com/" target="_blank">
                <img src="/spc2024/img/sponsors/43.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://k2graphene.com/" target="_blank">
                <h6 class="abw resfont2">บริษัท เคทู กราฟีน จำกัด (สำนักงานใหญ่)</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://lmsinstruments.co.th/" target="_blank">
                <img src="/spc2024/img/sponsors/44.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://lmsinstruments.co.th/" target="_blank">
                <h6 class="abw resfont2">บริษัท แอลเอ็มเอส อินสทรูเม้นท์ จำกัด</h6>
              </a>
            </div>

            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.npru.ac.th/index.php" target="_blank">
                <img src="/spc2024/img/sponsors/45.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.npru.ac.th/index.php" target="_blank">
                <h6 class="abw resfont2">มหาวิทยาลัยราชภัฏนครปฐม</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.sci.nu.ac.th/science/" target="_blank">
                <img src="/spc2024/img/sponsors/46.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.sci.nu.ac.th/science/" target="_blank">
                <h6 class="abw resfont2">สถานวิจัยเพื่อความเป็นเลิศทางวิชาการด้านฟิสิกส์ประยุกต์ คณะวิทยาศาสตร์
                  มหาวิทยาลัยนเรศวร</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.facebook.com/smchem/" target="_blank">
                <img src="/spc2024/img/sponsors/48.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.facebook.com/smchem/" target="_blank">
                <h6 class="abw resfont2">บริษัท เอส.เอ็ม.เคมีคอล ซัพพลาย จำกัด</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.tint.or.th/" target="_blank">
                <img src="/spc2024/img/sponsors/06.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.tint.or.th/" target="_blank">
                <h6 class="abw resfont2">สถาบันเทคโนโลยีนิวเคลียร์แห่งชาติ (องค์การมหาชน)</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.cidiskthailand.com/" target="_blank">
                <img src="/spc2024/img/sponsors/49.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.cidiskthailand.com/" target="_blank">
                <h6 class="abw resfont2">บริษัท ซีไอดิสก์ (ประเทศไทย) จำกัด </h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.spectralinstrument.com/" target="_blank">
                <img src="/spc2024/img/sponsors/50.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.spectralinstrument.com/" target="_blank">
                <h6 class="abw resfont2">บริษัท สเปคทรัล เทคโนโลยี อินสทรูเม้นท์ จำกัด</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://csnsolution.co.th/" target="_blank">
                <img src="/spc2024/img/sponsors/52.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://csnsolution.co.th/" target="_blank">
                <h6 class="abw resfont2">บริษัท ซีแอนด์เอ็นโซลูชั่น จำกัด</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://abexglobalhc.co.th/" target="_blank">
                <img src="/spc2024/img/sponsors/14.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://abexglobalhc.co.th/" target="_blank">
                <h6 class="abw resfont2">ABEX HYDRAULICS & ENGINEERING CO.,LTD</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://histocenter.co.th/" target="_blank">
                <img src="/spc2024/img/sponsors/53.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://histocenter.co.th/" target="_blank">
                <h6 class="abw resfont2">บริษัท ฮีสโตเซ็นเตอร์ (ไทยแลนด์) จำกัด</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://qtft.org/" target="_blank">
                <img src="/spc2024/img/sponsors/54.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://qtft.org/" target="_blank">
                <h6 class="abw resfont2">บริษัท ควอนตัมเทคโนโลยีฟาวเดชั่น (ประเทศไทย) จำกัด (สำนักงานใหญ่)</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="http://www.pvpvacuum.com/" target="_blank">
                <img src="/spc2024/img/sponsors/55.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="http://www.pvpvacuum.com/" target="_blank">
                <h6 class="abw resfont2">บริษัท โปรเฟสชั่นแนลแวคคัมพาร์ทเนอร์ส จำกัด</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://cerntek.co.th/" target="_blank">
                <img src="/spc2024/img/sponsors/56.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://cerntek.co.th/" target="_blank">
                <h6 class="abw resfont2">บริษัท เซิร์นเทค จำกัด</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://kinetics.co.th/" target="_blank">
                <img src="/spc2024/img/sponsors/25.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://kinetics.co.th/" target="_blank">
                <h6 class="abw resfont2">บริษัท ไคเนติคส์ คอร์ปอเรชั่น จำกัด (สำนักงานใหญ่)</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.irct.co.th/" target="_blank">
                <img src="/spc2024/img/sponsors/21.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.irct.co.th/" target="_blank">
                <h6 class="abw resfont2">บริษัท ไออาร์ซี เทคโนโลยีส์ จำกัด</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.crest-group.net/" target="_blank">
                <img src="/spc2024/img/sponsors/20.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.crest-group.net/" target="_blank">
                <h6 class="abw resfont2">บริษัท เครส นาโนโซลูชั่น (ประเทศไทย) จำกัด</h6>
              </a>
            </div>
          </div>

          <hr>
          <!-- Silver -->
          <h2 style="text-align: center;">Silver</h2>
          <div class="row">
          <div class="col-lg-2 col-md-3"></div>
          <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.fitel.co.th/" target="_blank">
                <img src="/spc2024/img/sponsors/32.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.fitel.co.th/" target="_blank">
                <h6 class="abw resfont2">บริษัทฟูรูกาวา ไฟเทล (ประเทศไทย) จำกัด</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="http://www.science.up.ac.th/" target="_blank">
                <img src="/spc2024/img/sponsors/59.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="http://www.science.up.ac.th/" target="_blank">
                <h6 class="abw resfont2">คณะวิทยาศาสตร์ มหาวิทยาลัยพะเยา</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3"></div>
            
          </div>

          <hr>
          <!-- Copper -->
          <h2 style="text-align: center;">Copper</h2>
          <div class="row">
            <div class="col-lg-2 col-md-3"></div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.asgexperience.com/" target="_blank">
                <img src="/spc2024/img/sponsors/29.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.asgexperience.com/" target="_blank">
                <h6 class="abw resfont2">บริษัท เอเอ็สจี เอ็กพีเรียนซ์ จำกัด</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2" style="text-align: center;">
              <a href="https://www.analytik-jena.com/" target="_blank">
                <img src="/spc2024/img/sponsors/31.png" class="img-fluid w-75">
              </a>
            </div>
            <div class="col-lg-2 col-md-3 col-3 center2">
              <a href="https://www.analytik-jena.com/" target="_blank">
                <h6 class="abw resfont2">บริษัท อนาไลติค เยน่า ฟาร์อีสต์ (ประเทศไทย) จำกัด</h6>
              </a>
            </div>
            <div class="col-lg-2 col-md-3"></div>
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