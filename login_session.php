<?php



session_start();

include_once("db-config.php");

if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    
    $result = mysqli_query($mysqli, "select 'email', 'password' from users
        where email='$email' and password='$password'");

    
    $user_matched = mysqli_num_rows($result);

   
    if ($user_matched > 0) {

        $_SESSION["email"] = $email;
        header("location: menuUsuario.php");
    } else {
        echo "User email or password is not matched <br/><br/>";
    }
}
?>