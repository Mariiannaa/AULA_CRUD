<?php 

    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $db = "sesi";

    $conn = new mysqli($servidor, $user, $pass, $db);

    if($conn){
        echo "Conectado com sucesso";
    }


?>