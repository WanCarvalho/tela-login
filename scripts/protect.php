<?php

if(!isset($_SESSION['email'])){
    echo "<div class='alert alert-danger' role='alert'>
        Você não pode acessar esta página porque não fez o login.
    </div>";
}

?>