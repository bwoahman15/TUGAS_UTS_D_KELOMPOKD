<!doctype html> 
<html lang="en"> 
  <head> 
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <!-- Bootstrap CSS --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">     <link href="../style.css" rel="stylesheet"> 
 
    <title>Daftar Akun</title> 
  </head> 
  <body> 
    <nav class="navbar navbar-dark bg-dark fixed-top"> 
        <div class="container"> 
            <a class="navbar-brand fw-bold" href="../index.php">Tores Resto</a> 
        </div> 
    </nav> 
 
    <div class="bg bg-light text-dark"> 
        <div class="container min-vh-100 mt-5 d-flex align-items-center justify-content-center"> 
          <div class="card text-dark bg-light ma-5 shadow " style="min-width: 25rem;"> 
            <div class="card-header fw-bold">Daftar</div> 
            <div class="card-body"> 
              <form action="../process/daftarProcess.php" method="post"> 
                  <div class="mb-3"> 
                    <label for="exampleInputEmail1" class="form-label">Nama</label> 
                    <input class="form-control" id="nama" name="nama" aria-describedby="emailHelp"> 
                  </div> 
                  <div class="mb-3"> 
                    <label for="exampleInputEmail1" class="form-label">Email</label> 
                    <input class="form-control" id="email" name="email" aria-describedby="emailHelp"> 
                  </div>
                  <div class="mb-3"> 
                    <label for="exampleInputEmail1" class="form-label">Alamat</label> 
                    <input class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp"> 
                  </div>
                  <div class="mb-3"> 
                    <label for="exampleInputEmail1" class="form-label">Telepon</label> 
                    <input class="form-control" id="no_telp" name="no_telp" aria-describedby="emailHelp"> 
                  </div>
                  <div class="mb-3"> 
                    <label for="exampleInputEmail1" class="form-label">Username</label> 
                    <input class="form-control" id="username" name="username" aria-describedby="emailHelp"> 
                  </div> 
                  <div class="mb-3"> 
                    <label for="exampleInputPassword1" class="form-label">Password</label> 
                    <input type="password" class="form-control" id="password" name="password"> 
                  </div> 
                
                  <div class="d-grid gap-2"> 
                    <button type="submit" class="btn btn-primary" name="daftar">Daftar</button> 
                  </div> 
                </form>
              <p class="mt-2 mb-0">Sudah punya akun ? <a href="./loginPage.php" class="text-primary">Login Disini!</a></p> 
            </div> 
          </div> 
        </div> 
    </div> 
 
    <!-- Option 1: Bootstrap Bundle with Popper --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
  </body> 
</html> 