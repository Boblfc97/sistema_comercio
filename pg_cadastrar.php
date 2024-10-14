<?php
    include "verificar_logado.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastrar Novo Produto</h1>
    <form action="cadastrar.php" method="post">
        <label>Nome do Produto: </label> <br>
        <input type="text" name="nome_digitado"> <br><br>

        <label>Preço: </label> <br>
        <input type="number" step="0.01" min="0.00" name="preco_digitado"> <br><br>

        <label>Categoria: </label> <br>
        <select name="categoria_escolhida">
            <option value="">Selecione</option>
            <option value="Cesta básica">Cesta básica</option>
            <option value="Limpeza">Limpeza</option>
            <option value="Enlatados">Enlatados</option>
            <option value="Molhos">Molhos</option>
            <option value="Temperos">Temperos</option>
        </select> <br> <br>

        <label>Imagem: </label> <br>
        <input type="text" name="foto_escolhida"> <br><br>

        <label>Estoque: </label> <br>
        <input type="number" name="estoque_digitado"> <br><br>

        <button type="submit">Cadastrar produto</button>
    </form>
</body>
</html>