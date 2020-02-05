<nav class="navbar navbar-expand-lg navbar-dark bg-red" style="position: fixed;
width: 100vw;">
  <button class="navbar-toggler ml-auto mr-3 navbar-custom" type="button" data-toggle="collapse" data-target="#navbarServices" aria-controls="navbarServices" aria-expanded="false" aria-label="Toggle navigation">Services Menu
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarServices"> 
  <?php
    $text=$_SERVER['PHP_SELF'];
                              // !!!!! Modify before update!!!!!!
    $rest = substr("$text", 19);
    switch ($rest) {
    case 'commercial-roofing.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="commercial-roofing.php">Commercial Roofing</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="chimneys.php">Chimneys</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="flat-roofing.php">Flat Roofing</a>
            </li>
            <li class="nav-item inactive">
             <a class="nav-link" href="guttering.php">Guttering</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="new-roofs.php">New Roofs</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="repairs.php">Repairs</a>
            </li>
          </ul>';
          break;
    case 'chimneys.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item inactive">
              <a class="nav-link" href="commercial-roofing.php">Commercial Roofing</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="chimneys.php">Chimneys</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="flat-roofing.php">Flat Roofing</a>
            </li>
            <li class="nav-item inactive">
             <a class="nav-link" href="guttering.php">Guttering</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="new-roofs.php">New Roofs</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="repairs.php">Repairs</a>
            </li>
          </ul>';
          break;
    case 'flat-roofing.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item inactive">
              <a class="nav-link" href="commercial-roofing.php">Commercial Roofing</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="chimneys.php">Chimneys</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="flat-roofing.php">Flat Roofing</a>
            </li>
            <li class="nav-item inactive">
             <a class="nav-link" href="guttering.php">Guttering</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="new-roofs.php">New Roofs</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="repairs.php">Repairs</a>
            </li>
          </ul>';
          break;
    case 'guttering.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item inactive">
              <a class="nav-link" href="commercial-roofing.php">Commercial Roofing</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="chimneys.php">Chimneys</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="flat-roofing.php">Flat Roofing</a>
            </li>
            <li class="nav-item active">
             <a class="nav-link" href="guttering.php">Guttering</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="new-roofs.php">New Roofs</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="repairs.php">Repairs</a>
            </li>
          </ul>';
          break;
    case 'new-roofs.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item inactive">
              <a class="nav-link" href="commercial-roofing.php">Commercial Roofing</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="chimneys.php">Chimneys</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="flat-roofing.php">Flat Roofing</a>
            </li>
            <li class="nav-item inactive">
             <a class="nav-link" href="guttering.php">Guttering</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="new-roofs.php">New Roofs</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="repairs.php">Repairs</a>
            </li>
          </ul>';
          break;
    case 'repairs.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item inactive">
              <a class="nav-link" href="commercial-roofing.php">Commercial Roofing</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="chimneys.php">Chimneys</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="flat-roofing.php">Flat Roofing</a>
            </li>
            <li class="nav-item inactive">
             <a class="nav-link" href="guttering.php">Guttering</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="new-roofs.php">New Roofs</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="repairs.php">Repairs</a>
            </li>
          </ul>';
          break;
    default:
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item inactive">
              <a class="nav-link" href="commercial-roofing.php">Commercial Roofing</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="chimneys.php">Chimneys</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="flat-roofing.php">Flat Roofing</a>
            </li>
            <li class="nav-item inactive">
             <a class="nav-link" href="guttering.php">Guttering</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="new-roofs.php">New Roofs</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="repairs.php">Repairs</a>
            </li>
          </ul>';
          break;
}   
?>
  </div>
</nav>