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
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                
                                try {
                                    $stmt = $conexao->prepare("SELECT * FROM users");
                                    if ($stmt->execute()) {
                                        while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {

                                            ?><tr>
                                                <td><?php echo $rs->name; ?></td>
                                                <td><?php echo $rs->email; ?></td>
                                                <td><?php echo md5($rs->password); ?></td>
                                               
                                                <td><center>
                                            <a href="?act=del&id=<?php echo $rs->id; ?>" > <button class="btn-cad " > Excluir </button> </a>
                                            
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
 </body>
</html>