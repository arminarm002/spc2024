<div align="center" class="img-fluid menu-bar">
  <a class="nav-menu" aria-current="page" href="/index.php">Home</a> |
  <a class="nav-menu" aria-current="page" href="/pages/date.php">Important Dates</a> |
  <a class="nav-menu" aria-current="page" href="/pages/program.php">Programs</a> |
  <a class="nav-menu" aria-current="page" href="/pages/talk.php">Plenary & Speakers</a> |
  <a class="nav-menu" aria-current="page" href="/pages/submissions.php">Abstract & Full paper Submissions</a> | 
  <?php if (isset($_SESSION['role'])) { ?>
    <a class="nav-menu" aria-current="page" href="/auth/profile.php">Profile</a> |
    <a class="nav-menu" aria-current="page" href="/auth/logout.php">Log out</a>
    <?php
  } else { ?>
    <a class="nav-menu" aria-current="page" href="/auth/login.php">Log in</a>
  <?php } ?>
  <br>
  <a class="nav-menu" aria-current="page" href="/pages/registration.php">Registration & Payment</a> |
  <a class="nav-menu" aria-current="page" href="/file/download/manual book.pdf" target="_blank">Presentation Submission Guide</a> | 
  <a class="nav-menu" aria-current="page" href="/pages/guildline.php">Presentation Guidelines</a> |
  <a class="nav-menu" aria-current="page" href="/pages/topic.php">Topic & Symposium</a>
  <br>
  <a class="nav-menu" aria-current="page" href="/pages/project.php">ประกวดโครงงานอิสระ</a> | 
  <a class="nav-menu" aria-current="page" href="/pages/awards.php">Awards</a> | 
  <a class="nav-menu" aria-current="page" href="/pages/board.php">Board & Committee</a> |
  <a class="nav-menu" aria-current="page" href="/pages/sponsors.php">Sponsors</a> |
  <a class="nav-menu" aria-current="page" href="/pages/accommodation.php">Accommodation & Venue</a> |
  <a class="nav-menu" aria-current="page" href="/pages/contact.php">Contact</a>
  
</div>