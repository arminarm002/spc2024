<!-- <div class="container-fluid link-container" style="background-color:#ff7a01;height:auto">
  <div class="row">
    <div class="col-md-5">
      <a class="nav-link nav-fontcolor nav-menu" aria-current="page" href="/spc2024/index.php">Home</a>
      <a class="nav-link nav-fontcolor nav-menu" aria-current="page" href="/spc2024/pages/date.php">Important Dates</a>
     
      <a class="nav-link nav-fontcolor nav-menu" aria-current="page" href="/spc2024/pages/talk.php">Plenary &
        Speakers</a>
     
      <a class="nav-link nav-fontcolor nav-menu" aria-current="page" href="/spc2024/pages/board.php">Board &
        Committee</a>
     
      <a class="nav-link nav-fontcolor nav-menu" aria-current="page" href="/spc2024/pages/submissions.php">Abstract
        Submissions</a>
      <a class="nav-link nav-fontcolor nav-menu" aria-current="page" href="/spc2024/pages/guildline.php">Presentation
        Guidelines</a>
    </div>
    <div class="col-md-2">
      <a class="navbar-brand " href="/spc2024/index.php">
        <img src="/spc2024/img/logospc.png" class="w-75">
      </a>
    </div>
    <div class="col-md-5">
      <a class="nav-link nav-fontcolor nav-menu" aria-current="page" href="/spc2024/pages/awards.php">Award</a>
      <a class="nav-link nav-fontcolor nav-menu" aria-current="page"
        href="/spc2024/pages/project.php">ประกวดโครงงานอิสระ</a>
      <a class="nav-link nav-fontcolor nav-menu" aria-current="page"
        href="/spc2024/pages/accommodation.php">Accommodation & Venue</a>
      <a class="nav-link nav-fontcolor nav-menu" aria-current="page" href="/spc2024/pages/sponsors.php">Sponsors</a>
     
      <a class="nav-link nav-fontcolor nav-menu" aria-current="page" href="/spc2024/pages/contact.php">Contact</a>
     
      <a class="nav-link nav-fontcolor nav-menu" aria-current="page" href="#">Registration & Payment</a>
    </div>
  </div>


</div> -->
<div align="center" class="img-fluid menu-bar">
  <a class="nav-menu" aria-current="page" href="/spc2024/index.php">Home</a> | 
  <a class="nav-menu" aria-current="page" href="/spc2024/pages/date.php">Important Dates</a> | 
  <a class="nav-menu" aria-current="page" href="/spc2024/pages/talk.php">Plenary & Speakers</a> | 
  <a class="nav-menu" aria-current="page" href="/spc2024/pages/board.php">Board & Committee</a><br>
  <a class="nav-menu" aria-current="page" href="/spc2024/pages/submissions.php">Abstract Submissions</a> | 
  <a class="nav-menu" aria-current="page" href="/spc2024/file/download/manual book.pdf" target="_blank">Registration Guide</a> | 
  <a class="nav-menu" aria-current="page" href="/spc2024/pages/guildline.php">Presentation Guidelines</a> | 
  <a class="nav-menu" aria-current="page" href="/spc2024/pages/awards.php">Awards</a><br>
  <a class="nav-menu" aria-current="page" href="/spc2024/pages/sponsors.php">Sponsors</a> | 
  <a class="nav-menu" aria-current="page" href="/spc2024/pages/contact.php">Contact</a> | 
  <a class="nav-menu" aria-current="page" href="/spc2024/pages/registration.php">Registration & Payment</a> | 
  <a class="nav-menu" aria-current="page" href="/spc2024/pages/accommodation.php">Accommodation & Venue</a> | 
  <?php if (isset($_SESSION['role'])) { ?>
    <a class="nav-menu" aria-current="page" href="/spc2024/auth/profile.php">Profile</a> | 
    <a class="nav-menu" aria-current="page" href="/spc2024/auth/logout.php">Log out</a>
  <?php
  } else { ?>
    <a class="nav-menu" aria-current="page" href="/spc2024/auth/login.php">Log in</a>
  <?php } ?>
</div>