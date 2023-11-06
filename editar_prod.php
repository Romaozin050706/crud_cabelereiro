<?php
include_once("./partials/header.php");


include_once('conexao.php');

if(isset($_GET['cpf'])){
      $cpf=$_GET['cpf'];
 }else{
        header('location:ver_prod.php');
 }
?>

  <div class="container">
   <form action="atualizar_prod.php" method="post">
    <?php
  $select=$conexao->query("SELECT descricao,preco FROM produtos WHERE id=$id");
    while($linha=$select->fetch (PDO::FETCH_ASSOC)){
        echo"
    <label for='id' class='form-label'>id:</label>
    <input type='text' class='form-control' disabled value=$linha[id] readonly/>
    <label for='preco' class='form-label'>preco:</label>
    <input type='text' id='preco' name='preco' class='form-control' value=$linha[preco]/>
    <label for='validade' class='form-label'>validade</label>
    <input type='text' id='validade' name='validade' class='form-control' value=$linha[validade] readonly/>
  

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