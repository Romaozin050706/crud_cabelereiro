<?php
include_once('partials/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>Estoque</title>
</head>
<body>
    <div class="container">
    <form action="cadastro_est.php" method="post">
        <label for="id" class="form-label">id:</label>

        <input type="text" name="id" id="id"  class="form-control"/>

        <label for="descricao" class="form-label">descricao:</label>

        <input type="text" name="descricao" id="descricao"  class="form-control"/>

        <label for="validade"  class="form-label">validade:</label>

        <input type="text" name="validade" id="validade" class="form-control"/>

        

        <button type="submit"> registrar no estoque</button>
        
    </form>
    <a href="ver_est.php">Ver Todo O Estoque</a>
</body>
</html>