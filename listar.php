<?php include('sidenav.php'); ?>
<html>
<head>
    <link rel = "stylesheet" type="text/css" href="./css/cssListar.css">
</head>
<body>
    <?php require('./db.php'); ?>
    
    <div class="panel-footer">
                                
                <div class="row">
                    <div class="panel panel-default">
                        <table id="customers">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Sobrenome</th>
                                    <th>Contrato</th>
                                    <th>Genero</th>
                                    <th>Salario</th>
                                    <th>Cargo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                try {
                                    $stmt = $conexao->prepare("SELECT * FROM employees");
                                    if ($stmt->execute()) {
                                        while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {

                                            ?><tr>
                                                <td><?php echo $rs->nome; ?></td>
                                                <td><?php echo $rs->sobrenome; ?></td>
                                                <td><?php echo $rs->inicio_contrato; ?></td>
                                                <td><?php echo $rs->genero; ?></td>
                                                <td><?php echo $rs->salario; ?></td>
                                                <td><?php echo $rs->posicao; ?></td>
                                                <td><center>
                                            <a href="?act=del&id=<?php echo $rs->id; ?>" > <button class="btn-cad " > Excluir </button> </a>
                                        </center>
                                        </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo "Erro: N??o foi poss??vel recuperar os dados do banco de dados";
                                }
                            } catch (PDOException $erro) {
                                echo "Erro: " . $erro->getMessage();
                            }

                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>