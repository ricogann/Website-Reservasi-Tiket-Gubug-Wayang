<?php
require('connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/halohalo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/print.css" media="print">
    <link rel="import" href="component.html">
    <title>Print PDF</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a href="home_afterlogin.php">
                <img src="../login_gubugwayang/img/LogoGubug.png" alt="" width="200" height="100" class="d-inline-block align-text-top">
            </a>



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
                                    <br> Tiket Pelajar <br> <span class='thin small'>Jumlah - <?php echo $_SESSION['siswa'] ?> </span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class='price'>Rp<?php echo (int)$_SESSION['siswa'] * 30000 ?></div>
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
                                    <br>Tiket Wisatawan Mancanegara<br> <span class='thin small'>Jumlah - <?php echo $_SESSION['mancanegara'] ?> </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class='price'>Rp<?php echo (int)$_SESSION['mancanegara'] * 30000 ?></div>
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
                                    <br>Tiket Dewasa<br> <span class='thin small'> Jumlah - <?php echo $_SESSION['umum'] ?></span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class='price'>Rp<?php echo (int)$_SESSION['umum'] * 30000 ?></div>
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

                            Rp<?php echo $_SESSION['harga'] ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class='credit-info'>
                <div class='credit-info-content'>
                    <table class='half-input-table'>
                        <tr>
                            <td>Your Card Payment : </td>
                            <td>
                                <div class='dropdown' id='card-dropdown'>
                                    <div class='dropdown-btn' id='current-card'>Visa</div>

                                </div>
                            </td>
                        </tr>
                    </table>
                    <img src='https://icon-library.com/images/printer-icon-png/printer-icon-png-9.jpg' height='80' class='credit-card-image' id='credit-card-image'></img>
                    Nama Pengunjung
                    <label class='input-field'><?php echo $_SESSION['user']['nama'] ?></label>
                    Alamat
                    <label class='input-field'><?php echo $_SESSION['user']['alamat'] ?></label>
                    <table class='half-input-table'>
                        <tr>
                            <td> Nomer Tiket
                                <br>
                                <label class='input-field'><?php echo $_SESSION['tiket']['no_transaksi'] ?></label>

                            </td>
                        </tr>

                    </table>
                    <button onclick="window.print();" class="btn btn-primary">Print</button>


                </div>

            </div>
        </div>
    </div>
</body>

</html>