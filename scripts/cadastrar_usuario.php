<?php

$hostname = "localhost";
$bancodedados = "provaeco";
$usuario = "root";
$senha = "";

date_default_timezone_set("America/Fortaleza");

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    die("Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}

if ((isset($_POST['email']))) {

    //Abaixo variáveis que vão extrair dados do formulario
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //Verifica se o e-mail já consta no banco de dados
    $verifica_se_tem_cadastro = "SELECT email FROM usuarios WHERE email = " . $email;

    //Pegar dados do formulário e inserir no banco
    $string_sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";

    //insere os novos usuários no banco
    $insert_usuario = mysqli_query($mysqli, $string_sql);

    //condicional para verificar se o usuário foi inserido no banco
    if(mysqli_affected_rows($mysqli)>0){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
        echo "<div class='alert alert-success' role='alert'>
                Usuário cadastrado com sucesso!
            </div>";
    } else {
        echo "<div class='alert alert-danger' role='alert'>
                Este e-mail já foi cadastrado. Por favor insira um e-mail diferente.
            </div>";
    }
    
}

mysqli_close($mysqli);
