<?php require('./dbp.php'); ?>
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
                    <form action="?act=save" method="POST" name="form1" class="form-horizontal" >
                        <div class="panel panel-default">
                            
                            <div class="titulo-cad">
                                <H1 class="titulo-cad">Cadastrar Produto: </H1>
                                <input type="hidden" name="id_produto" value="<?php
                                
                                echo (isset($id_produto) && ($id_produto != null || $id_produto != "")) ? $id_produto : '';

                                ?>" />
                                <div class="form-group">
                                    <label for='nome' class="col-sm-1 control-label" ></label>
                                    <div class="col-md-5">
                                        <input class="input" type="text" name='nome' placeholder="Nome" value="<?php
                                        
                                        echo (isset($nome) && ($nome!= null || $nome != "")) ? $nome : '';

                                        ?>" class="form-control"/>
                                    </div>
                                    <label for="preco" class="col-sm-1 control-label"></label>
                                    <div class="col-md-4">
                                        <input class="input" type="text" name="preco" placeholder="Preço" value="<?php
                                        
                                        echo (isset($preco) && ($preco != null || $preco != "")) ? $preco : '';

                                        ?>" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="imagem" class="col-sm-1 control-label"></label>
                                    <div class="col-md-4">
                                        <input class="input" type="text" name="imagem" placeholder="Caminho da imagem" value="<?php
                                       
                                        echo (isset($imagem) && ($imagem != null || $imagem != "")) ? $imagem : '';

                                        ?>" class="form-control" />
                                    </div>
                                </div>
                                <br>
                                <a href="./cadastrarProduto.php"><button class="btn-cad" id="bCad">Cadastrar</button></a>
                            </div>
                            
                
            </article>
        </div>
    </body>
</html>
