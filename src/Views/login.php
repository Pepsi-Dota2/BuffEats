<?php
ini_set('default_charset', 'utf-8');

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffEats | Login</title>
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <main>
        <div id="div_form_login">
            <form method="post" id="formulario" action="../Backend/conexaoLogin.php">
                <div id="return">
                    <a href="home-deslogado.php">
                        <span class="material-symbols-outlined">
                            arrow_back
                        </span>
                    </a>
                </div>
                <h1 class="login_title">Login</h1>
                <label class="login_subtitle">Email:</label>
                <input type="text" name="email" id="username" class="input_box">
                <label class="login_subtitle">Senha:</label>
                <input type="password" name="password" id="password" class="input_box">
                <div id="container_login">
                    <!-- Removido temporariamente para futura implementação
                        Autor: Gabriel Siriani -->
                    <!-- <label class="container_conectado">Mantenha-me conectado
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <label class="login_senha"><a href="../RecSenha/recsenha.php" class="none_senha"><B>Esqueceu a senha?</B></a></label> -->
                </div>
                <button type="submit" name="submit" class="button_submit">ENTRAR</button>
                <label class="login_inscrever"><a href="decisao.php" class="none_inscrever">Não tem uma conta?
                        <B>Inscreva-se!</B></a></label>
                <div id="container_gmail">
                    <!-- <img src="img/Icon_Google.svg" width="25px">
                    <label class="login_gmail">LOGAR COM O GMAIL</label> -->
                </div>
                <div id="container_termos">
                    <label class="login_termos"><a href="privacidade.php" class="none_termos">Termos de
                            privacidade</a></label>
                </div>
            </form>
        </div>
    </main>




</body>

</html>