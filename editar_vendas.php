<?php

include('config.php');
$id = $_GET['idVenda'];
$pdo = Conexao::conectar();
$sql = 'select * from vendas where idVenda=?';
$query = $pdo->prepare($sql);
$query->execute(array($id));
$lstVenda = $query->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Editar vendas</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/img//cad_produto.png" alt="">
        </div>
        <div class="form">
        <form class="#" method="POST" action="edtVenda.php">
            <div class="form-header">
                <div class="title">
                    <h1>Editar Produto</h1>
                <div>
                    <h1 class="black-text bold"><b>ID: <?php echo $id; ?> </b> </h1>
                    <input type="hidden" name="idVenda" id="id" value="<?php echo $id; ?>">
                </div>
                <div class="login-button">
                    <button type="button" name="btnVoltar" onclick="JavaScript:location.href='verCliente.php'">Cancelar</button>
                </div>
                </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="idCliente">Id do Cliente</label>
                        <input id="idCliente" name="idCliente" type="text" class="validate" value="<?= $lstVenda['idCliente']; ?>">
                        
                    </div>
                    <div class="input-box">
                        <label for="nomeCliente">Nome do Cliente</label>
                        <input id="nomeCliente" type="text" name="nomeCliente" class="validate" value="<?= $lstVenda['nomeCliente']; ?>">
                        
                    </div>


                    <div class="input-box">
                        <label for="idProduto">Id do Produto</label>
                        <input id="idProduto" type="text" name="idProduto" class="validate" value="<?= $lstVenda['idProduto']; ?>">
                        
                    </div>


                    <div class="input-box">
                        <label for="nomeProduto">Nome do Produto</label>
                        <input id="nomeProduto" type="text" name="nomeProduto" class="validate" value="<?= $lstVenda['nomeProduto']; ?>">
                        
                    </div>


                    <div class="input-box">
                        <label for="Qntd_vendida">Quantidade Vendida</label>
                        <input id="Qntd_vendida" type="text" name="Qntd_vendida" class="validate" value="<?= $lstVenda['Qntd_vendida']; ?>">
                        
                    </div>


                    <div class="input-box">
                        <label for="ValorTotal">Valor da Venda</label>
                        <input id="ValorTotal" type="text" name="ValorTotal" class="validate" value="<?= $lstVenda['ValorTotal']; ?>">
                        
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