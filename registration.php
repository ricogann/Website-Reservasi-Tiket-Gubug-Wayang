<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./css/regis_user.css">
</head>
<body>

    <header class="header">
        <a href="Home.php" class="logo">
            <img src="img/LogoGubug.png" width="200" height="100" >
        </a>    
    </header>

    <div class="text">
        <br>
        <h1>Daftar Akun Baru </h1>
        <form action="registrationProses.php" method="post">
            <br>
            <input type="text" placeholder="nama" name="nama" maxlength="40" required>
            <br>
            <br>
            <input type="email" placeholder="email" name="email"  required>
            <br>
            <br>
            <input type="password" placeholder="password" name="password" maxlength="25" required>
            <br>
            <br>
            <input type="text" placeholder="telepon" name="telepon" maxlength="13" required>
            <br>
            <br>
            <input type="text" placeholder="alamat" name="alamat" maxlength="100" required>
            <br>
            <br><br>
         <button type="submit" name="sumbit" value="register" required>Daftar Akun</button>
         <br>
         <br>
         <br>
        </form>
    </div>
<?php
$error = null;
?>
</body>
</html>