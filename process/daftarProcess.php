<?php
    include('../db.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/OAuth.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/POP3.php';
    require '../PHPMailer/src/SMTP.php';

    $username = $_POST['username']; 
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    $nama = $_POST['nama']; 
    $email = $_POST['email']; 
    $alamat = $_POST['alamat']; 
    $no_telp = $_POST['no_telp'];
    $code = md5($email.date('Y-m-d')); 

    
    $sql = "SELECT * FROM users where email='$email'";
    $query = mysqli_query($con,$sql);
    if(mysqli_num_rows($query) > 0){
        echo '<sript>alert("Email Sudah Terdaftar");</script>';
    }else{
        $sql = "INSERT INTO users (nama, username, password, email, alamat, no_telp, verif_code)
        VALUES('$nama', '$username', '$password', '$email', '$alamat', '$no_telp', '$code')";
        $query = mysqli_query($con, $sql);
        
    }        
    /**
     * This example shows settings to use when sending via Google's Gmail servers.
     * This uses traditional id & password authentication - look at the gmail_xoauth.phps
     * example to see how to use XOAUTH2.
     * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
     */

    //Import PHPMailer classes into the global namespace


    //Create a new PHPMailer instance
    $mail = new PHPMailer();

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    //SMTP::DEBUG_OFF = off (for production use)
    //SMTP::DEBUG_CLIENT = client messages
    //SMTP::DEBUG_SERVER = client and server messages
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    //Use `$mail->Host = gethostbyname('smtp.gmail.com');`
    //if your network does not support SMTP over IPv6,
    //though this may cause issues with TLS

    //Set the SMTP port number:
    // - 465 for SMTP with implicit TLS, a.k.a. RFC8314 SMTPS or
    // - 587 for SMTP+STARTTLS
    $mail->Port = 465;

    //Set the encryption mechanism to use:
    // - SMTPS (implicit TLS on port 465) or
    // - STARTTLS (explicit TLS on port 587)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = 'sbt.holy@gmail.com';

    //Password to use for SMTP authentication
    $mail->Password = 'EmailPerangin123';

    //Set who the message is to be sent from
    //Note that with gmail you can only use your account address (same as `Username`)
    //or predefined aliases that you have configured within your account.
    //Do not use user-submitted addresses in here
    $mail->setFrom('no-reply@resto.com', 'Customer Service');

    //Set an alternative reply-to address
    //This is a good place to put user-submitted addresses
    // $mail->addReplyTo('replyto@example.com', 'First Last');

    //Set who the message is to be sent to
    $mail->addAddress($email, $name);

    //Set the subject line
    $mail->Subject = 'Verifikasi Akun - Resto';

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $body = "Halo, " .$nama. "<br> Klik link dibawah ini untuk verifikasi akun terlebih dahulu : <br> http://localhost:8080/ProjectUTS_Web/process/confirmEmail.php?code=".$code;
    $mail->Body = $body;
    //Replace the plain text body with one created manually
    $mail->AltBody = 'Verification Account';

    //Attach an image file
    //$mail->addAttachment('images/phpmailer_mini.png');

    //send the message, check for errors
    if (!$mail->send()) {
        echo 'Mailer Error: '. $mail->ErrorInfo;
    } else {
        echo '<script>alert("Register Sukses, Silahkan verifikasi email");</script>';
        echo'<script>window.location= "../index.php"</script>';
        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }



    //Section 2: IMAP
    //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
    //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
    //You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
    //be useful if you are trying to get this working on a non-Gmail IMAP server.

?>