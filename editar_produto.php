<?php

include('config.php');
$id = $_GET['id'];
$pdo = Conexao::conectar();
$sql = 'select * from cad_produto where id=?';
$query = $pdo->prepare($sql);
$query->execute(array($id));
$lstProduto = $query->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Editar produtos</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/img//cad_produto.png" alt="">
        </div>
        <div class="form">
            <form class="#" method="POST" action="edtProduto.php">
                <div class="form-header">
                    <div class="title">
                        <h1>Editar Produto</h1>
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
                        <label for="first_name">Nome do produto</label>
                        <input id="first_name" name="nome" type="text" class="validate" value="<?= $lstProduto['nome']; ?>">
                    </div>

                    <div class="input-box">
                        <label for="estoque">Estoque</label>
                        <input id="estoque" type="text" name="estoque" class="validate" value="<?= $lstProduto['estoque']; ?>">
                    </div>

                    <div class="input-box">
                        <label for="valor">Valor de venda</label>
                        <input id="valor" type="text" name="valor" class="validate" value="<?= $lstProduto['valor']; ?>">
                    </div>

                    <div class="input-box">
                        <label for="descricao">Descrição</label>
                        <input id="descricao" type="text" name="descricao" class="validate" value="<?= $lstProduto['descricao']; ?>">
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