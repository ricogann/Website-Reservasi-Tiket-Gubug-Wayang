<?php
require('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../login_gubugwayang/css/reservasi_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

    <header class="header">
        <a href="home_afterlogin.php" class="logo">
            <img src="img/LogoGubug.png" width="200" height="100" >
        </a>
    </header>

    <div class="gambar">
        <img src="img/reservasi_img.jpg" alt="">
    </div>

    <form action="./detailPesanan.php" method="post" autocomplete="off">
        <h1 align = center>Data Reservasi</h1>

        <div align = center>
            <span class="step" id = step-1>1</span>
            <span class="step" id = step-2>2</span>
        </div>

        <div class="tab" id = "tab-1">
            <div class="label">Tanggal Reservasi</div>
            <input type="date" placeholder="date" name="date" required>
            
            <div class="label">Dewasa/Umum/Mahasiswa</div>
            <input onkeyup="Total()" type="number" placeholder="0" id="inp_jumlah" name="umum" min="0">

            <div class="label">Siswa/Pelajar</div>
            <input onkeyup="Total()" type="number" placeholder="0" id="inp_jumlah" name="siswa" min="0">

            <div class="label">Wisatawan Mancanegara</div>
            <input onkeyup="Total()" type="number" placeholder="0" id="inp_jumlah" name="mancanegara" min="0">

            <div class="index-btn-wrapper">
                <div class="index-btn" onclick="run(1,2);">Next</div>
            </div>
        </div>

        <script>
            $(function(){
                var today = new Date().toISOString().split('T')[0];
                document.getElementsByName("date")[0].setAttribute('min', today);
        });
        </script>

        <div class="tab" id = "tab-2">
            <div class="label">Nama</div>
            <input type="text" placeholder="nama" name="nama">
            
            <div class="label">Email</div>
            <input type="email" placeholder="email" name="email" required>

            <div class="label">Telepon</div>
            <input type="text" placeholder="telepon" name="telepon" required>

            <div class="index-btn-wrapper">
                <div class="index-btn" onclick="run(2,1);">Previous</div>
                <button class="index-btn">Next</button></div>
            </div>
        </div>
    </form>

    <script>
        $(".tab").css("display","none");
        $("#tab-1").css("display","block");

        function run(hideTab,showTab){
            if(hideTab < showTab){
                var currentTab=0;
                x = $("#tab-"+hideTab);
                y = $(x).find("input[type='date']");
                y1 = $(x).find("input[type='text']");
                y2 = $(x).find("input[type='email']");
                for(i = 0; i<y.length; i++){
                    if(y[i].value == ""){
                        $(y[i]).css("background","#ffdddd");
                        return false;
                    }
                }
            }

            for(i = 1; i < showTab; i++){
                $("#step-"+i).css("opacity","1");
            }

            $("#tab-"+hideTab).css("display","none");
            $("#tab-"+showTab).css("display","block");
            $("input").css("background","#fff");
        }
    </script>
    
</body>
</html>

