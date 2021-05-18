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
        echo "User email or password is not matched <br/><br/>";
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
    <title>Login Usuário</title>
</head>
<body>
    <div class="header">
        <form action="sidenav.php" method="post" name="form1">
    </div>
            <div class="centro">
                <br><h3 class="titulo">Login Administrador</h3><br><br>
                <div class="content">
                    <p>Email: </p>
                    <input type="text" name="email">
                </div>
                <div class="content">
                    <p>Senha: </p>
                    <input type="password" name="password">
                </div>
                
                <br><input type="submit" name="login" value="Login" id="btn"><br><br><br>
                     
            </div>
        </form>
    <br>

    
</body>
</html>






