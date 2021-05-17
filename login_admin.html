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
        header("location: sidenav.php");
    } else {
        echo "User email or password is not matched <br/><br/>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./css/cadastroUsuario.css">
    <title>Administrador</title>
</head>

<body>
    <div class="header">
        <form action="sidenav.php" method="post" name="form1"></form>
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

</body>

</html>