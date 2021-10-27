<!doctype html> 
<html lang="en"> 
  <head> 
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <!-- Bootstrap CSS --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">     <link href="../style.css" rel="stylesheet"> 
 
    <title>Edit Profil Akun</title> 
  </head> 
  <body> 
  <?php
      include('../db.php'); 
      $id = $_GET['id'];
      $query = "select * from users where id='$id'";
      $result = mysqli_query($con, $query);
      $data = mysqli_fetch_assoc($result);
    ?>
 
    <div class="bg bg-light text-dark"> 
        <div class="container min-vh-100 mt-5 d-flex align-items-center justify-content-center"> 
          <div class="card text-dark bg-light ma-5 shadow " style="min-width: 25rem;"> 
            <div class="card-header fw-bold">Edit Profile</div> 
            <div class="card-body"> 
              <form action="../process/editProfilProcess.php" method="post"> 
              <input type="hidden" name="id" value="<?= $data['id'];?>">
                  <div class="mb-3"> 
                    <label for="exampleInputEmail1" class="form-label">Nama</label> 
                    <input class="form-control" id="nama" name="nama" aria-describedby="emailHelp" value="<?= $data['nama'];?>"> 
                  </div> 
                  <div class="mb-3"> 
                    <label for="exampleInputEmail1" class="form-label">Email</label> 
                    <input class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?= $data['email'];?>"> 
                  </div>
                  <div class="mb-3"> 
                    <label for="exampleInputEmail1" class="form-label">Alamat</label> 
                    <input class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" value="<?= $data['alamat'];?>"> 
                  </div>
                  <div class="mb-3"> 
                    <label for="exampleInputEmail1" class="form-label">Telepon</label> 
                    <input class="form-control" id="no_telp" name="no_telp" aria-describedby="emailHelp" value="<?= $data['no_telp'];?>"> 
                  </div>
                  <div class="mb-3"> 
                    <label for="exampleInputEmail1" class="form-label">Username</label> 
                    <input class="form-control" id="username" name="username" aria-describedby="emailHelp" value="<?= $data['username'];?>"> 
                  </div> 
                
                  <div class="d-grid gap-2"> 
                    <button type="submit" class="btn btn-primary" name="editProfil">Edit Profile</button> 
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