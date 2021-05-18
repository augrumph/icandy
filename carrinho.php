<!DOCTYPE html>
<html  lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" >
        <link rel = "stylesheet" type="text/css" href="./css/carrinho.css">
        <script type = "text/javascript" src="./js/jquery.js"></script>
        <script type="text/javascript" src="./js/index.js"></script>
</head>
<body>
    <?php require('header.php')?>
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