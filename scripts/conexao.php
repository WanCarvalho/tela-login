<?php

$hostname = "localhost";
$bancodedados = "provaeco";
$usuario = "root";
$senha = "";

date_default_timezone_set ("America/Fortaleza");

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli -> connect_errno) {
    die ("Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}/*else{
    echo "<h1>Conexão bem sucedida em $bancodedados.</h1>";
}*/
/*
$sql = 'INSERT INTO dados (solicitante, atendente, problema, situacao) VALUES 
($_GET['solicitante'], $_GET['atendente'], $_GET['problema'], $_GET['situacao'])';*/

if ((isset($_POST['email'])) || isset($_POST['senha'])){

    $email = $mysqli -> real_escape_string($_POST['email']);
    $senha = $mysqli -> real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli -> query($sql_code) or die("Falha em executar consulta SQL." . $mysqli -> error);

    $quantidade = $sql_query -> num_rows;

    if($quantidade == 1){

        $usuario = $sql_query -> fetch_assoc();

        if(!isset($_SESSION)){
            session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['email'] = $usuario['email'];

        header("Location: ../views/registros.php");

    } else {
        echo "<div class='alert alert-danger' role='alert'>
                Falha ao fazer login. Email ou senha não conferem.
            </div>";
    }

    //mysqli_close($mysqli); //fecha conexão com banco de dados
    
}

?>