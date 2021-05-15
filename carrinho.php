<!DOCTYPE html>
<html  lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" >
        <link rel = "stylesheet" type="text/css" href="carrinho.css">
        <script type = "text/javascript" src="jquery.js"></script>
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
                
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>
                
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
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
    <div class="carrinho">
        <table id="conteudo">
			<thead>
                <tr>
                    <th>Qtd</th>
                    <th>Produto</th>
                    <th>Preco</th>
                    <th>Total</th>
                    <th><button class="btn-l" id="limpar"> Limpar Carrinho</button></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th id="qtd" class="text"> </th>
                    <th id="pdt" class="text"> </th>
                    <th id="pço" class="text"> </th>
                    <th id="total" class="text"> </th>
                </tr>
            </tbody>
	    </table>
    </div>
    <div class="pagamento">
        <article>
            <div>
                <form action="?act=save" method="POST" name="form1" class="form-horizontal" >
                    <div class="panel panel-default">
                        
                        <div class="titulo-cad">
                            <H1 class="titulo-cad">Pagamento Cartão</H1>
                            <input type="tel" maxlength="19" placeholder="Numero do cartão" class="input"/>
                            <br>
                            <input class="input" type="text" placeholder="Nome"/>
                            <input class="input" type="text" placeholder="CVV"/>
                            <br>
                            <a class="titulo-vencimento">Data de Vencimento</a>
                            <br>
                            <input class="datanasc" id="bData" type="month"/>
                            <br> <br>
                            <button class="btn-cad" > Finalizar Compra </button>
                        </div>
                    </div>
            </div>
        </article>
    </div>
 </body>
</html>