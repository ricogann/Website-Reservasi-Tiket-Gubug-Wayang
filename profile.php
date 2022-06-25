<?php
    require ('connection.php');

    session_start();

    if(isset($_SESSION['isLogin'])){
        $_SESSION['user'];
    }else{
        echo"Login dulu gan!";
    }

    $id_fk = $_SESSION['user']['id'];
    $query = mysqli_query($con,'SELECT * from orders');
    
    while($data = mysqli_fetch_array($query)){
        if($id_fk != $data['id_fk']){
            echo $data['date_order'];
            echo $data['dewasa_umum_mahasiswa'];
            echo $data['siswa_pelajar'];
            echo $data['wisatawan_mancanegara'];
            echo $data['nama'];
            echo $data['email'];
            echo $data['telepon'];
            echo $data['total_harga'];
        }
    }
?>