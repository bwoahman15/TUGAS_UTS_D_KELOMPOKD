<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Home</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">

    
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
          .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
          }

          @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
          }
        </style>

        <link href="../css/carousel.css" rel="stylesheet">
</head>

    
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="dashboardPage.php">Tores Resto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="aboutPage.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menuPage.php">Menu</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="orderPage.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Order
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="orderPage.php">Pesan Sekarang</a></li>
                          <li><a class="dropdown-item" href="pesananPage.php">Lihat Pesanan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item active">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="30" height="20" src="../img/profile.png"></img>
                    </li>
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="profilPage.php"> Edit profile</a>
                          <a class="dropdown-item" href="../process/logoutProcess.php">Logout</a>
                        </div>
                      </li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>  

      <div class="container marketing">

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Tores Resto</h2>
            <p class="lead">Lokasi di Jl. Babarsari No.41, Tambak Bayan, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta</p>
            <p class="lead">Kode Pos : 55281</p>
            <a href="mapsPage.php" class="btn btn-lg btn-secondary fw-bold border-white bg-black">Maps</a>
          </div>
          <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="../img/restoran.jpg"  preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title></img>

          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading"><span class="text-muted">Menu</span></h2>
            <p class="lead">Resto menyediakan berbagai menu yang pastinya enak dan sehat untuk dikonsumsi</p>
            <a href="menuPage.php" class="btn btn-lg btn-secondary fw-bold border-white bg-black">Lihat Menu</a>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="../img/menu.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title></title></img>

          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Pesan Makanan</h2>
            <p class="lead">Kamu juga bisa memesan makanan langsung dari website, dengan klik tombol dibawah dan pesananmu akan segera sampai</p>
            <a href="orderPage.php" class="btn btn-lg btn-secondary fw-bold border-white bg-black">Pesan Sekarang</a>
          </div>
          <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="../img/order.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

          </div>
        </div>

        <hr class="featurette-divider">

      </div>


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </body>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</main>
</html>
