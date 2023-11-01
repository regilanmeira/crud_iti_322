<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      //1º PASSO: Incluir os parâmetros de conexão
      include("conexao_bd.php");
      //2º PASSO: Buscar os dados a serem inseridos
      $descricao = $_POST["txtDescricao"];
      $preco = $_POST["txtPreco"];
      //3º PASSO: Montar o comando SQL de inserção de dados
      $sql = "INSERT INTO lanche(descricao,preco) VALUES ('$descricao','$preco')";
      //4º PASSO: Executar no banco de dados
      if (executarComando($sql)) {
        echo "<h1>Seu lanche foi inserido.</h1>";
      } else 
      { 
        echo "<h1>Não foi possível cadastrar.</h1>";
      }

    ?>

   <a href="index.php">
      <button type="button">Voltar
      </button>
   </a>
    
</body>
</html>