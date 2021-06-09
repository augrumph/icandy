<?php




session_start();


include_once("db-config.php");

if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    
    $result = mysqli_query($mysqli, "select 'email', 'password' from admin
        where email='$email' and password='$password'");

   
    $user_matched = mysqli_num_rows($result);

    
    if ($user_matched > 0) {

        $_SESSION["email"] = $email;
        header("location: sidenav.php");
    } else {
        echo "<script>alert('Usuário ou senha incorretos')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cadastroUsuario.css">
    <title>Login Administrador</title>
</head>
<body>
        <img src="./imgs/logo.jpeg" height="80px" width="220px">
    <div class="header">
        <form action="sidenav.php" method="post" name="form1">
    </div>
            <div class="centro">
                <br><br><br><h3 class="titulo">Login Administrador</h3><br>
                <div class="content">
                    <p>Email: </p>
                    <input class="input" type="text" name="email">
                </div>
                <div class="content">
                    <p>Senha: </p>
                    <input class="input" type="password" name="password">
                </div>
                
                <br><br><br><input type="submit" name="login" value="Login" id="btn"><br><br><br>
                     
            </div>
        </form>
    <br>

    
</body>
</html>






