<?php
include_once('partials/header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionarios</title>
</head>
<body>
    <div class='container'>
        <form action="cadastro_fun.php" method="post">
        <label for="id" class="form-label">ID</label>

        <input type="text" name="id" id="id"  class="form-control"/>

        <label for="nome" class="form-label">NOME</label>

        <input type="text" name="nome" id="nome"  class="form-control"/>

       <label for="horario" class="form-label">horario</label>

       <input type="text" name="horario" id="horario"  class="form-control"/>

      
      <button type="submit"> registrar</button>

        </form>
        <a href="ver_fun.php">Ver Todos Os Funcionarios</a>
</body>
</html>