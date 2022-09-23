<?php
    include 'config.php';

    $nome = trim($_POST['nome']); 
    $estoque = trim($_POST['estoque']);
    $valor = trim($_POST['valor']);
    $descricao = $_POST['descricao'];
    $id = $_POST['id'];

    $valor=str_replace(",",".",$valor);

    if (!empty($id) && !empty($nome) && !empty($descricao) && !empty($valor) && !empty($estoque)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE cad_produto SET nome=?,descricao=?,valor=?, estoque=? WHERE id=?";
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $descricao, $valor, $estoque, $id));
        Conexao::desconectar(); 
    }

    header("location:verProdutos.php");
?> 