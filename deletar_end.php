<?php
include_once("conexao.php");

if(isset($_GET['cep'])){
    $cep=$_GET['cep'];
}else{
      header('location:ver_end.php');
}
  try{
    $deletar=$conexao->query("DELETE FROM enderecos WHERE cep=$cep;");
    header("location:ver_end.php");
  }catch(Exception $e){
       echo $e->getMessage();
  }
?>