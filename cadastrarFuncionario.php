<?php require('./db.php'); ?>
<?php include('sidenav.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" >
        <link rel = "stylesheet" type="text/css" href="./css.css">
    </head>
    <body>
        <div class="cadastro">

            <article>
                <div>
                    <form action="?act=save" method="POST" name="form1" class="form-horizontal" >
                        <div class="panel panel-default">
                            
                            <div class="titulo-cad">
                                <H1 class="titulo-cad">Cadastro Funcionario: </H1>
                                <input type="hidden" name="id" value="<?php
                                // Preenche o id no campo id com um valor "value"
                                echo (isset($id) && ($id != null || $id != "")) ? $id : '';

                                ?>" />
                                <div class="form-group">
                                    <label for='nome' class="col-sm-1 control-label" ></label>
                                    <div class="col-md-5">
                                        <input class="input" type="text" name='nome' placeholder="Nome" value="<?php
                                        // Preenche o nome no campo empresa com um valor "value"
                                        echo (isset($nome) && ($nome!= null || $nome != "")) ? $nome : '';

                                        ?>" class="form-control"/>
                                    </div>
                                    <label for="sobrenome" class="col-sm-1 control-label"></label>
                                    <div class="col-md-4">
                                        <input class="input" type="text" name="sobrenome" placeholder="Sobrenome" value="<?php
                                        // Preenche o servico no campo contato com um valor "value"
                                        echo (isset($sobrenome) && ($sobrenome != null || $sobrenome != "")) ? $sobrenome : '';

                                        ?>" class="form-control" />
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label for="inicio_contrato" class="col-sm-1 control-label"></label>
                                    <div class="col-md-4">
                                        <input class="datanasc" type="date" name="inicio_contrato"  value="<?php
                                        // Preenche o email no campo contato com um valor "value"
                                        echo (isset($inicio_contrato) && ($inicio_contrato != null || $inicio_contrato != "")) ? $inicio_contrato : '';

                                        ?>" class="form-control" />
                                    </div>
                                    <label for="genero" class="col-sm-2 control-label"></label>
                                    <div class="col-md-4">
                                        <input class="input" type="text" name="genero" placeholder="Genero" value="<?php
                                        // Preenche o email no campo funcao com um valor "value"
                                        echo (isset($genero) && ($genero != null || $genero != "")) ? $genero : '';

                                        ?>" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="salario" class="col-sm-1 control-label"></label>
                                    <div class="col-md-4">
                                        <input class="input" type="text" name="salario" placeholder="Salario" value="<?php
                                        // Preenche o celular no campo email com um valor "value"

                                        echo (isset($salario) && ($salario != null || $salario != "")) ? $salario : '';

                                        ?>" class="form-control" />
                                    </div>
                                    <label for="posicao" class="col-sm-2 control-label"></label>
                                    <div class="col-md-2">
                                        <input class="input" type="text" name="posicao" placeholder="Cargo" value="<?php
                                        // Preenche o celular no campo telefone com um valor "value"
                                        echo (isset($posicao) && ($posicao != null || $posicao != "")) ? $posicao : '';

                                        ?>" class="form-control" />
                                    
                                </div>
                                <br>
                                <a href="./index-login.html"><button class="btn-cad" id="bCad">Cadastrar</button></a>
                            </div>
                            
                
            </article>
        </div>
    </body>
</html>
