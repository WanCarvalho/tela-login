<?php

    include('./scripts/cadastrar_usuario.php');
    
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--<link rel="sortcut icon" href="./image/Logo TVin.PNG" type="image/x-icon" />-->
    <link rel="stylesheet" href="./style/cadastro.css">

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/807d81c62f.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>Cadastro</title>
</head>

<body>

    <div class="container">

        <div class="campos_login">
            <i class="fa-solid fa-user-plus fa-3x"></i>

            <h4 class="titulo-login">Cadastrar usuário</h4>

            <form action="" method="POST">

                <label for="email">Digite um e-mail válido:</label>
                <input type="email" name="email" class="form-control" placeholder="E-mail" required><br>

                <label for="password">Digite uma senha:</label>
                <input type="password" name="senha" class="form-control" placeholder="Senha" required><br>

                <div class="botao_submit">
                    <button value="Salvar" type="submit" class="btn btn-primary col-12"><strong>Cadastrar</strong></button>
                </div>

            </form>
        </div>
        <br>
        <a href="./index.php">Voltar para login</a>

    </div>

</body>

</html>