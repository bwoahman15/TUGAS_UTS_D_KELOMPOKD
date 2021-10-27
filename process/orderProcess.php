<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
    if(isset($_POST['pesan'])){
        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');
            // tampung nilai yang ada di from ke variabel
            // sesuaikan variabel name yang ada di registerPage.php disetiap input
            $makanan = $_POST['makanan'];
            $minuman = $_POST['minuman'];
            // Melakukan insert ke databse dengan query dibawah ini
            $query = mysqli_query($con,
            "INSERT INTO pesanan(makanan, minuman)
            VALUES
            ('$makanan', '$minuman')")
            or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
            if($query){
                echo
                '<script>
                alert("Terima Kasih Sudah Memesan di Nama Resto"); window.location = "../page/dashboardPage.php"
                </script>';
            }else{
                echo
                '<script>
                alert("Coba Lagi");
                </script>';
                }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>