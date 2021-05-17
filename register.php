<?php


?>

<html>

<head>
    <title>Cadastro</title>
    <link rel = "stylesheet" type="text/css" href="./css/cadastroUsuario.css">
</head>

<body>
    <br>
    <div class="header">
        <form action="register.php" method="post" name="form1"></form>
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
        <input id="btn" type="submit" name="register" value="Cadastrar">
        <br><br>
        <a href="login.php" id="register">Já possui cadastro? Faça seu login</a>
    </div>
    
        <?php
        //including the database connection file
        include_once("db-config.php");

        // Check If form submitted, insert user data into database.
        if (isset($_POST['register'])) {
            $name     = $_POST['name'];
            $email    = $_POST['email'];
            $password = $_POST['password'];

            // If email already exists, throw error
            $email_result = mysqli_query($mysqli, "select 'email' from users where email='$email' and password='$password'");

            // Count the number of row matched 
            $user_matched = mysqli_num_rows($email_result);

            // If number of user rows returned more than 0, it means email already exists
            if ($user_matched > 0) {
                echo "<br/><br/><strong>Error: </strong> User already exists with the email id '$email'.";
            } else {
                // Insert user data into database
                $result   = mysqli_query($mysqli, "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')");

                // check if user data inserted successfully.
                if ($result) {
                    echo "<br/><br/>User Registered successfully.";
                } else {
                    echo "Registration error. Please try again." . mysqli_error($mysqli);
                }
            }
        }

        ?>
    </form>
</body>

</html>