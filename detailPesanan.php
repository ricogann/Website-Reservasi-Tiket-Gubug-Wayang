<?php
require('config.php');
require ('connection.php');

session_start();

if(isset($_SESSION['isLogin'])){
    $_SESSION['user'];
}else{
    echo"Login dulu gan!";
}

$id_fk = $_SESSION['user']['id'];

if(isset($_POST['date']) && isset($_POST['umum']) && isset($_POST['siswa']) && isset($_POST['mancanegara']) && isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['telepon'])){
$date = $_POST['date'];
$umum = $_POST['umum'];
$siswa = $_POST['siswa'];
$mancanegara = $_POST['mancanegara'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$total_harga = (int)$umum*30000 + (int)$siswa*30000 + (int)$mancanegara*30000;
$total_hargashow = $total_harga*100;
$no_transaksi = random_int(10000000,99999999);
}
$sql = "INSERT INTO orders (id_fk,date_order,dewasa_umum_mahasiswa,siswa_pelajar,wisatawan_mancanegara,nama,email,telepon,total_harga,no_transaksi)VALUES('$id_fk','$date','$umum','$siswa','$mancanegara','$nama','$email','$telepon','$total_harga','$no_transaksi')";
$query = mysqli_query($con,$sql);
$sql1 = "SELECT * FROM orders where no_transaksi = '$no_transaksi'";
$query1 = mysqli_query($con,$sql1);
$data_tiket = mysqli_fetch_assoc($query1);
$_SESSION['tiket'] = $data_tiket;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/halohalo.css">
       <!-- kit icon -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script src="https://kit.fontawesome.com/ecde83b210.js" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a href="home_afterlogin.php">
            <img src="../login_gubugwayang/img/LogoGubug.png" alt="" width="200" height="100" class="d-inline-block align-text-top">
            </a>
            

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="navbar-brand">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <?php echo $_SESSION['user']['nama'] ?>
                        <img src="../login_gubugwayang/img/profile.png" alt="" width="40" height="34" class="d-inline-block align-text-top">
                        </a>
                    </li>
                </ul>
        </nav>
        </div>
  </nav>

  <div class='containers'>
    <div class='window'>
        <div class='order-info'>
            <div class='order-info-content'>
                <h2>Order Summary</h2>
                    <div class='line'></div>
            <table class='order-table'>
            <tbody>
                <tr>
                <td><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRv2ncX9CpWHoQHICOQTIN00boynljoGxkXNw&usqp=CAU' class='full-width'></img>
                </td>
                <td>
                    <br> <span class='thin'>Tiket Kunjungan Museum</span>
                    <br> Tiket Pelajar <br> <span class='thin small'>Jumlah - <?php echo $siswa ?> </span>
                </td>

                </tr>
                <tr>
                <td>
                    <div class='price'>Rp<?php echo (int)$siswa*30000 ?></div>
                </td>
                </tr>
            </tbody>

            </table>
        <div class='line'></div>
        <table class='order-table'>
          <tbody>
            <tr>
              <td><img src='https://pict.sindonews.net/dyn/620/content/2020/02/26/15/1538188/anggarkan-influencer-rp72-m-untuk-gaet-wisatawan-asing-dinilai-pemborosan-Ecb-thumb.jpg' class='full-width'></img>
              </td>
              <td>
                <br> <span class='thin'>Tiket Kunjungan Museum</span>
                <br>Tiket Wisatawan Mancanegara<br> <span class='thin small'>Jumlah - <?php echo $mancanegara ?> </span>
              </td>
            </tr>
            <tr>
              <td>
                <div class='price'>Rp<?php echo (int)$mancanegara*30000 ?></div>
              </td>
            </tr>
          </tbody>
        </table>
        <div class='line'></div>
        <table class='order-table'>
          <tbody>
            <tr>
              <td><img src='https://media.suara.com/pictures/653x366/2022/02/22/6-hal-yang-bisa-anda-tiru-dari-thomas-shelby-peaky-blinders.jpg' class='full-width'></img>
              </td>
              <td>
                <br> <span class='thin'>Tiket Kunjungan Museum</span>
                <br>Tiket Dewasa<br> <span class='thin small'> Jumlah - <?php echo $umum ?></span>
              </td>

            </tr>
            <tr>
              <td>
                <div class='price'>Rp<?php echo (int)$umum*30000 ?></div>
              </td>
            </tr>
          </tbody>
        </table>
        <div class='line'></div>
        <div class='total'>
          <span style='float:left;'>

            TOTAL
          </span>
          <span style='float:right; text-align:right;'>

          Rp<?php echo $total_harga?>
          </span>
        </div>
</div>
</div>
        <div class='credit-info'>
          <div class='credit-info-content'>
            <table class='half-input-table'>
              <tr><td>Your Card Payment : </td><td><div class='dropdown' id='card-dropdown'><div class='dropdown-btn' id='current-card'>Visa</div>

                </div>
               </td></tr>
            </table>
            <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' height='80' class='credit-card-image' id='credit-card-image'></img>
            Nama Pengunjung 
            <label class='input-field'><?php echo $nama ?></label>
            Alamat 
            <label class='input-field'><?php echo $_SESSION['user']['alamat'] ?></label>
            <table class='half-input-table'>
              <tr>
                <td> Tanggal Berkunjung
                <label class='input-field'><?php echo $date ?></label>
                  
                </td>
              </tr>
            </table>
            
            <form action="submit.php" method="POST">
            <button class='pay-btn'><script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="<?php echo $publishableKey?>"
                data-amount=""
                data-name = "Anything"
                data-description="Really Anything"
                data-image=""
                data-currency="idr"
                >
                </script></button>
            </form>
          </div>

        </div>
      </div>
</div>
</body>
</html>

<?php
    $_SESSION["siswa"] = $siswa;
    $_SESSION["umum"] = $umum;
    $_SESSION["mancanegara"] = $mancanegara;
    $_SESSION['harga'] = $total_harga;
?>