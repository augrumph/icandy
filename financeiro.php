<?php require('userdb.php'); ?>
<?php include('sidenav.php'); ?>
<!DOCTYPE html>
<html  lang="pt-br">
<head>
    
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" >
        <link rel = "stylesheet" type="text/css" href="./css/cssListar.css">
   
</head>
<body> 
                <div class="row">
                    <div class="panel panel-default">
                        <table id="customers">
                            <thead>
                                <tr>
                                    <th>PRODUTO</th>
                                    <th>QUANTIDADE</th>
                                    <th>TOTAL</th>
                                    <th>USUARIO</th>
                                    <
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                try {
                                    $stmt = $conexao->prepare("SELECT * FROM nota");
                                    if ($stmt->execute()) {
                                        while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {

                                            ?><tr>
                                                <td><?php echo $rs->nome; ?></td>
                                                <td><?php echo $rs->quantidade; ?></td>
                                                <td><?php echo $rs->total; ?></td>
                                                <td><?php echo $rs->users_id; ?></td>
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
 </body>
</html>