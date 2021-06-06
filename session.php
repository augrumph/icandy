<?php
    $conexao = new PDO("mysql:host=localhost:3307;dbname=icandy", "root", "");
    if(isset($_POST["add_carrinho"])){
        if(isset($_SESSION["shopping_cart"])){
            $item_array_id = array_column($_SESSION["shopping_cart"], "item_id_produto");
            if(!in_array($_GET["id_produto"], $item_array_id)){
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                    'item_id_produto' => $_GET["id_produto"],
                    'item_nome' => $_POST["hidden_nome"],
                    'item_preco' => $_POST["hidden_preco"],
                    'item_quantidade' => $_POST["quantidade"]
                );
                $_SESSION["shopping_cart"][$count] = $item_array;
            }
            else{
                echo'<script>alert("Produto já adicionado")</script>';
                echo'<script>window.location="produtos.php"</script>';
            }
        }
        else{
            $item_array = array(
                'item_id_produto' => $_GET["id_produto"],
                'item_nome' => $_POST["hidden_nome"],
                'item_preco' => $_POST["hidden_preco"],
                'item_quantidade' => $_POST["quantidade"]
            );
            $_SESSION["shopping_cart"][0] = $item_array;
        }
    }

    if(isset($_GET["action"])){
        if ($_GET["action"] == "delete") {
            foreach($_SESSION["shopping_cart"] as $keys => $values){
                if($values["item_id_produto"] == $_GET["id_produto"]) {
                    unset($_SESSION["shopping_cart"][$keys]);
                    echo '<script>alert("Produto removido")</script>';
                    echo '<script>window.location="carrinho.php"</script>';
                }
            }
        }

        if ($_GET["action"] == "limpar") {
            foreach($_SESSION["shopping_cart"] as $keys => $values){
                unset($_SESSION["shopping_cart"][$keys]);
            }
            echo '<script>alert("Todos os produtos foram removidod")</script>';
        }
    }

?>