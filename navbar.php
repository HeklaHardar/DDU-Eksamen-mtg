<?php // require 'logud.php';?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">MTG-Stats</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="stats.php">Stats<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Decklister
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Decklister.php">Decklister</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="nydeck.php">Ny deckliste</a>
        </div>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Turneringer
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="turneringsliste.php">Turneringer</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="nyturnering.php">Ny turnering</a>
        </div>
      </li>


    </ul>
  <?php if (isset($_SESSION['logincheck'])) { ?>
    <span class="navbar-text">
        <a class="nav-link" href="logud.php" onclick="">Log ud</a>
  </span>
<?php }else { ?>
  <span class="navbar-text">
      <a class="nav-link" href="index.php">Log ind</a>
</span>
<?php
} ?>


  </div>
</nav>
