<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = filter_input(INPUT_POST, 'id');
    $nome = filter_input(INPUT_POST, 'nome');
    $sobrenome = filter_input(INPUT_POST, 'sobrenome');
    $inicio_contrato = filter_input(INPUT_POST, 'inicio_contrato');
    $genero = filter_input(INPUT_POST, 'genero');
    $salario = filter_input(INPUT_POST, 'salario');
    $posicao = filter_input(INPUT_POST, 'posicao');
    
} else if (!isset($id)) {

    $id = (isset($_GET["id"]) && $_GET["id"] != null) ? $_GET["id"] : "";
}
 
try {
    $conexao = new PDO("mysql:host=localhost:3307;dbname=icandy", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("set names utf8");
} catch (PDOException $erro) {
    echo "<p class=\"bg-danger\">Erro na conexão:" . $erro->getMessage() . "</p>";
}


if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "save" && $nome != "") {
    try {
        if ($id != "") {
            $stmt = $conexao->prepare("UPDATE employees SET nome=?, sobrenome=?,inicio_contrato=?, genero=?, salario=?, posicao=? WHERE id = ?");
            $stmt->bindParam(7,$id);
        } else {
            $stmt = $conexao->prepare("INSERT INTO employees (nome, sobrenome, inicio_contrato, genero, salario, posicao) VALUES (?, ?, ?, ?, ?, ?)");
        }
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $sobrenome);
        $stmt->bindParam(3, $inicio_contrato);
        $stmt->bindParam(4, $genero);
        $stmt->bindParam(5, $salario);
        $stmt->bindParam(6, $posicao);

        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                echo "<p class=\"bg-success\">Dados cadastrados com sucesso!</p>";
                $id = null;
                $nome = null;
                $sobrenome = null;
                $inicio_contrato = null;
                $genero= null;
                $salario = null;
                $posicao = null;
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
        $stmt = $conexao->prepare("SELECT * FROM employees WHERE id = ?");
        $stmt->bindParam(1, $id , PDO::PARAM_INT);
        if ($stmt->execute()) {
            $rs = $stmt->fetch(PDO::FETCH_OBJ);
            $id = $rs->id;
            $nome = $rs->nome;
            $sobrenome = $rs->sobrenome;
            $inicio_contrato = $rs->inicio_contrato;
            $genero = $rs->genero;
            $salario = $rs->salario;
            $posicao = $rs->posicao;
            
        } else {
            echo "<p class=\"bg-danger\">Erro: Não foi possível executar a declaração sql</p>";
        }
    } catch (PDOException $erro) {
        echo "<p class=\"bg-danger\">Erro: " . $erro->getMessage() . "</p>";
    }
}

if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "del" && $id  != "") {
    try {
        $stmt = $conexao->prepare("DELETE FROM employees WHERE id = ?");
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