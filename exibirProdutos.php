<?php include('sidenav.php'); ?>
<html>
<head>
    <link rel = "stylesheet" type="text/css" href="./css/cssListar.css">
</head>
<body>
    <div class="panel-footer">
                                
                <div class="row">
                    <div class="panel panel-default">
                        <table id="customers">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Preço</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                try {
                                    $conexao = new PDO("mysql:host=localhost;dbname=icandy", "root", "AntoBat**7");
                                    $stmt = $conexao->prepare("SELECT * FROM produtos");
                                    if ($stmt->execute()) {
                                        while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {

                                            ?><tr>
                                                <td><?php echo $rs->nome; ?></td>
                                                <td><?php echo $rs->preco; ?></td>
                                                <td><center>
                                            <a href="?act=del&id_produto=<?php echo $rs->id_produto; ?>" > <button class="btn-cad " > Excluir </button> </a>
                                        </center>
                                        </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo "Erro: Não foi possível recuperar os dados do banco de dados";
                                }
                            } catch (PDOException $erro) {
                                echo "Erro: " . $erro->getMessage();
                            }

                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>