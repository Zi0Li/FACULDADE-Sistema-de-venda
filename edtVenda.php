<?php
    include 'config.php';
    echo $_POST['idVenda'];
    $idCliente = $_POST['idCliente']; 
    $nomeCliente = trim($_POST['nomeCliente']);
    $idProduto = $_POST['idProduto'];
    $nomeProduto = trim($_POST['nomeProduto']);
    $Qntd_vendida = trim($_POST['Qntd_vendida']);
    $ValorTotal = trim($_POST['ValorTotal']);
    $idVenda = trim($_POST['idVenda']);
    
    if (!empty($idCliente) && !empty($nomeCliente) && !empty($idProduto) && !empty($nomeProduto) && !empty($Qntd_vendida) && !empty($ValorTotal)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE vendas SET idCliente=?, nomeCliente=?, idProduto=?, nomeProduto=?, Qntd_vendida=?, ValorTotal=? WHERE idVenda=?";
        $query = $pdo->prepare($sql);
        $query->execute(array($idCliente, $nomeCliente, $idProduto, $nomeProduto, $Qntd_vendida, $ValorTotal, $idVenda));
        Conexao::desconectar(); 
    }

   header("location:verVenda.php");
?> 