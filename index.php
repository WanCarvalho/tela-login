<?php

include('./scripts/conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/807d81c62f.js" crossorigin="anonymous"></script>

    <!--<link rel="sortcut icon" href="./image/Logo TVin.PNG" type="image/x-icon" />-->
    <link rel="stylesheet" href="../style/login.css">
    <title>Login</title>
</head>

<body>

    <div class="container">

        <div class="campos_login">
            <i class="fa-sharp fa-solid fa-circle-user fa-3x"></i>

            <h4 class="titulo-login">Fazer Logon</h4>

            <form action="" method="POST">

                <input type="email" name="email" class="form-control" placeholder="E-mail" required><br>
                <input type="password" name="senha" class="form-control" placeholder="Senha" required><br>

                <div class="botao_submit">
                    <button value="Salvar" type="submit" class="btn btn-primary col-12"><strong>Entrar</strong></button>
                </div>

            </form>
        </div>
        <br>
        <a href="./cadastro.php">Cadastrar usuário</a>

    </div>

</body>

</html>