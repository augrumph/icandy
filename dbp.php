<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_produto = filter_input(INPUT_POST, 'id_produto');
    $nome = filter_input(INPUT_POST, 'nome');
    $preco = filter_input(INPUT_POST, 'preco');
    $imagem = filter_input(INPUT_POST, 'imagem');
} else if (!isset($id_produto)) {

    $id_produto = (isset($_GET["id_produto"]) && $_GET["id_produto"] != null) ? $_GET["id_produto"] : "";
}
 
try {
    $conexao = new PDO("mysql:host=localhost;dbname=icandy", "root", "AntoBat**7");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("set names utf8");
} catch (PDOException $erro) {
    echo "<p class=\"bg-danger\">Erro na conexão:" . $erro->getMessage() . "</p>";
}


if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "save" && $nome != "") {
    try {
        if ($id_produto != "") {
            $stmt = $conexao->prepare("UPDATE produtos SET nome=?,preco=?, imagem=? WHERE id_produto = ?");
            $stmt->bindParam(4,$id_produto);
        } else {
            $stmt = $conexao->prepare("INSERT INTO produtos (nome, preco, imagem) VALUES (?, ?, ?)");
        }
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $preco);
        $stmt->bindParam(3, $imagem);

        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                echo "<p class=\"bg-success\">Dados cadastrados com sucesso!</p>";
                $id_produto = null;
                $nome = null;
                $preco = null;
                $imagem = null;
            } else {
                echo "<p class=\"bg-danger\">Erro ao tentar efetivar o cadastro do produto</p>";
            }
        } else {
            echo "<p class=\"bg-danger\">Erro: Não foi possível executar a declaração sql</p>";
        }
    } catch (PDOException $erro) {
        echo "<p class=\"bg-danger\">Erro: " . $erro->getMessage() . "</p>";
    }
}

if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "upd" && $id_produto != "") {
    try {
        $stmt = $conexao->prepare("SELECT * FROM produtos WHERE id_produto = ?");
        $stmt->bindParam(1, $id_produto , PDO::PARAM_INT);
        if ($stmt->execute()) {
            $rs = $stmt->fetch(PDO::FETCH_OBJ);
            $id_produto = $rs->id_produto;
            $nome = $rs->nome;
            $preco = $rs->preco;
            $imagem = $rs->imagem;
        } else {
            echo "<p class=\"bg-danger\">Erro: Não foi possível executar a declaração sql</p>";
        }
    } catch (PDOException $erro) {
        echo "<p class=\"bg-danger\">Erro: " . $erro->getMessage() . "</p>";
    }
}

if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "del" && $id_produto  != "") {
    try {
        $stmt = $conexao->prepare("DELETE FROM produtos WHERE id_produto = ?");
        $stmt->bindParam(1, $id_produto , PDO::PARAM_INT);
        if ($stmt->execute()) {
            echo "<p class=\"bg-success\">Produto foi excluído com êxito</p>";
            $id_produto  = null;
        } else {
            echo "<p class=\"bg-danger\">Erro: Não foi possível executar a declaração sql</p>";
        }
    } catch (PDOException $erro) {
        echo "<p class=\"bg-danger\">Erro: " . $erro->getMessage() . "</a>";
    }
}
?>