<?php
include('config.php');
$id = $_GET['idCliente'];
$pdo = Conexao::conectar();
$sql = 'select * from cad_cliente where idCliente=?';
$query = $pdo->prepare($sql);
$query->execute(array($id));
$lstCliente = $query->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Cadastro Clientes</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/img//undraw_shopping_re_3wst.svg" alt="">
        </div>
        <div class="form">
            <form class="#" method="POST" action="edtCliente.php">
                <div class="form-header">
                    <div class="title">
                        <h1>Editar Cliente</h1>
                        <div>
                            <h1 class="black-text bold"><b>ID: <?php echo $id; ?> </b> </h1>
                            <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                        </div>
                        <div class="login-button">
                            <button type="button" name="btnVoltar" onclick="JavaScript:location.href='verCliente.php'">Cancelar</button>
                        </div>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="first_name">Nome</label>
                        <input id="first_name" name="nome" type="text" class="validate" value="<?= $lstCliente['nome']; ?>">
                    </div>

                    <div class="input-box">
                        <label for="cpf">CPF</label>
                        <input id="cpf" type="text" name="cpf" class="validate" value="<?= $lstCliente['cpf']; ?>">
                    </div>

                    <div class="input-box">
                        <label for="telefone">Celular</label>
                        <input id="telefone" type="text" name="telefone" class="validate" value="<?= $lstCliente['telefone']; ?>">
                    </div>

                    <div class="input-box">
                        <label for="endereco">Endereço</label>
                        <input id="endereco" type="text" name="endereco" class="validate" value="<?= $lstCliente['endereco']; ?>">
                    </div>

                </div>

                <div class="continue-button">
                    <button type="submit" name="action" value="Editar">Editar</button>
                    <input type="hidden" name="form" value="f_form"></div>
                </div>
        </form>
    </div>
    </div>
</body>

</html>