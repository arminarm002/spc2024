<div align="center" class="img-fluid menu-bar">
  <a class="nav-menu" aria-current="page" href="/spc2024/index.php">Home</a> |
  <a class="nav-menu" aria-current="page" href="/spc2024/pages/date.php">Important Dates</a> |
  <a class="nav-menu" aria-current="page" href="/spc2024/pages/talk.php">Plenary & Speakers</a> |
  <a class="nav-menu" aria-current="page" href="/spc2024/pages/submissions.php">Abstract & Full paper Submissions</a> | 
  <?php if (isset($_SESSION['role'])) { ?>
    <a class="nav-menu" aria-current="page" href="/spc2024/auth/profile.php">Profile</a> |
    <a class="nav-menu" aria-current="page" href="/spc2024/auth/logout.php">Log out</a>
    <?php
  } else { ?>
    <a class="nav-menu" aria-current="page" href="/spc2024/auth/login.php">Log in</a>
  <?php } ?>
  <br>
  <a class="nav-menu" aria-current="page" href="/spc2024/pages/registration.php">Registration & Payment</a> |
  <a class="nav-menu" aria-current="page" href="/spc2024/file/download/manual book.pdf" target="_blank">Presentation Submission Guide</a> | 
  <a class="nav-menu" aria-current="page" href="/spc2024/pages/guildline.php">Presentation Guidelines</a> |
  <a class="nav-menu" aria-current="page" href="/spc2024/pages/topic.php">Topic & Symposium</a>
  <br>
  <a class="nav-menu" aria-current="page" href="/spc2024/pages/project.php">ประกวดโครงงานอิสระ</a> | 
  <a class="nav-menu" aria-current="page" href="/spc2024/pages/awards.php">Awards</a> | 
  <a class="nav-menu" aria-current="page" href="/spc2024/pages/board.php">Board & Committee</a> |
  <a class="nav-menu" aria-current="page" href="/spc2024/pages/sponsors.php">Sponsors</a> |
  <a class="nav-menu" aria-current="page" href="/spc2024/pages/accommodation.php">Accommodation & Venue</a> |
  <a class="nav-menu" aria-current="page" href="/spc2024/pages/contact.php">Contact</a>
  
</div>