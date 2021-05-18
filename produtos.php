<!DOCTYPE html>
<html  lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" >
        <link rel = "stylesheet" type="text/css" href="./css/produtos.css">
        <script type = "text/javascript" src="./js/jquery.js"></script>
        <script type="text/javascript" src="./js/index.js"></script>
   
</head>
<body>
    <?php include("header.php") ?>
    <div class="card">
        <img src="./imgs/torta.jpg" class="img">
        <h1 class="nome_produto">Torta Frutas Vermelhas</h1>
        <p class="price">R$80</p>
        <span>Quantidade: </span><input type="number" value="1" min="1" max="30" id="qtd1">
        <p><button>Tabela Nutricional</button></p>
        <p><button onclick="AddCarrinho('Torta Frutas Vermelhas', document.getElementById('qtd1').value, '80', 1)">Add ao Carrinho</button></p>
    </div>

    <div class="card">
        <img src="./imgs/bolo.jpg" class="img">
        <h1 class="nome_produto">Bolo de Chocolate</h1>
        <p class="price">R$75</p>
        <span>Quantidade: </span><input type="number" value="1" min="1" max="30" id="qtd2">
        <p><button>Tabela Nutricional</button></p>
        <p><button onclick="AddCarrinho('Bolo Chocolate', document.getElementById('qtd2').value, '75', 2)">Add ao Carrinho</button></p>
    </div>

    <div class="card">
        <img src="./imgs/bolo2.jpg" class="img">
        <h1 class="nome_produto">Bolo Brigadeiro</h1>
        <p class="price">R$85</p>
        <span>Quantidade: </span><input type="number" value="1" min="1" max="30" id="qtd3">
        <p><button>Tabela Nutricional</button></p>
        <p><button onclick="AddCarrinho('Bolo', document.getElementById('qtd3').value, '85', 3)">Add ao Carrinho</button></p>
    </div>

    <div class="card">
        <img src="./imgs/torta2.jpg" class="img">
        <h1 class="nome_produto">Torta de Morango</h1>
        <p class="price">R$100</p>
        <span>Quantidade: </span><input type="number" value="1" min="1" max="30" id="qtd4">
        <p><button>Tabela Nutricional</button></p>
        <p><button onclick="AddCarrinho('Torta de Morango', document.getElementById('qtd4').value, '100', 4)">Add ao Carrinho</button></p>
    </div>

    <div class="card">
        <img src="./imgs/cupcake.jpg" class="img">
        <h1 class="nome_produto">Cupcake de Morango</h1>
        <p class="price">R$15</p>
        <span>Quantidade: </span><input type="number" value="1" min="1" max="30" id="qtd5">
        <p><button>Tabela Nutricional</button></p>
        <p><button onclick="AddCarrinho('Cupcake de Morango', document.getElementById('qtd5').value, '15', 5)">Add ao Carrinho</button></p>
    </div>

    <div class="card">
        <img src="./imgs/cupcake2.jpg" class="img">
        <h1 class="nome_produto">Cupcake de Chocolate</h1>
        <p class="price">R$10</p>
        <span>Quantidade: </span><input type="number" value="1" min="1" max="30" id="qtd6">
        <p><button>Tabela Nutricional</button></p>
        <p><button onclick="AddCarrinho('Cupcake de Chocolate', document.getElementById('qtd6').value, '10', 6)">Add ao Carrinho</button></p>
    </div>

    <div class="card">
        <img src="./imgs/cheesecake.jpg" class="img">
        <h1 class="nome_produto">Cheesecake</h1>
        <p class="price">R$110</p>
        <span>Quantidade: </span><input type="number" value="1" min="1" max="30" id="qtd7">
        <p><button>Tabela Nutricional</button></p>
        <p><button onclick="AddCarrinho('Cheesecake', document.getElementById('qtd7').value, '110', 7)">Add ao Carrinho</button></p>
    </div>

    <div class="card">
        <img src="./imgs/cheesecake2.png" class="img">
        <h1 class="nome_produto">Cheesecake de Chocolate</h1>
        <p class="price">R$88</p>
        <span>Quantidade: </span><input type="number" value="1" min="1" max="30" id="qtd8">
        <p><button>Tabela Nutricional</button></p>
        <p><button onclick="AddCarrinho('Cheesecake de Chocolate', document.getElementById('qtd8').value, '88', 8)">Add ao Carrinho</button></p>
    </div>

    <div class="card">
        <img src="./imgs/bolo3.jpg" class="img">
        <h1 class="nome_produto">Bolo de Limão</h1>
        <p class="price">R$65</p>
        <span>Quantidade: </span><input type="number" value="1" min="1" max="30" id="qtd9">
        <p><button>Tabela Nutricional</button></p>
        <p><button onclick="AddCarrinho('Bolo de Limão', document.getElementById('qtd9').value, '65', 9)">Add ao Carrinho</button></p>
    </div>
</body>
</html>