<?php
include_once('partials/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <div class="container">
    <form action="cadastro_prod.php" method="post">
        <label for="id" class="form-label">id:</label>

        <input type="text" name="id" id="id"  class="form-control"/>

        <label for="preco" class="form-label">preco:</label>

        <input type="text" name="preco" id="preco"  class="form-control"/>

        <label for="valiade"  class="form-label">validade:</label>

        <input type="text" name="valiade" id="validade" class="form-control"/>



        <button type="submit"> registrar</button>
        
    </form>
    <a href="ver_prod.php">Ver Todos Os Produtos</a>
</body>
</html>