<?php
include_once("./partials/header.php");


include_once('conexao.php');

if(isset($_GET['cpf'])){
      $cpf=$_GET['cpf'];
 }else{
        header('location:ver_usuario.php');
 }
?>

  <div class="container">
   <form action="atualizar.php" method="post">
    <?php
  $select=$conexao->query("SELECT cpf,nome,email,telefone FROM clientes WHERE cpf=$cpf");
    while($linha=$select->fetch (PDO::FETCH_ASSOC)){
        echo"
    <label for='cpf' class='form-label'>Cpf:</label>
    <input type='text' class='form-control' disabled value=$linha[cpf] readonly/>
    <label for='nome' class='form-label'>Nome:</label>
    <input type='text' id='nome' name='nome' class='form-control' value=$linha[nome]/>
    <label for='email' class='form-label'>email</label>
    <input type='text' id='email' name='email' class='form-control' value=$linha[email] readonly/>
    <label for='telefone' class='form-label'>Telefone:</label>
    <input type='text' id='telefone' name='telefone' class='form-control' value=$linha[telefone]/>


    <button class='btn btn-success' type='submit'>Atualizar</button>
    <button type='reset' class='btn btn-danger'>Limpar formulario</button>

    ";
    }
    
?>
</form>
</div>

<?php
include_once("./partials/footer.php");
?>