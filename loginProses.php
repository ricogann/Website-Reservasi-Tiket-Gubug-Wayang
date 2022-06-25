<?php

    require ('connection.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM accounts where email = '$email'";
    $query = mysqli_query($con,$sql);

    if(mysqli_num_rows($query) == 0){
        echo '<script>alert("Email tidak ditemukan!");</script>';
    }else{

        $user = mysqli_fetch_assoc($query);
        $id = $user['id'];
        if(password_verify($password,$user['password'])){
            if($user['is_verified']==1){
            session_start();
            $_SESSION['isLogin'] = true;
            $_SESSION['user'] = $user;
                
            header("location: home_afterlogin.php");
            }else{
                echo '<script>alert("Verif Email Dulu Gan!");</script>';
            }
        }else{
            echo '<script>alert("Password Salah!");</script>';
        }
    }
?>