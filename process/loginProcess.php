<?php 
    require ('../db.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $query = mysqli_query($con, $sql);

    if(mysqli_num_rows($query) == 0){
        echo '<script>alert("Email Tidak Ditemukan");</script>';
        echo'<script>window.location= "../index.php"</script>';
    }else{
        $user = mysqli_fetch_assoc($query);
        $id = $user['id'];
        if(password_verify($password, $user['password'])){
            if($user['is_verified']==1){
                session_start();
                $_SESSION['isLogin'] = true;
                $_SESSION['user'] = $user;

                header("location: ../page/dashboardPage.php");
            }else{
                echo '<script>alert("Verifikasi Email Terlebih Dahulu");</script>';
                echo'<script>window.location= "../index.php"</script>';
            }
        }else{
            echo '<script>alert("Password Salah");</script>';
            echo'<script>window.location= "../page/loginPage.php"</script>';
        }
    }
?> 