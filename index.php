<!DOCTYPE html>
<html lang="pt-br">
<head>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Formulario</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="formCss.css" rel="stylesheet">
    
</head>
<body>


    <!-- <img class="foto_fundo" src="imagens/ESTOQUE.png"> -->

    <div class="form_cd">
    <h2>LOGIN</h2>
    <form method = "POST" action = "validar.php">
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" name="senha" class="validate">
          <label for="password">Senha</label>
        </div>
      </div>
      <div>
      <button type="button" name="btnVoltar" onclick="JavaScript:location.href='cad_admin.php'">Cadastrar-me</button>  
      <input type="submit" name="acao" value="Login"></div>
        <div><input type="hidden" name="form" value="f_form"></div>
    </form>
  </div>
</body>
</html>