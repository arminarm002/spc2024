<section>
  <nav class="navbar navbar-expand-lg navbar-dark text-white" style="background-color:#ff7a01;">
    <div class="container-fluid">
      <a class="navbar-brand " href="/index.php">
        <img src="/img/logospc.png" class="w-50" style="max-width: 250px;margin-left: 50px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse fs-20" id="navbarSupportedContent">
        <ul class="hoverul navbar-nav me-auto mb-2 mb-lg-0 menunav">
          <li class="nav-item">
            <a class="nav-link nav-fontcolor" aria-current="page" href="/index.php" style="color: #fff;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-fontcolor " aria-current="page" href="/pages/date.php" style="color: #fff;">Important Dates</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-fontcolor" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false" style="color: #fff;">
              Personnel
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/pages/talk.php">Plenary & Speakers</a></li>
              <li><a class="dropdown-item" href="/pages/board.php">Board & Committee</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-fontcolor" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false" style="color: #fff;">
              Submission
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/pages/submissions.php">Abstract Submissions</a></li>
              <li><a class="dropdown-item" href="/pages/guildline.php">Presentation Guidelines & Award</a></li>
              <li><a class="dropdown-item" href="/pages/project.php">ประกวดโครงงานอิสระ</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-fontcolor" aria-current="page" href="/pages/awards.php" style="color: #fff;">Awards</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-fontcolor" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false" style="color: #fff;">
              About Us
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/pages/accommodation.php">Accommodation & Venue</a></li>
              <li><a class="dropdown-item" href="/pages/sponsors.php">Sponsors</a></li>
              <li><a class="dropdown-item" href="/pages/contact.php">Contact</a></li>
            </ul>
          </li>
          <?php if (isset($_SESSION['role'])) {
            if ($_SESSION['role']) { ?>
              <li class="nav-item">
                <a class="nav-link nav-fontcolor" aria-current="page" href="/auth/profile.php" style="color: #fff;">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-fontcolor" aria-current="page" href="/auth/logout.php" style="color: #fff;">Log out</a>
              </li>
            <?php }
          } else { ?>
            <li class="nav-item">
              <a class="nav-link nav-fontcolor" aria-current="page" href="/auth/login.php" style="color: #fff;">Log in</a>
            </li>
            <?php
          } ?>
        </ul>
      </div>
    </div>
  </nav>
</section>