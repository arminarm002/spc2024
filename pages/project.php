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
    <h1 class="card-title centerer mt-3">ประกวดโครงงานครั้งที่ 16 “ค้นคว้าอิสระปริญญาตรี สาขาวิชาฟิสิกส์”</h1>
    <div class="row" style="margin: 15px auto;">
      <div class="col-6">
        <a href="/spc2024/img/news/project1.jpg" target="_blank">
          <img src="/spc2024/img/news/project1.jpg" class="d-block w-100  border border-warning">
        </a>
      </div>
      <div class="col-6">
        <a href="/spc2024/img/news/project2.jpg" target="_blank">
          <img src="/spc2024/img/news/project2.jpg" class="d-block w-100  border border-warning">
        </a>
      </div>
    </div>
    <div class="row" style="margin: 15px auto;">
      <div class="col-12">
        <div class="card border-0">
          <table class="table table-success table-striped table-hover mt-5">
            <thead style="text-align: center;">
              <tr>
                <td>
                  <h4 class="fs-35">กำหนดการ</h4>
                </td>
                <td>
                  <h4 class="fs-35">วันที่</h4>
                </td>
              </tr>
            </thead>
            <tbody class="fs-22">
              <tr>
                <td>เปิดรับสมัครลงทะเบียน (ส่งเฉพาะ abstract)</td>
                <td>ตั้งแต่วันที่ 15 มีนาคม - 15 เมษายน 2567</td>
              </tr>
              <tr>
                <td>ประกาศผลโครงงานที่ผ่านรอบคัดเลือก รอบแรก</td>
                <td>ภายใน วันที่ <span class="redmidline">17 เมษายน 2567</span>
                  <span class="red"> 30 เมษายน 2567</span>
                </td>
              </tr>
              <tr>
                <td>ผู้ผ่านเข้ารอบสองส่งรายงานโครงงานฉบับสมบูรณ์ออนไลน์ผ่านเว็บไซท์ SPC 2024</td>
                <td>ภายใน วันที่ 10 พฤษภาคม 2567</td>
              </tr>
              <tr>
                <td>ประกาศผลโครงงานที่ผ่านรอบคัดเลือก รอบสอง</td>
                <td>ภายใน วันที่ 15 พฤษภาคม 2567</td>
              </tr>
              <tr>
                <td>ประกาศผลโครงงานที่ผ่านเข้ารอบสุดท้าย</td>
                <td>ภายใน วันที่ 20 พฤษภาคม 2567</td>
              </tr>
              <tr>
                <td>นักศึกษานำเสนอผลงานในงานประชุม Siam Physics Congress 2024 (SPC 2024)</td>
                <td>วันที่ 6 มิถุนายน 2567</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <hr>
    <div class="row" style="margin: 15px auto;">
      <h1 class="card-title centerer">เงื่อนไขและเอกสารประกอบการสมัคร</h1>
      <div class="col-12">
        <div class="card border-0" style="color: #494949;">
          <p>โครงงานค้นคว้าอิสระที่ส่งเข้าประกวด ต้องเป็นโครงงานอิสระระดับปริญญาตรี สาขาฟิสิกส์ ของบัณฑิต วท.บ. ฟิสิกส์
            ปีการศึกษา 2565 หรือ นักศึกษาที่จะกำลังสำเร็จการศึกษา วท.บ. ฟิสิกส์ ปีการศึกษา 2566
            โดยมีเอกสารประกอบการสมัครดังนี้</p>
          <h5>รอบแรก</h5>
          <ul class="unlist">
            <li>Abstract Template for Physics Project 2024
              <button class="btn btn-warning" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">Download File</button>
            </li>
            <li>แบบยินยอมให้ส่งผลงานเข้าประกวดจากอาจารย์ที่ปรึกษาโครง งานค้นคว้าอิสระ
              <button class="btn btn-warning" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">Download File</button>
            </li>
          </ul>
          <h5>รอบสอง </h5>
          <h6>โครงงานที่ผ่านเข้ารอบ กรุณาอ่านประกาศหลักเกณฑ์การสนับสนุนค่าใช้จ่าย และ แนวปฏิบัติสำหรับการเข้าประกวด</h6>
          <ul class="unlist">
            <li>ประกาศหลักเกณฑ์การสนับสนุนค่าใช้จ่าย >>
              <a style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" href="/spc2024/file/download/ประกาศหลักเกณฑ์การสนับสนุนค่าใช้จ่าย.pdf"
                class="btn btn-warning" target="_blank">Download File</a>
            </li>
            <li>แนวปฏิบัติสำหรับการเข้าประกวด >>
              <a style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" href="/spc2024/file/download/แนวปฏิบัติสำหรับการเข้าประกวด.pdf"
                class="btn btn-warning" target="_blank">Download File</a>
            </li>
          </ul>
          <ul class="unlist">
            <li>ไฟล์รายงานโครงงานอิสระฉบับสมบูรณ์ ส่งได้ที่ >> <a style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" href="https://forms.gle/yvfuMJ89p9BGNP6j9" class="btn btn-warning" target="_blank">Link</a>
            </li>
            <li>การนำเสนอผลงาน ภาษาที่จะใช้ในการนำเสนอรอบสุดท้าย ท่านสามารถนำเสนอได้ทั้งภาษาไทยและภาษาอังกฤษ </li>
          </ul>
          <h5>รางวัลชนะเลิศ</h5>
          <ul class="unlist">
            <li>ถ้วยพระราชทานสมเด็จพระเจ้าพี่นางเธอ เจ้าฟ้ากัลยาณิวัฒนา กรมหลวงนราธิวาสราชนครินทร์</li>
            <li>เงินรางวัล 25,000 บาท + ประกาศนียบัตร</li>
            <li>รางวัลรองชนะเลิศอันดับ 1 : เงินรางวัล 15,000 บาท + ประกาศนียบัตร</li>
            <li>รางวัลรองชนะเลิศอันดับ 2 : เงินรางวัล 10,000 บาท + ประกาศนียบัตร</li>
            <li>รางวัลรองชนะเลิศอันดับ (2 รางวัล) : เงินรางวัล 5,000 บาท + ประกาศนียบัตร</p>
            </li>
          </ul>
          <p>หมายเหตุ: ผู้ที่ผ่านเข้ารอบสุดท้ายจะได้รับรางวัลประกาศนียบัตรทุกคน</p>
        </div>
      </div>
    </div>
    <hr>
    <div class="row" style="margin: 15px auto;">
      <h1 class="card-title centerer">ประกาศผลโครงงานที่ผ่านรอบคัดเลือก รอบแรก</h1>
      <div class="col-12">
        <div class="card border-0" style="color: #494949;">
        <div class="table-responsive">
          <table class="table table-success table-striped table-hover mt-3">
            <thead style="text-align: center;">
              <tr>
                <td style="width:10%">
                  <h4>ลำดับ</h4>
                </td>
                <td style="width:25%">
                  <h4>ชื่อ - นามสกุล</h4>
                </td>
                <td>
                  <h4>มหาวิทยาลัยที่สังกัด</h4>
                </td>
                <td>
                  <h4>ชื่อโครงงาน ภาษาไทย/ภาษาอังกฤษ</h4>
                </td>
              </tr>
            </thead>
            <tbody class="fs-18">
              <tr>
                <td style="text-align: center;">1</td>
                <td style="text-align: center;">Parita Jumpaburee</td>
                <td style="text-align: center;">Khon Kaen University</td>
                <td>Exploring the Effects of Different External Pressures on Sodium Deposition Behavior in Sodium
                  Anode-Free Batteries through an In-Depth Investigation</td>
              </tr>
              <tr>
                <td style="text-align: center;">2</td>
                <td style="text-align: center;">กิตติพงศ์วิระ พรสวรรค์</td>
                <td style="text-align: center;">มหาวิทยาลัย ธรรมศาสตร์</td>
                <td>เอนโทรปีแบบพัวพันและเส้นของเพจ สำหรับหลุมดำที่มีสมมาตรทรงกลมในทฤษฎีสนามโน้มถ่วงแบบปรับปรุง (The
                  Entanglement Entropy and Page Curves of The Spherically Symmetric Black Hole in Modified Gravity.)
                </td>
              </tr>
              <tr>
                <td style="text-align: center;">3</td>
                <td style="text-align: center;">ทศนัท รมโพธิ์เงิน</td>
                <td style="text-align: center;">มหิดล</td>
                <td>การพัฒนาชุดเครื่องมือสาธิตการกระจายกุญแจรหัสทางควอนตัมที่ใช้หลักการโพลาไรเซชันของแสง/Development of
                  polarizationbased demonstration kits for Quantum key distribution</td>
              </tr>
              <tr>
                <td style="text-align: center;">4</td>
                <td style="text-align: center;">พรพิพัฒน์เพ็ชรพงษ์ </td>
                <td style="text-align: center;">มหาวิทยาลัยราชภัฏพิบูลสงครามร</td>
                <td>การเพิ่มประสิทธิภาพคุณสมบัติไฮบริดเพียโซ/ไทรโบอิเล็กทริกบนฟิล์มคอมโพสิต BaTiO3/PDMS
                  ที่ปรับปรุงด้วยการเจือรีดิวซ์กราฟีนออกไซด์/Enhanced performance of hybrid piezo/triboelectric using
                  BaTiO3/polymer composite film modified with rGO </td>
              </tr>
              <tr>
                <td style="text-align: center;">5</td>
                <td style="text-align: center;">พลเศรษฐ ฉึ่น ธีรศาสตร</td>
                <td style="text-align: center;">มหาวิทยาลัยขอนแก่น</td>
                <td>การเพิ่มประสิทธิภาพการสังเคราะห์ด้วยแสงในต้นข้าวด้วย คาร์บอนควอนตัมดอท</td>
              </tr>
              <tr>
                <td style="text-align: center;">6</td>
                <td style="text-align: center;">มนัสนันท์ ธนะสาร</td>
                <td style="text-align: center;">มหาวิทยาลัยเชียงใหม</td>
                <td>การสังเกตการณ์แสงสว่างวาบของ SN2023wrk สำหรับการคัดว่าที่คลื่น ความโน้มถ่วง / Optical Transient
                  Observation of SN2023wrk for Gravitational Wave Candidate Exclusion</td>
              </tr>
              <tr>
                <td style="text-align: center;">7</td>
                <td style="text-align: center;">มรรษธร พรหมจันทร์</td>
                <td style="text-align: center;">มหาวิทยาลัยขอนแก่น</td>
                <td>ปลดล็อกศักยภาพในการชาร์จเร็วโดยการศึกษาผลกระทบของความหนาแน่นของกระแสไฟฟ้าต่อสัณฐานวิทยาของ
                  แบตเตอรี่ชนิดโลหะโซเดียม/Unlocking the Potential for Fast Charging through Exploration of the
                  Influence of Critical Current Density on the Morphology of Sodium Metal Batteries</td>
              </tr>
              <tr>
                <td style="text-align: center;">8</td>
                <td style="text-align: center;">มัชฌิมา วังพิมล</td>
                <td style="text-align: center;">มหาวิทยาลัยขอนแก่น</td>
                <td>
                  การพัฒนาสื่อการเรียนการสอนโดยใช้แบบจําลองการตรวจจับดาวเคราะห์นอกระบบสุริยะด้วยวิธีการเคลื่อนที่ผ่านหน้า/The
                  development of teaching and learning apparatus based on the simulation of exoplanet detection by the
                  transit method </td>
              </tr>
              <tr>
                <td style="text-align: center;">9</td>
                <td style="text-align: center;">วรดร โสภณอัมพรสุชา</td>
                <td style="text-align: center;">มหาวิทยาลัยมหิดล</td>
                <td>Study of the light production and transmission to observe the efficiency of the range counter
                  particle detector for COMET phase-alpha collaboration</td>
              </tr>
              <tr>
                <td style="text-align: center;">10</td>
                <td style="text-align: center;">วรพล เจนพาณิชย์วงศ์</td>
                <td style="text-align: center;">มหาวิทยาลัยมหิดล</td>
                <td>พลศาสตร์ของสปินของคิวบิทแบบโมเลกุลที่อุณหภูมิห้อง ด้วยการคำนวณแบบ ab initio</td>
              </tr>
              <tr>
                <td style="text-align: center;">11</td>
                <td style="text-align: center;">ศศิกานต์ สุริยศ</td>
                <td style="text-align: center;">มหาวิทยาลัยเชียงใหม</td>
                <td>การออกแบบและประมาณค่าสมรรถนะเบื้องต้นของกล้องโทรทรรศน์ 0.8 เมตร แบบริชชี่ เครเทียน
                  สำหรับหอดูดาวภูมิภาค สถาบันวิจัยดาราศาสตร์แห่งชาติ / Preliminary design and performance estimation of
                  the 0.8 m Ritchey–Chrétien telescope for NARIT's public regional observatory.</td>
              </tr>
              <tr>
                <td style="text-align: center;">12</td>
                <td style="text-align: center;">สุภกิจ ชินภักดี</td>
                <td style="text-align: center;">มหาวิทยาลัยเกษตรศาสตร์</td>
                <td>ลูกบอลเตือนภัย: การตรวจจับก๊าซอันตรายผ่านการโยน/ Safety Alert Smart ball: Detecting Hazardous Gas
                  through Tossing </td>
              </tr>
            </tbody>
          </table>
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