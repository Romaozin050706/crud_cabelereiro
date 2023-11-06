<?php
include_once("");
include_once("conexao.php");
include_once("partials/header.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cabelereiro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php
if(isset($_SESSION['tipo'])){
    echo"
    <div class='d-flex'>
    <a class='btn btn-outline-danger' href='../login/logout.php'>Sair</a>
    </div>";
}else{
    echo"
    <div class'd-flex'>
    <a class='btn btn-outline-primary' href='../login/index.php'>Entrar</a>
    </div>";
}
?>
    <div class=base >
<h1>home</h1> <h1>agendamento</h1> <h1>cortes</h1>
   </div>

   <?php
if(isset($_SESSION['tipo'])){
    echo"
    <div class='d-flex'>
    <a class='btn btn-outline-danger' href='../login/logout.php'>Sair</a>
    </div>";
}else{
    echo"
    <div class'd-flex'>
    <a class='btn btn-outline-primary' href='../login/index.php'>Entrar</a>
    </div>";
}

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>