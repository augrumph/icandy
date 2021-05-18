<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = filter_input(INPUT_POST, 'id');
    $email = filter_input(INPUT_POST, 'email');
    $senha = filter_input(INPUT_POST, 'senha');
    $celular = filter_input(INPUT_POST, 'celular');
    $endereco = filter_input(INPUT_POST, 'endereco');
    $nome = filter_input(INPUT_POST, 'nome');
    $sobrenome = filter_input(INPUT_POST, 'sobrenome');
   
    
} else if (!isset($id)) {

    $id = (isset($_GET["id"]) && $_GET["id"] != null) ? $_GET["id"] : "";
}
 

try {
    $conexao = new PDO("mysql:host=localhost;dbname=icandy", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("set names utf8");
} catch (PDOException $erro) {
    echo "<p class=\"bg-danger\">Erro na conexão:" . $erro->getMessage() . "</p>";
}


if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "save" && $email != "") {
    try {
        if ($id != "") {
            $stmt = $conexao->prepare("UPDATE user SET email=?, senha=?,celular=?, endereco=?, nome=?, sobrenome=? WHERE id = ?;");
            $stmt->bindParam(7,$id);
        } else {
            $stmt = $conexao->prepare("INSERT INTO user(email, senha, celular,endereco,nome, sobrenome) VALUES (?, ?, ?, ?, ?, ?);");
        }
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $senha);
        $stmt->bindParam(3, $celular);
        $stmt->bindParam(4, $endereco);
        $stmt->bindParam(5, $nome);
        $stmt->bindParam(6, $sobrenome);
       

    
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                echo "<p class=\"bg-success\">Dados cadastrados com sucesso!</p>";
                $id = null;
                $email = null;
                $senha = null;
                $celular = null;
                $endereco = null;
                $nome = null;
                $sobrenome= null;
                
            } else {
                echo "<p class=\"bg-danger\">Erro ao tentar efetivar cadastro</p>";
            }
        } else {
            echo "<p class=\"bg-danger\">Erro: Não foi possível executar a declaração sql</p>";
        }
    } catch (PDOException $erro) {
        echo "<p class=\"bg-danger\">Erro: " . $erro->getMessage() . "</p>";
    }
}


if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "upd" && $id != "") {
    try {
        $stmt = $conexao->prepare("SELECT * FROM user WHERE id = ?");
        $stmt->bindParam(1, $id , PDO::PARAM_INT);
        if ($stmt->execute()) {
            $rs = $stmt->fetch(PDO::FETCH_OBJ);
            $id = $rs->id;
            $email = $rs->email;
            $senha = $rs->senha;
            $celular = $rs->celular;
            $endereco = $rs->endereco;
            $nome = $rs->nome;
            $sobrenome = $rs->sobrenome;
            
        } else {
            echo "<p class=\"bg-danger\">Erro: Não foi possível executar a declaração sql</p>";
        }
    } catch (PDOException $erro) {
        echo "<p class=\"bg-danger\">Erro: " . $erro->getMessage() . "</p>";
    }
}


if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "del" && $id  != "") {
    try {
        $stmt = $conexao->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bindParam(1, $id , PDO::PARAM_INT);
        if ($stmt->execute()) {
            echo "<p class=\"bg-success\">Registo foi excluído com êxito</p>";
            $id  = null;
        } else {
            echo "<p class=\"bg-danger\">Erro: Não foi possível executar a declaração sql</p>";
        }
    } catch (PDOException $erro) {
        echo "<p class=\"bg-danger\">Erro: " . $erro->getMessage() . "</a>";
    }
}
?>