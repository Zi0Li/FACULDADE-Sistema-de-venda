<?php
include 'config.php';
if (!isset($_SESSION)) session_start();

$pdo = Conexao::conectar();
$sql = "select * from cad_cliente order by idCliente;";
$lstCliente = $pdo->query($sql);

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
    <title>Ver cliente</title>
</head>

<body>

    <div class="container ">
        <h1 class="purple darken-3 center-align">CLIENTES</h1>
        <table class="striped">
            <tr>
                <a class="btn-floating btn-small waves-effect waves-light grey darken-1 accent-3" onclick="JavaScript:location.href='menuPesquisa.php'">
                    <i class="material-icons">keyboard_backspace</i>
                </a>
            </tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>
                <a class="btn-floating btn-small waves-effect waves-light green accent-3" onclick="JavaScript:location.href='cad_cliente.php'">
                    <i class="material-icons">add_circle</i>
            </th>
            </tr>

            <?php
            foreach ($lstCliente as $row) {
            ?>
                <tr>
                    <td><?php echo $row['idCliente'] ?></td>
                    <td><?php echo $row['nome'] ?></td>
                    <td><?php echo $row['cpf'] ?></td>
                    <td><?php echo $row['endereco'] ?></td>
                    <td><?php echo $row['telefone'] ?></td>
                    <td>
                        <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:location.href='delCliente.php?idCliente=' + 
                           <?php echo $row['idCliente']; ?>">
                            <i class="material-icons">clear</i>
                        </a>
                        <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='editar_cliente.php?idCliente=' + 
                           <?php echo $row['idCliente']; ?>">
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