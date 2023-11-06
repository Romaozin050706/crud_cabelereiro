<?php
include_once("./partials/header.php");


include_once('conexao.php');

if(isset($_GET['cep'])){
      $cep=$_GET['cep'];
 }else{
        header('location:ver_end.php');
 }
?>

  <div class="container">
   <form action="atualizar_end.php" method="post">
    <?php
  $select=$conexao->query("SELECT cep,bairro,numero FROM enderecos WHERE cep=$cep");
    while($linha=$select->fetch (PDO::FETCH_ASSOC)){
        echo"
    <label for='cep' class='form-label'>Cep:</label>
    <input type='text' class='form-control' disabled value=$linha[cep] readonly/>
    <label for='bairro' class='form-label'>bairro:</label>
    <input type='text' id='bairro' name='bairro' class='form-control' value=$linha[bairro]/>
    <label for='numero' class='form-label'>numero</label>
    <input type='text' id='numero' name='numero' class='form-control' value=$linha[numero] readonly/>
   


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