<?php



// Start PHP session at the beginning 
session_start();

// Create database connection using config file
include_once("db-config.php");

// If form submitted, collect email and password from form
if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // Check if a user exists with given username & password
    $result = mysqli_query($mysqli, "select 'email', 'password' from users
        where email='$email' and password='$password'");

    // Count the number of user/rows returned by query 
    $user_matched = mysqli_num_rows($result);

    // Check If user matched/exist, store user email in session and redirect to sample page-1
    if ($user_matched > 0) {

        $_SESSION["email"] = $email;
        header("location: menuUsuario.php");
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
        <form action="login.php" method="post" name="form1">
    </div>
            <div class="centro">
                <br><h3 class="titulo">Login de Usuário</h3><br><br>
                <div class="content">
                    <p>Email: </p>
                    <input type="text" name="email">
                </div>
                <div class="content">
                    <p>Senha: </p>
                    <input type="password" name="password">
                </div>
                
                <br><input type="submit" name="login" value="Login" id="btn"><br><br><br>
                <a href="register.php" id="register">Ainda não possui conta? Cadastre-se</a>        
            </div>
        </form>
    <br>

    
</body>
</html>






