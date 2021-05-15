<?php require('userdb.php'); ?>
<!DOCTYPE html>
<html  lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" >
        <link rel = "stylesheet" type="text/css" href="cadastroUsuario.css">
   
</head>
<body>
    <div class="header">
        <div class="header-right">
            <a class="menu" href="../index.html">HOME</a>
            <a class="produtos.php">PRODUTOS</a>
            <a class="carrinho.php">CARRINHO</a>
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
                    <a class="esqueci">Cadastre-se</a>
                    <br>
                    <a type="submit" class="btn_fechar" onclick="closeForm()">Close</a>
                    </form>
            </div>
            <a class="menu" onclick="openForm()">ENTRAR</a>
        </div>
    </div>
          <div class="cadastro">
            <article>
                <div>
                    <form action="?act=save" method="POST" name="form1" class="form-horizontal" >
                        <div class="panel panel-default">
                            
                            <div class="titulo-cad">
                                <H1 class="titulo-cad">Cadastro</H1>
                                <input type="hidden" name="id" value="<?php
                                // Preenche o id no campo id com um valor "value"
                                echo (isset($id) && ($id != null || $id != "")) ? $id : '';

                                ?>" />
                                <div class="form-group">
                                    <label for='email' class="col-sm-1 control-label" ></label>
                                    <div class="col-md-5">
                                        <input class="input" type="email" name='email' placeholder="Email" value="<?php
                                        // Preenche o nome no campo empresa com um valor "value"
                                        echo (isset($email) && ($email!= null || $email != "")) ? $email : '';

                                        ?>" class="form-control"/>
                                    </div>
                                    <label for="senha" class="col-sm-1 control-label"></label>
                                    <div class="col-md-4">
                                        <input class="input" type="password" name="senha" placeholder="Senha" value="<?php
                                        // Preenche o servico no campo contato com um valor "value"
                                        echo (isset($senha) && ($senha != null || $senha != "")) ? $senha : '';

                                        ?>" class="form-control" />
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label for="celular" class="col-sm-1 control-label"></label>
                                    <div class="col-md-4">
                                        <input class="input" type="text" name="celular" placeholder="Celular" value="<?php
                                        // Preenche o email no campo contato com um valor "value"
                                        echo (isset($celular) && ($celular != null || $celular != "")) ? $celular : '';

                                        ?>" class="form-control" />
                                    </div>
                                    <label for="endereco" class="col-sm-2 control-label"></label>
                                    <div class="col-md-4">
                                        <input class="input" type="text" name="endereco" placeholder="Endereco" value="<?php
                                        // Preenche o email no campo funcao com um valor "value"
                                        echo (isset($endereco) && ($endereco != null || $endereco != "")) ? $endereco : '';

                                        ?>" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nome" class="col-sm-1 control-label"></label>
                                    <div class="col-md-4">
                                        <input class="input" type="text" name="nome" placeholder="Nome" value="<?php
                                        // Preenche o celular no campo email com um valor "value"

                                        echo (isset($nome) && ($nome != null || $nome != "")) ? $nome : '';

                                        ?>" class="form-control" />
                                    </div>
                                    <label for="sobrenome" class="col-sm-2 control-label"></label>
                                    <div class="col-md-2">
                                        <input class="input" type="text" name="sobrenome" placeholder="userAddress" value="<?php
                                        // Preenche o celular no campo telefone com um valor "value"
                                        echo (isset($sobrenome) && ($sobrenome != null || $sobrenome != "")) ? $sobrenome : '';

                                        ?>" class="form-control" />
                                    
                                </div>
                                <br>
                                
                                <button class="btn-cad" > Cadastre-se </button>
                                    
                                
                            </div>
                            </div>
                            
                
            </article>
        </div>
 </body>
</html>