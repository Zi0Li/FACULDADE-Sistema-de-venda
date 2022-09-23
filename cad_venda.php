<?php 

    include ('config.php');
    include ('attEstoque.php');
    Conexao::conectar();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Cadastro Vendas</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/img//cad_produto.png" alt="">
        </div>
        <div class="form">
            <form action="#" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastrar Vendas</h1>
<?php 
    if(isset($_POST['acao']) && $_POST['form'] == 'f_form'){
        $idCliente = $_POST['idCliente'];
        $nomeCliente = $_POST['nomeCliente'];
        $idProduto = $_POST['idProduto'];
        $nomeProduto = $_POST['nomeProduto'];
        $Qntd_vendida = $_POST['Qntd_vendida'];
        $ValorTotal = $_POST['ValorTotal'];
        Atualizacao::attEstoque($idProduto, $Qntd_vendida);
        Form::alert('erro', 'Estoque atualizado com sucesso');
        Form::cadastrar_venda($idCliente, $idProduto, $Qntd_vendida, $nomeProduto, $nomeCliente, $ValorTotal);
        Form::alert('erro', 'Venda cadastrado com sucesso');
    }
?>
                     <div class="login-button">  
                            <button type="button" name="btnVoltar" onclick="JavaScript:location.href='menuCadastros.php'">Cancelar</button>
                        </div>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="idCliente">Codigo do cliente</label>
                        <input id="idCliente" name="idCliente" type="text" placeholder="Digite o cod do cliente" class="validate">
                    </div>

                    <div class="input-box">
                        <label for="nomeCliente">Nome do cliente</label>
                        <input id="nomeCliente" type="text" name="nomeCliente" placeholder="Digite o nome do cliente" class="validate">
                    </div>

                    <div class="input-box">
                        <label for="idProduto">Codigo do produto</label>
                        <input id="idProduto" type="text" name="idProduto" placeholder="Digite o cod do produto" class="validate">
                    </div>

                    <div class="input-box">
                        <label for="nomeProduto">Nome do produto</label>
                        <input id="nomeProduto" type="text" name="nomeProduto" placeholder="Digite o nome do produto" class="validate">
                    </div>

                    <div class="input-box">
                        <label for="Qntd_vendida">Quantidade vendida</label>
                        <input id="Qntd_vendida" type="number" name="Qntd_vendida" placeholder="Digite a qtd vendida" class="validate">
                    </div>

                    <div class="input-box">
                        <label for="ValorTotal">Valor da venda</label>
                        <input id="ValorTotal" type="number" name="ValorTotal" placeholder="Digite o valor da venda" class="validate">
                    </div>

                </div>

                <div class="continue-button">
                      <button type="submit" name="acao" value="Cadastrar">Cadastrar</button></div>
                        <div><input type="hidden" name="form" value="f_form"></div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>