<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar lanches</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Lanches disponiveis</h1>

    <?php 
        include("conexao_bd.php");

        $sql = "SELECT * FROM lanche ORDER BY descricao";
        //A variável RESULTADO recebe todos os dados retornados
        // pelo comando SQL
        $resultado = retornarDados($sql);

    ?>

    <table>
        <tr>
            <td>Descrição</td>
            <td>Preço</td>
        </tr>

        <?php
            while ($linha = mysqli_fetch_assoc($resultado)) 
            {
        ?>
            <tr>
                <td><?php echo $linha["descricao"]; ?></td>
                <td><?php echo $linha["preco"]; ?></td>
            </tr>
        <?php 
            }
        ?>
    </table>
    
</body>
</html>