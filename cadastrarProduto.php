<?php include('sidenav.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" >
        <link rel = "stylesheet" type="text/css" href="./css/css.css">
    </head>
    <body>
        <div class="cadastro">

            <article>
                <div>
                    <form action="cadastrarProduto.php" method="POST" name="form1" class="form-horizontal" >
                        <div class="panel panel-default">
                            
                            <div class="titulo-cad">
                                <H1 class="titulo-cad">Cadastrar Produto: </H1>
                                <input class="input" required name="id_produto" placeholder="Código do produto" type="text"/>
                                <div class="form-group">
                                    <label for='nome' class="col-sm-1 control-label" ></label>
                                    <div class="col-md-5">
                                        <input class="input" required type="text" name='nome' placeholder="Nome" class="form-control"/>
                                    </div>
                                    <label for="preco" class="col-sm-1 control-label"></label>
                                    <div class="col-md-4">
                                        <input class="input" required type="text" name="preco" placeholder="Preço" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="imagem" class="col-sm-1 control-label"></label>
                                    <div class="col-md-4">
                                        <input class="input" required type="text" name="imagem" placeholder="Caminho da imagem" class="form-control" />
                                    </div>
                                    <div class="col-md-4">
                                        <input class="input" required type="text" name="id_admin" placeholder="Id do administrador" class="form-control" />
                                    </div>
                                </div>
                                <br>
                                <a href="./cadastrarProduto.php"><button class="btn-cad" name="cadastrar" id="bCad">Cadastrar</button></a>
                            </div>

                            <?php
        
                            include_once("db-config.php");
                            if (isset($_POST['cadastrar'])) {
                                $id_produto     = $_POST['id_produto'];
                                $nome     = $_POST['nome'];
                                $preco    = $_POST['preco'];
                                $imagem = $_POST['imagem'];
                                $id_admin = $_POST['id_admin'];
                                
                                $result   = mysqli_query($mysqli, "INSERT INTO produtos(id_produto,nome,preco,id_admin,imagem) VALUES('$id_produto', '$nome','$preco','$id_admin','$imagem')");
                                if ($result) {
                                    echo "<br/><br/>Cadastro do produto realizado com sucesso.";
                                } else {
                                    echo "Registration error. Please try again." . mysqli_error($mysqli);
                                }
                                
                            }

                            ?>
                    </form>        
                </div>
            </article>
        </div>
    </body>
</html>
