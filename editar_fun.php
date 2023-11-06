<?php
include_once("./partials/header.php");


include_once('conexao.php');

if(isset($_GET['id'])){
      $id=$_GET['id'];
 }else{
        header('location:ver_fun.php');
 }
?>

  <div class="container">
   <form action="atualizar_fun.php" method="post">
    <?php
  $select=$conexao->query("SELECT id,nome,horario FROM funcionario WHERE id=$id");
    while($linha=$select->fetch (PDO::FETCH_ASSOC)){
        echo"
    <label for='id' class='form-label'>id:</label>
    <input type='text' class='form-control' disabled value=$linha[id] readonly/>
    <label for='nome' class='form-label'>Nome:</label>
    <input type='text' id='nome' name='nome' class='form-control' value=$linha[nome]/>
    <label for='email' class='form-label'>horario</label>
    <input type='text' id='horario' name='horario' class='form-control' value=$linha[horario] readonly/>
    
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