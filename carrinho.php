<?php require('./login_session.php'); ?>
<?php require('./session.php');?>

<!DOCTYPE html>
<html  lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" >
        <link rel = "stylesheet" type="text/css" href="./css/carrinho.css">
</head>
<body>
    <?php require('header.php')?>
    <div class="carrinho">
        <table id="conteudo">
			<thead>
                <tr>
                    <th>Produto</th>
                    <th>Qtd</th>
                    <th>Preco</th>
                    <th>Subtotal</th>
                    <th> <a href="carrinho.php?action=limpar" class="limpar"><span>Limpar Carrinho</span> </a> </th>
                </tr>
            </thead>

            <tbody>

                <?php 
                    if(!empty($_SESSION["shopping_cart"])) {
                        $total = 0;
                        foreach($_SESSION["shopping_cart"] as $keys => $values)
                        {
                ?>
                <tr>
                    <td id="pdt" class="text"> <?php echo $values["item_nome"]; ?> </td>
                    <td id="qtd" class="text"><?php echo $values["item_quantidade"]; ?> </td>
                    <td id="pço" class="text">R$<?php echo $values["item_preco"]; ?>  </td>
                    <td id="total" class="text"> <?php echo number_format($values["item_quantidade"] * $values["item_preco"], 2);?>  </td>
                    <td class="text"><a href="carrinho.php?action=delete&id_produto=<?php echo $values["item_id_produto"]; ?>"><span> Remover </span></a>  </td>
                </tr>
                <?php
                            $total = $total + ($values["item_quantidade"] * $values["item_preco"]);
                        }
                ?>    
                    
                <tr> 
                    <th colspan="3" align-item="right"> Total </th>
                    <th>R$ <?php echo number_format($total, 2 ); ?> </th>
                    <td> </td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
	    </table>
    </div>
    <div class="pagamento">
        <article>
            <div>
                <form action="carrinho.php" method="POST" name="form1" class="form-horizontal" >
                    <div class="panel panel-default">
                        <div class="titulo-cad">
                            <H1 class="titulo-cad">Pagamento Cartão</H1>
                            <input type="tel" required minlength="19" maxlength="19" placeholder="Numero do cartão" class="input"/>
                            <br>
                            <input class="input" required type="text" placeholder="Nome"/>
                            <input class="input" required minlenght="3" maxlength="3" type="text" placeholder="CVV"/>
                            <br>
                            <a class="titulo-vencimento">Data de Vencimento</a>
                            <br>
                            <input class="datanasc" required id="bData" type="month"/>
                            <br><br>
                            <input type="hidden" name="id" value="<?php 
                            echo (isset($id) && ($id != null || $id != "")) ? $id : '';
                            ?>"/>

                            <input type="hidden" name="nome" value="<?php echo $values["item_nome"]; ?>"/>

                            <input type="hidden" name="quantidade" value="<?php echo $values["item_quantidade"]; ?>"/>

                            <input type="hidden" name="preco" value="<?php echo $values["item_preco"];?>"/>

                            <?php
                            if(isset($_SESSION["email"])){
                                $result = mysqli_query($mysqli, "SELECT id FROM users WHERE email = '".$_SESSION["email"]."'");
                                $id_user = mysqli_fetch_array($result);
                            }
                            ?>
                            <input type="hidden" name="users_id" value="<?php echo $id_user['id'];  ?>"/>
                            <button type="submit" name="carrinho" value="Finalizar Compra" class="final"><a class="redirect" href="compra_sucesso.php">Finalizar Compra</a></button>
                        </div>
                    </div>
                    <?php
                    if (isset($_POST['carrinho'])) {
                        $id = $_POST['id'];
                        $quantidade = $_POST['quantidade'];
                        $nome     = $_POST['nome'];
                        $preco    = $_POST['preco'];
                        $users_id = $_POST['users_id'];

                        if(!empty($_SESSION["shopping_cart"])) {
                            foreach($_SESSION["shopping_cart"] as $keys => $values)
                            {
                            $result   = mysqli_query($mysqli, "INSERT INTO nota(quantidade,nome,preco,users_id) VALUES('$quantidade','$nome','$preco','$users_id')");
                            }
                        }
                    }
                    ?>
                <form>
            </div>
        </article>
    </div>
 </body>
</html>
