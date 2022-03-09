<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="data/style.css" type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.9.0/css/ol.css" type="text/css">
  <style>
    .map {
      height: 875px;
      width: 100%;
    }
  </style>
  <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.9.0/build/ol.js"></script>
  <title>Project GIS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <h2>My Map</h2>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <!-- <img src="assets/img/brand/blue.png" class="navbar-brand-img" alt="..."> -->
          <h3>PERIKANAN KALIMANTAN</h3>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">All</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Laut.php">
                <!-- <i class="ni ni-wave text-orange"></i> -->
                <i> <img src="icon/sea.png" alt=""></i>
                <span class="nav-link-text">Laut</span>
              </a>
            </li>
            <!-- <div class="dropdown">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Laut
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Link 1</a>
                <a class="dropdown-item" href="#">Link 2</a>
                <a class="dropdown-item" href="#">Link 3</a>
              </div>
            </div> -->

            <li class="nav-item">
              <a class="nav-link" href="Danau.php">
                <!-- <i class="ni ni-pin-3 text-primary"></i> -->
                <i> <img src="icon/lake.png" alt=""></i>
                <span class="nav-link-text">Danau</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Sungai.php">
                <!-- <i class="ni ni-single-02 text-yellow"></i> -->
                <i> <img src="icon/river.png" alt=""></i>
                <span class="nav-link-text">Sungai</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Waduk.php">
                <!-- <i class="ni ni-bullet-list-67 text-default"></i> -->
                <i> <img src="icon/dam.png" alt=""></i>
                <span class="nav-link-text">Waduk</span>
              </a>
            </li>

            <!-- <li class="nav-item">
              <a class="nav-link" href="examples/login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Login</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade</span>
              </a>
            </li> -->
          </ul>

        </div>
      </div>
    </div>
  </nav>