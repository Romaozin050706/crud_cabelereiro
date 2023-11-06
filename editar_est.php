<?php
include_once("./partials/header.php");


include_once('conexao.php');

if(isset($_GET['id'])){
      $id=$_GET['id'];
 }else{
        header('location:ver_est.php');
 }
?>

  <div class="container">
   <form action="atualizar_est.php" method="post">
    <?php
  $select=$conexao->query("SELECT id,validade,descricao FROM estoque WHERE id=$id");
    while($linha=$select->fetch (PDO::FETCH_ASSOC)){
        echo"
    <label for='id' class='form-label'>id:</label>
    <input type='text' class='form-control' disabled value=$linha[id] readonly/>
    <label for='validade' class='form-label'>validade:</label>
    <input type='text' id='validade' name='validade' class='form-control' value=$linha[validade]/>
    <label for='descricao' class='form-label'>descricao</label>
    <input type='text' id='descricao' name='descricao' class='form-control' value=$linha[descricao] readonly/>


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