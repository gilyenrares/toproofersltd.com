<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-red">
  <a class="navbar-brand bg-yellow card" href="index.php"><img src="images/logo.png" width="120" height="90" class="d-inline-block align-center badge" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02"> 
  <?php
  session_start();
    $text=$_SERVER['PHP_SELF'];
    $rest = substr("$text", 1);
    switch ($rest) {
    case 'index.php':
      echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Materia</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="romana.php">Limba si Literarura Romana</a>
                <a class="dropdown-item" href="istorie.php">Istorie</a>
            </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="la-cafea.php">La Cafea</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="despre-noi.php">Despre noi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>';
    break;
    case 'romana.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Acasa</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Materia</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item  active" href="romana.php">Limba si Literarura Romana</a>
              <a class="dropdown-item" href="istorie.php">Istorie</a>
            </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="la-cafea.php">La Cafea</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="despre-noi.php">Despre noi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>';
    break;
    case 'istorie.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Acasa</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle  active" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Materia</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="romana.php">Limba si Literarura Romana</a>
                <a class="dropdown-item active" href="istorie.php">Istorie</a>
            </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="la-cafea.php">La Cafea</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="despre-noi.php">Despre noi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>';
    break;
    case 'la-cafea.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Acasa</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Materia</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="romana.php">Limba si Literarura Romana</a>
                <a class="dropdown-item" href="istorie.php">Istorie</a>
            </div>
            </li>
            <li class="nav-item  active">
              <a class="nav-link" href="la-cafea.php">La Cafea</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="despre-noi.php">Despre noi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>';
    break;
    case 'shop.php':
      echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Acasa</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Materia</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="romana.php">Limba si Literarura Romana</a>
                <a class="dropdown-item" href="istorie.php">Istorie</a>
            </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="la-cafea.php">La Cafea</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="despre-noi.php">Despre noi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>';
    break;
    case 'despre-noi.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Acasa</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Materia</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="romana.php">Limba si Literarura Romana</a>
                <a class="dropdown-item" href="istorie.php">Istorie</a>
            </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="la-cafea.php">La Cafea</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="despre-noi.php">Despre noi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>';
    break;
    case 'contact.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Acasa</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Materia</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="romana.php">Limba si Literarura Romana</a>
                <a class="dropdown-item" href="istorie.php">Istorie</a>
            </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="la-cafea.php">La Cafea</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="despre-noi.php">Despre noi</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>';
    break;
    default:
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item inactive">
          <a class="nav-link" href="our-work.php">Our Work</a>
        </li>
        <li class="nav-item inactive">
          <a class="nav-link" href="testimonials.php">Testimonials</a>
        </li>
        <li class="nav-item inactive dropdown">
          <a class="nav-link dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Roofing Services</a>
        <div class="dropdown-menu bg-red" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="commercial-roofing.php">Commercial Roofing</a>
          <a class="dropdown-item" href="chimneys.php">Chimneys</a>
          <a class="dropdown-item" href="flat-roofing.php">Flat Roofing</a>
          <a class="dropdown-item" href="guttering.php">Guttering</a>
          <a class="dropdown-item" href="new-roofs.php">New Roofs</a>
          <a class="dropdown-item" href="repairs.php">Repairs</a>
        </div>
        </li>
        <li class="nav-item inactive">
          <a class="nav-link" href="serviced-area.php">Serviced Area</a>
        </li>
        <li class="nav-item inactive">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item inactive">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>';
break;
} 
?>
  </div>
</nav>