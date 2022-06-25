<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./css/login_user.css">
</head>
<body>

    <header class="header">
        <a href="Home.php" class="logo">
            <img src="img/LogoGubug.png" width="200" height="100" >
        </a>
    </header>

    <div class="text">
        <h1>Log in ke Akun Anda </h1>
        <form action="loginProses.php" method="post">
            <br>
            <div class="form-group">
                <input type="text" placeholder="Email" name="email" class="form-control" required>
            </div>
            <br>

            <br>
            <div class="form-group">
                <input type="password" placeholder="Password" name="password" class="form-control" maxlength="25" required>
            </div>
            <br>
             <br><br>
            <button type="submit" class="btn btn-primary" href="home_afterlogin.php">Log In</button>
         <br>
             <p>Belum punya akun?<a href="registration.php"> Daftar !</a>
            </p> <br>
        </form>
    </div>
</body>
</html>