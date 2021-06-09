
<?php


?>

<html>

<head>
    <title>Register</title>
    <link rel = "stylesheet" type="text/css" href="./css/cadastroUsuario.css">
</head>

<body>
    <br>
    <form action="register.php" method="post" name="form1">
        <div class="header">
    </div>
    <div class="centro">
        <br>
        <h3 class="titulo">Registre-se aqui</h3>
        <div class="content">
            <p>Nome: </p>
            <input type="text" name="name" required>
        </div>
        <div class="content">
            <p>Email: </p>
            <input type="email" name="email" required>
        </div>
        <div class="content">
            <p>Senha: </p>
            <input type="password" name="password" required>
        </div>
        <input id="btn" type="submit" name="register" value="Register">
        <br><br>
        <a href="login.php" id="register">Já possui cadastro? Faça seu login</a>
    </div>

        <?php
        
        include_once("db-config.php");

        
        if (isset($_POST['register'])) {
            $name     = $_POST['name'];
            $email    = $_POST['email'];
            $password = $_POST['password'];

           
            $email_result = mysqli_query($mysqli, "select 'email' from users where email='$email' and password='$password'");

            
            $user_matched = mysqli_num_rows($email_result);

            
            if ($user_matched > 0) {
                echo "<script>alert('Erro. E-mail já cadastrado')</script>";
            } else {
                
                $result   = mysqli_query($mysqli, "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')");

                
                if ($result) {
                    echo "<script>alert('Cadastro realizado com sucesso!')</script>";
                } else {
                    echo "<script>alert('Erro. Por favor tente novamente.')</script>" . mysqli_error($mysqli);
                }
            }
        }

        ?>
    </form>
</body>

</html>