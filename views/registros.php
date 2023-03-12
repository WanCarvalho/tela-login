<?php

include('../scripts/conexao.php');

if (!isset($_SESSION)) {
    session_start();
    include("../scripts/protect.php");
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Registros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/registros.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>

<body>

    <div class="navbar">
        <p>Usuário: <?php if (isset($_SESSION['email'])) {
                        echo $_SESSION['email'];
                    }  ?></p>
        <div>
            <!-- Button trigger modal -->
            <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Cadastrar Tarefa
            </button>
            <a href="../scripts/logout.php"><button>Sair</button></a>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastro Tarefa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="" method="POST">

                        <label for="text">Descrição da tarefa</label>
                        <br>
                        <input type="text" name="tarefa" class="form-control" placeholder="Descrição"><br>

                        <label for="">Urgência</label>
                        <br>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="radio" name="urgencia" value="3" id="firstRadio" checked>
                                <label class="form-check-label" for="firstRadio">ALTA</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="radio" name="urgencia" value="2" id="secondRadio">
                                <label class="form-check-label" for="secondRadio">MEDIA</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="radio" name="urgencia" value="1" id="thirdRadio">
                                <label class="form-check-label" for="thirdRadio">BAIXA</label>
                            </li>
                        </ul>
                        <br>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>

                    <?php include('../scripts/cadastrar_tarefa.php'); ?>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container">

        <div class="tabela-registros">

            <table class="table table-bordered border-dark">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Tarefas</th>
                        <th scope="col">Urgência</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    if (isset($_SESSION['email'])) {
                        $query_usuario = "SELECT tarefa, urgencia FROM tarefas WHERE tarefas.idUsuario =" . $_SESSION['id'];

                        $result_query = mysqli_query($mysqli, $query_usuario);

                        while ($row_usuario = mysqli_fetch_assoc($result_query)) {

                            echo "<tr class='line-table'>";
                            echo "<td>" . $row_usuario['tarefa'] . "</td>";

                            if ($row_usuario['urgencia'] == 1) {
                                echo "<td>BAIXA</td>";
                            } else if ($row_usuario['urgencia'] == 2) {
                                echo "<td>MEDIA</td>";
                            } else if ($row_usuario['urgencia'] == 3) {
                                echo "<td>ALTA</td>";
                            }


                            echo "</tr>";
                        }

                        mysqli_close($mysqli); //fecha conexão com banco de dados
                    }

                    ?>

            </table>

        </div>

    </div>

</body>

</html>