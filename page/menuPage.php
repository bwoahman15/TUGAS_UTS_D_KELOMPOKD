<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Menu</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">

    

    <!-- Bootstrap core CSS -->
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

        
        <!-- Custom styles for this template -->
        <link href="../css/menu.css" rel="stylesheet">
    </head>

  <body>
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
                        <a class="nav-link" href="dashboardPage.php">About</a>
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
<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Menu</h1>
        <p class="lead text-muted">Banyak pilihan makanan dan minuman dengan harga terjangkau yang bisa kamu pilih.</p>
        <p class="nav-item active">
          <a href="makananPage.php" class="btn btn-secondary my-2">Makanan</a>
          <a href="minumanPage.php" class="btn btn-secondary my-2">Minuman</a>
        </p>
      </div>
    </div>
  </section>



    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
</html>
