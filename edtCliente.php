<?php
    include 'config.php';

    $nome = trim($_POST['nome']); 
    $cpf = trim($_POST['cpf']);
    $endereco = trim($_POST['endereco']);
    $telefone = $_POST['telefone'];
    $id = $_POST['id'];
    
    if (!empty($id) && !empty($nome) && !empty($cpf) && !empty($endereco) && !empty($telefone)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE cad_cliente SET nome=?,cpf=?,endereco=?, telefone=? WHERE idCLiente=?";
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $cpf, $endereco, $telefone, $id));
        Conexao::desconectar(); 
    }

   header("location:verCliente.php");
?> 