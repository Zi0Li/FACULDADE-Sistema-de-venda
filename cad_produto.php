<?php 

    include ('config.php');
    Conexao::conectar();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Cadastro Produtos</title>
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
                        <h1>Cadastrar Produtos</h1>
<?php 
    if(isset($_POST['acao']) && $_POST['form'] == 'f_form'){
        $nome = $_POST['nome'];
        $estoque = $_POST['estoque'];
        $valor = $_POST['valor'];
        $descricao = $_POST['descricao'];
        Form::cadastrar_prod($nome, $estoque, $valor, $descricao);
        Form::alert('erro', 'Produto cadastrado com sucesso');
    }
?>
                     <div class="login-button">  
                            <button type="button" name="btnVoltar" onclick="JavaScript:location.href='menuCadastros.php'">Cancelar</button>
                        </div>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome do produto</label>
                        <input id="nome" name="nome" type="text" class="validate" placeholder="Digite o nome do produto" required>
                    </div>

                    <div class="input-box">
                        <label for="estoque">Estoque</label>
                        <input id="estoque" type="number" name="estoque" class="validate" placeholder="Digite a qtd do produto" required>
                    </div>

                    <div class="input-box">
                        <label for="valor">Valor</label>
                        <input id="valor" type="number" name="valor" class="validate" placeholder="Digite o preço de venda" required>
                    </div>

                    <div class="input-box">
                        <label for="descricao">Descrição</label>
                        <input id="descricao" type="text" name="descricao" class="validate" placeholder="Digite a descrição do produto" required>
                    </div>

                </div>

                <div class="continue-button">
                      <button type="submit" name="acao" value="Cadastrar">Cadastrar </button></div>
                        <div><input type="hidden" name="form" value="f_form"></div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>