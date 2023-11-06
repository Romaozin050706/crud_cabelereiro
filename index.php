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
    <title>Clientes</title>
</head>
<body>
    <div class="container">
    <form action="cadastra.php" method="post">
        <label for="cpf" class="form-label">CPF</label>

        <input type="text" name="cpf" id="cpf"  class="form-control"/>

        <label for="telefone" class="form-label">telefone</label>

        <input type="text" name="telefone" id="telefone"  class="form-control"/>

        <label for="nome"  class="form-label">NOME:</label>

        <input type="text" name="nome" id="nome" class="form-control"/>

           <label for="nome"  class="form-label">EMAIL:</label>

        <input type="text" name="email" id="email" class="form-control"/>

   <label for="nome"  class="form-label">SENHA:</label>

        <input type="text" name="senha" id="senha" class="form-control"/>

           <label for="nome"  class="form-label">CONFIRMA SENHA</label>

        <input type="text" name="confirmasenha" id="confirmasenha" class="form-control"/> 



        <label for="tipo"  class="form-label">tipo</label>

        <input type="number" name="tipo" id="tipo" class="form-control"/> 


        <button type="submit"> registrar</button>
        
    </form>
    <a href="ver_usuario.php">Ver Todos Os Clientes</a>
</body>
</html>