<?php 
    include "conexao.php";

    $id = $_GET['id'];

    $select = "SELECT id, nome, nota FROM aluno WHERE id = $id";

    $result = $conn->query($select);

    $aluno = $result->fetch_object();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar cadastro</title>
</head>
<body>
    <a href="read.php">< voltar</a>
    <br>
    
    <form action="update.php" method="get">
        <input type="text" value = "<?= $aluno->id ?>" hidden name="id">

        <label for="">Nome do Aluno</label>
        <input type="text" value="<?= $aluno->nome ?>" name="nome">

        <label for="nota">Nota</label>
        <input type="text" value="<?= $aluno->nota ?>" name="nota">

        <input type="submit" value="Atualizar">

    </form>
</body>
</html>