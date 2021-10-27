<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
    if(isset($_POST['editProfil'])){
        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');
            // tampung nilai yang ada di from ke variabel
            // sesuaikan variabel name yang ada di registerPage.php disetiap input
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];
            $no_telp = $_POST['no_telp'];
            $username = $_POST['username'];
            
            // Melakukan insert ke databse dengan query dibawah ini
            $query = mysqli_query($con,
            "UPDATE users 
            SET nama='$nama', email='$email', alamat='$alamat', no_telp='$no_telp', username='$username'  
            WHERE id='$id'");
             // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
            if($query){
                echo
                '<script>
                alert("Berhasil Edit Profil Akun!"); window.location = "../page/profilPage.php"
                </script>';
            }else{
                echo
                '<script>
                alert("Create Data Failed");
                </script>';
                }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>

