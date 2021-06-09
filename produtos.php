<?php require('./login_session.php'); ?>
<?php require('./session.php') ?>

<!DOCTYPE html>
<html  lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" >
        <link rel = "stylesheet" type="text/css" href="./css/produtos.css"> 
</head>
<body>
    <?php include("header.php") ?>
        <?php 
        try {
            $stmt = $conexao->prepare("SELECT * FROM produtos");
            if ($stmt->execute()) {
                while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
            <form action="?act=add&id_produto=<?php echo $rs->id_produto; ?>" method="POST" name="form1" class="form-horizontal" >
                <div class="card">
                    <img src="<?php echo $rs->imagem;?>" class="img">
                    <h1 class="nome_produto"><?php echo $rs->nome; ?></h1>
                    <p class="price" name="preco">R$<?php echo $rs->preco; ?></p>
                    <span>Quantidade: </span><input name="quantidade" type="number" value="1" min="1" max="30" id="qtd1">
                    <input type="hidden" name="hidden_nome" value="<?php echo $rs->nome; ?>"/>
                    <input type="hidden" name="hidden_preco" value="<?php echo $rs->preco; ?>"/>
                    <p><button onclick="abrir()"> <a href="tabela_nutricional.php" class="tabela"> Tabela Nutricional </a></button></p>
                    <script>
                        function abrir() {
                            alert("Tabela nutricional!");
                        }
                        function addCarrinho() {
                            alert("Produto adicionado ao carrinho!");
                        }
                    </script>
                    <input type="submit" onclick="addCarrinho()" name="add_carrinho" class="botao" value="Adicionar ao carrinho"/>
                </div>
            </form>

        <?php }
        } else {
            echo "Erro: Não foi possível recuperar os dados do banco de dados";
        }
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
        }
        ?>
</body>
</html>