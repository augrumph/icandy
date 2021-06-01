<?php require('./login_session.php')?>
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






