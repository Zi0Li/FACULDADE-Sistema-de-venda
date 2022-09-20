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
    <title>Cadastro Clientes</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/img//undraw_shopping_re_3wst.svg" alt="">
        </div>
        <div class="form">
            <form action="#" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastrar Cliente</h1>
<?php 
    if(isset($_POST['acao']) && $_POST['form'] == 'f_form'){
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        Form::cadastrar_cliente($nome, $cpf, $endereco, $telefone);
        Form::alert('erro', 'Cliente cadastrado com sucesso');
        }
?>
                     <div class="login-button">  
                            <button type="button" name="btnVoltar" onclick="JavaScript:location.href='verCliente.php'">Cancelar</button>
                        </div>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="first_name">Nome</label>
                        <input id="first_name" name="nome" type="text" class="validate" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <div class="input-box">
                        <label for="cpf">CPF</label>
                        <input id="cpf" type="text" name="cpf" class="validate" placeholder="Digite seu cpf" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="telefone" type="text" name="telefone" class="validate" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="endereco">Endereço</label>
                        <input id="endereco" type="text" name="endereco" class="validate" placeholder="Digite seu primeiro nome" required>
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