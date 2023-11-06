<?php
include_once('partials/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>Enderecos</title>
</head>
<body>
    <div class="container">
    <form action="cadastro_end.php" method="post">
        <label for="cep" class="form-label">cep</label>

        <input type="text" name="cep" id="cep"  class="form-control"/>

        <label for="bairro" class="form-label">bairro</label>

        <input type="text" name="bairro" id="bairrp"  class="form-control"/>

        <label for="numero"  class="form-label">numero:</label>

        <input type="text" name="numero" id="numero" class="form-control"/>

    

        <button type="submit"> registrar</button>
        
    </form>
    <a href="ver_end.php">Ver Todos Os Enderecos</a>
</body>
</html>