<?php 

    $id = trim($_GET['idVenda']); 
   
   include 'config.php';
    if (!empty($id) ){
        $sql = "DELETE from vendas WHERE idVenda=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $query->execute(array($id));
        Conexao::desconectar(); 
    }

    header("location:verVenda.php");

?>