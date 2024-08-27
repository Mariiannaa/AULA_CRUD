<?php 
include "conexao.php";

$id = $_GET['id'];
$nome = $_GET['nome'];
$nota = $_GET['nota'];

$update = "UPDATE aluno SET nome = '$nome', nota = $nota WHERE id = $id";

$result = $conn->query($update);

if($result === true){
    echo "Atualizado com sucesso";
}else{
    echo "Erro";
}

?>

<a href="read.php"> < voltar</a>