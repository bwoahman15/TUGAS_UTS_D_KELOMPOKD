<!doctype html> 
<html lang="en"> 
  <head> 
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <!-- Bootstrap CSS --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">     <link href="../style.css" rel="stylesheet"> 
 
    <title>Order Menu</title> 
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
 
    <div class="bg bg-light text-dark"> 
        <div class="container min-vh-100 mt-5 d-flex align-items-center justify-content-center"> 
          <div class="card text-dark bg-light ma-5 shadow " style="min-width: 25rem;"> 
            <div class="card-header fw-bold">Order</div> 
            <div class="card-body"> 
              <form action="../process/orderProcess.php" method="post"> 
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Makanan</label> 
                  <select class="form-select" aria-label="Default select example" name="makanan" id="makanan" value="<?= $data['makanan'];?>"> 
                    <option value=""></option> 
                    <option value="Ayam Goreng Sambal Matah">Ayam Goreng Sambal Matah</option> 
                    <option value="Ayam Bakar">Ayam Bakar</option> 
                    <option value="Rendang">Rendang</option> 
                  </select> 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Minuman</label> 
                  <select class="form-select" aria-label="Default select example" name="minuman" id="minuman" value="<?= $data['minuman'];?>"> 
                    <option value=""></option> 
                    <option value="Jus Jeruk">Jus Jeruk</option> 
                    <option value="Teh Manis">Es Teh Manis</option> 
                    <option value="Teh Tawar">Teh Tawar</option> 
                  </select> 
                </div>
               
                <div class="d-grid gap-2"> 
                  <button type="submit" class="btn btn-primary" name="pesan">Pesan</button> 
                </div> 
              </form>  
            </div> 
          </div> 
        </div> 
    </div> 
 
    <!-- Option 1: Bootstrap Bundle with Popper --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
  </body> 
</html> 