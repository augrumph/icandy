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
    <img src="imgs/logo.jpeg" height="80px" width="220px">
    <div class="header">
        <form action="login.php" method="post" name="form1">
        
    </div>
            <div class="centro">
                <br><br><h3 class="titulo">Login de Usuário</h3><br>
                <div class="content">
                    <p>Email: </p>
                    <input class="input" type="text" name="email">
                </div>
                <div class="content">
                    <p>Senha: </p>
                    <input class="input" type="password" name="password">
                </div>
                
                <br><input type="submit" name="login" value="Login" id="btn"><br><br><br>
                <p>Ainda não possui conta?<a href="register.php" id="register"> Cadastre-se</a></p>
            </div>
        </form>
    <br>

    
</body>
</html>






