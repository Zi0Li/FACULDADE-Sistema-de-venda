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
    <title>Cadastra-se</title>
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
                        <h1>Cadastra-se</h1>
<?php 
    if(isset($_POST['acao']) && $_POST['form'] == 'f_form'){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $senha = md5($senha);
        Form::cadastrar($nome, $cpf, $telefone, $email, $senha);
        Form::alert('erro', 'Usuario cadastrado com sucesso');
    }
?>
                     <div class="login-button">  
                            <button type="button" name="btnVoltar" onclick="JavaScript:location.href='index.php'">Cancelar</button>
                        </div>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome</label>
                        <input id="nome" name="nome" type="text" class="validate" placeholder="Digite o seu nome" required>
                    </div>

                    <div class="input-box">
                        <label for="cpf">CPF</label>
                        <input id="cpf" type="number" name="cpf" class="validate" placeholder="Digite o seu cpf" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" class="validate" placeholder="Digite a descrição do produto" required>
                    </div>

                    <div class="input-box">
                        <label for="telefone">Celular</label>
                        <input id="telefone" type="text" name="telefone" class="validate" placeholder="(xx) xxxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="senha" class="validate" placeholder="Digite a descrição do produto" required>
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