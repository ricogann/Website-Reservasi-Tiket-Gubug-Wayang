<?php
require('config.php');
require ('connection.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/SMTP.php';
require './PHPMailer-master/src/PHPMailer.php';

session_start();

if(isset($_SESSION['isLogin'])){
    $_SESSION['user'];
}else{
    echo"Login dulu gan!";
}

$id_fk = $_SESSION['user']['id'];

$_SESSION['tiket'];
$total_harga =  $_SESSION['tiket']['total_harga'];
$no_transaksi = $_SESSION['tiket']['no_transaksi'];
$nama = $_SESSION['tiket']['nama'];
$date = $_SESSION['tiket']['date_order'];
$email = $_SESSION['tiket']['email'];
$umum = $_SESSION['tiket']['dewasa_umum_mahasiswa'];
$siswa = $_SESSION['tiket']['siswa_pelajar'];
$mancanegara = $_SESSION['tiket']['wisatawan_mancanegara'];
$harga = $_SESSION['tiket']['total_harga'];


$sql = "SELECT * FROM orders where no_transaksi = '$no_transaksi'";
$query = mysqli_query($con,$sql);
if(mysqli_num_rows($query) > 0){

  $user = mysqli_fetch_assoc($query);
  $sql = "UPDATE orders set is_verified=1 where no_transaksi=$no_transaksi";
  $query = mysqli_query($con,$sql);
  if($query){
    header("location: http://localhost/login_gubugwayang/prints.php");
  }else{
      echo "YAH GAGAL ERROR : ".$query;
  }
}else{
  echo "CODE TIDAK DITEMUKAN ATAU TIDAK VALID";
}

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
  $body = "Hi, this is your receipt. <br> No Transaksi = $no_transaksi <br> Nama Pengunjung = $nama <br> Tanggal Order = $date <br> Dewasa/Umum/Mahasiswa = $umum <br> Siswa/Pelajar = $siswa <br> Wisatawan Mancangera = $mancanegara <br> Total Harga = $harga ";
  $mail->Body    = $body;
  $mail->AltBody = 'Account Verification';


  $mail->send();
  echo '<script>alert("Message Sent");</script>';
  
  }catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }


// $sql = "INSERT INTO orders (id_fk,date_order,dewasa_umum_mahasiswa,siswa_pelajar,wisatawan_mancanegara,nama,email,telepon,total_harga)VALUES('$id_fk','$date','$umum','$siswa','$mancanegara','$nama','$email','$telepon','$total_harga')";
// $query = mysqli_query($con,$sql);

if(isset($_POST['stripeToken'])){
  \Stripe\Stripe::setVerifySslCerts(false);
  
  $token=$_POST['stripeToken'];
  
  $data=\Stripe\Charge::create(array(
      "amount"=>$total_harga*100,
      "currency"=>"idr",
      "description"=>"Anything",
      "source"=>$token,
  ));

  // header("location: home_afterlogin.php");
}

