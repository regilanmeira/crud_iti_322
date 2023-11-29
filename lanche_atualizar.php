<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $id_lanche = $_POST["txtIdLanche"];
    $descricao = $_POST["txtDescricao"];
    $preco = $_POST["txtPreco"];

    $sql = "UPDATE lanche SET descricao = '$descricao', preco = '$preco' ";
    $sql .= " WHERE id_lanche = '$id_lanche'";

    include 'conexao_bd.php';

    if (executarComando($sql) == true)
    {
        echo "<h1>Dados atualizados</h1>";
    }
    else
    {
        echo "<h1>Não foi possível atualizar</h1>";
    }

    ?>

    <form action="lanche_listar.php" method="post">
        <button type="submit">Voltar</button>
    </form>
</body>
</html>