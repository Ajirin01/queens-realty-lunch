<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php"><img src="img/queens-logo.jpg" style="width: 225px; height: 58px" alt=""></span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link <?php echo ($current_page === 'home') ? 'active' : ''; ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($current_page === 'about') ? 'active' : ''; ?>" href="about.php">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($current_page === 'properties') ? 'active' : ''; ?>" href="properties.php">Properties</a>
        </li>
        <li class="nav-item">
            <!-- Add your third link here with the appropriate condition -->
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($current_page === 'contact') ? 'active' : ''; ?>" href="contact.php">Contact</a>
        </li>
    </ul>

      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>