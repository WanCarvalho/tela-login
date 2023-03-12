<?php

$hostname = "localhost";
$bancodedados = "provaeco";
$usuario = "root";
$senha = "";

date_default_timezone_set ("America/Fortaleza");

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli -> connect_errno) {
    die ("Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}

    if ((isset($_POST['tarefa']))){
 
        //Abaixo variáveis que vão extrair dados do formulario
        $tarefa = $_POST['tarefa']; 
        $urgencia = $_POST['urgencia'];
        $id_usuario = $_SESSION['id']; 
    
        //Pegar dados do formulário e inserir no banco
        $string_sql = "INSERT INTO tarefas (idUsuario, tarefa, urgencia) VALUES ('$id_usuario','$tarefa', '$urgencia')";
        $insert_usuario = mysqli_query($mysqli, $string_sql);

        if(mysqli_affected_rows($mysqli)>0){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
            //Apenas um link para retornar para a página de login
            header("Location: ../views/registros.php");
            echo "<h1 style='color: green;'>Usuario Cadastrado</h1>";
        } else {
            header("Location: ../views/registros.php");
            echo "<h1 style='color: red;'>Usuario não Cadastrado</h1>";
        }
    }

?>