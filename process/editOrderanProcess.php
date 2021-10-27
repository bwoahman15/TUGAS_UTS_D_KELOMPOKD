<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
    if(isset($_POST['editOrderan'])){
        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');
            // tampung nilai yang ada di from ke variabel
            // sesuaikan variabel name yang ada di registerPage.php disetiap input
            $id = $_POST['id'];
            $makanan = $_POST['makanan'];
            $minuman = $_POST['minuman'];
            
            // Melakukan insert ke databse dengan query dibawah ini
            $query = mysqli_query($con,
            "UPDATE pesanan 
            SET makanan='$makanan', minuman='$minuman' 
            WHERE id='$id'");
             // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
            if($query){
                echo
                '<script>
                alert("Berhasil Edit Pesanan!"); window.location = "../page/pesananPage.php"
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

