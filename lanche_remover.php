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

        include "conexao_bd.php";

        $sql = "DELETE FROM lanche WHERE id_lanche = '$id_lanche'";

        if (executarComando($sql) == true)
        {
            echo "<h1>Removido!</h1>";
        }
        else
        {
            echo "<h1>Não foi possível remover o lanche. </h1>";
        }

    ?>
</body>
</html>
