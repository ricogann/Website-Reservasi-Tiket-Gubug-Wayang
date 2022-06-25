<?php

    require ('connection.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require './PHPMailer-master/src/Exception.php';
    require './PHPMailer-master/src/SMTP.php';
    require './PHPMailer-master/src/PHPMailer.php';

    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];
    $code = md5($email.date('Y-m-d'));

    $sql = "SELECT * FROM accounts where email='$email'";
    $query = mysqli_query($con,$sql);
    if(mysqli_num_rows($query) > 0){
        echo '<script>alert("Email sudah terdaftar");</script>';
    }else{
        $sql = "INSERT INTO accounts (nama,email,password,telepon,alamat,code)VALUES('$nama','$email','$password','$telepon','$alamat','$code')";
        $query = mysqli_query($con,$sql);

        try{

            $mail = new PHPMailer(true);
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'gubug.wayang12@gmail.com';                     //SMTP username
            $mail->Password   = 'hzdwpcvpjcuimcrt';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
            $mail->setFrom('no-reply@yourwebsite.com', 'Your Website Services');
            $mail->addAddress($email);
            
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Account Verification - Gubug Wayang';
            $body = "Hi,<br>To verification your email, here's the link : <br> http://localhost/login_gubugwayang/confirmEmail.php?code=".$code;
            $mail->Body    = $body;
            $mail->AltBody = 'Account Verification';
    
    
            $mail->send();
            echo '<script>alert("Message Sent");</script>';
            
            }catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }


        header("location: http://localhost/login_gubugwayang/login.php");
    }

?>