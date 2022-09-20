<?php
include 'config.php';
if (!isset($_SESSION)) session_start();

$pdo = Conexao::conectar();
$sql = "select * from vendas order by idVenda;";
$lstVenda = $pdo->query($sql);

Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ver Venda</title>
</head>

<body>
    <div class="container ">
        <h1 class="blue-grey lighten-1 center-align">VENDAS</h1>
        <table class="striped">
            <tr>
                <a class="btn-floating btn-small waves-effect waves-light grey darken-1 accent-3" onclick="JavaScript:location.href='menuProcurar.php'">
                    <i class="material-icons">keyboard_backspace</i>
                </a>
            </tr>
            <tr>
                <th>ID</th>
                <th>ID do Produto</th>
                <th>Nome do Produto</th>
                <th>ID do Cliente</th>
                <th>Nome do Cliente</th>
                <th>Quantidade Vendida</th>
                <th>Valor da Venda</th>
                <th>
                    <a class="btn-floating btn-small waves-effect waves-light light-green accent-3" onclick="JavaScript:location.href='cadastro_venda.php'">
                        <i class="material-icons">add_circle</i>
                </th>
            </tr>

            <?php
            foreach ($lstVenda as $row) {
            ?>
                <tr>
                    <td><?php echo $row['idVenda'] ?></td>
                    <td><?php echo $row['idProduto'] ?></td>
                    <td><?php echo $row['nomeProduto'] ?></td>
                    <td><?php echo $row['idCliente'] ?></td>
                    <td><?php echo $row['nomeCliente'] ?></td>
                    <td><?php echo $row['Qntd_vendida'] ?></td>
                    <td><?php echo $row['ValorTotal'] ?></td>
                    <td>
                        <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:location.href='delVenda.php?idVenda=' + 
                           <?php echo $row['idVenda']; ?>">
                            <i class="material-icons">clear</i>
                        </a>
                        <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='frmEdtVenda.php?idVenda=' + 
                           <?php echo $row['idVenda']; ?>">
                            <i class="material-icons">edit</i>
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    </br>
    </br>
</body>

</html>