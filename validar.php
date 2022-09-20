<?php 

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    include ('config.php');
    $pdo = Conexao::conectar();
    $sql = "select * from cad_admin where email LIKE ?";
    $query = $pdo->prepare($sql);
    $query->execute (array($email));
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    Conexao::desconectar();

    if(md5($senha) == $dados['senha']){
        session_start();
        $_SESSION['email'] = $dados['email'];
        $_SESSION['senha'] = $dados['senha'];
                header("location:menu.php");
       }else{
        echo "Senha ou Email Inválidos";
       }

 ?>
 