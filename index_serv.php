<?php
session_start();
include_once('partials/header.php');
include_once('components/carrousel.php');
include_once('components/navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>Servicos</title>
</head>
<body>
    <div class="container">
    <form action="cadastro_serv.php" method="post">
        <label for="id" class="form-label">id:</label>

        <input type="text" name="id" id="id"  class="form-control"/>

        <label for="preco" class="form-label">preco:</label>

        <input type="text" name="preco" id="preco"  class="form-control"/>

        <label for="descricao"  class="form-label">descricao:</label>

        <input type="text" name="descricao" id="descricao" class="form-control"/>




        <button type="submit"> registrar</button>
        
    </form>
    <a href="ver_usuario.php">Ver Todos Os Servicos</a>
</body>
</html>