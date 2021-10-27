<!doctype html> 
<html lang="en"> 

  <head> 
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <!-- Bootstrap CSS --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">     <link href="../style.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Profil Menu</title> 
  </head> 


  <body> 
    <?php
        include '../db.php'
    ?>
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
 
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 30px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
    <h4 >Profil</h4>
    <hr>
    <table class="table ">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Alamat</th>
            <th scope="col">Telepon</th>
            <th scope="col">Username</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $query = mysqli_query($con, "SELECT * FROM users") or die(mysqli_error($con));

        if (mysqli_num_rows($query) == 0) {
            echo '<tr> <td colspan="7" style="text-align:center"> Tidak ada data </td> </tr>';
        }else{
            $no = 1;
            while($data = mysqli_fetch_assoc($query)){
            echo'
                <tr>
                <th scope="row">'.$no.'</th>
                    <td>'.$data['nama'].'</td>
                    <td>'.$data['email'].'</td>
                    <td>'.$data['alamat'].'</td>
                    <td>'.$data['no_telp'].'</td>
                    <td>'.$data['username'].'</td>
                    <td>
                        <a href="../page/editProfilPage.php?id='.$data['id'].'">
                        <i style="color: green" class="fa fa-edit"></i></a>
                    </td>
                </tr>';
                $no++;
            }
        }
    ?>
    </tbody>
    </table>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
  </body> 
</html> 

