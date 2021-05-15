
<!DOCTYPE html>
<html  lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" >
        <link rel = "stylesheet" type="text/css" href="menuUsuario.css">
        <script type="text/javascript" src="index.js"></script>
   
</head>
<body>
    <div class="header">
        <a><img src="./imgs/logo.jpeg" height="80px" width="220px"></a>
        <div class="header-right">
            <a class="menu" href="menuUsuario.php">HOME</a>
            <a class="menu" href="produtos.php">PRODUTOS</a>
            <a class="menu" href="carrinho.php">CARRINHO</a>
            <div class="form-popup" id="myForm">
                <form action="/action_page.php" class="form-container">
                    <h2 class="titulo-login">Login</h2>
                    <input id="login" type="text" placeholder="Email" name="email" required>
                    <br>
                    <input id="login" type="password" placeholder="Senha" name="psw" required>
                    <br><br>
                    <button type="submit" class="btn">Login</button>
                    
                    <br>
                        <a class="esqueci">Esqueceu sua senha?</a>
                    <br>
                    <a class="esqueci" href="cadastroUser.php">Cadastre-se</a>
                    <br>
                    <a type="submit" class="btn_fechar" onclick="closeForm()">Close</a>
                </form>
            </div>
            <a class="menu" onclick="openForm()">ENTRAR</a>
        </div>
    </div>

    <div class="descricao">
        <h1 class="titulo">Sobre iCandy</h1> <br><br>
        <p class="historia">iCandy começou como um sonho envisionado por um universitário sem perspectiva de futuro. Nosso
            fundador precisava de algum tipo de complemento de renda, e então acabou optando por criar um comércio de doces
            caseiros, os quais ele mesmo fazia em pequena escala com a ajuda de sua família. As receitas secretas da família Luzzi
            cativaram milhares de pessoas, o que deu ao nosso fundador, Augusto Luzzi, a oportunidade de expandir sua pequena doceria
            para um grande comércio.
        </p> <br> <br>
        <p class="historia">Todos os ingredientes utilizados em nossos produtos são escolhidos
            a dedo por uma equipe de pessoas especializadas, aprovadas pelo próprio fundador da empresa.
        </p>
    </div>

    <footer class="footer-distributed">
        <div class="footer-center">
            <span class="rodape">Siga nossas redes sociais:</span>
            <div class="footer-icons">
                <a><img src="./imgs/facebook.png" height="30px"></a>
                <a><img src="./imgs/pinterest.png" height="30px"></a>
                <a><img src="./imgs/twitter.png" height="30px"></a>
                <a><img src="./imgs/instagram.png" height="30px"></a>
            </div>
        </div>
    </footer>  
 </body>
</html>