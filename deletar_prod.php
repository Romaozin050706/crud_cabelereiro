<?php
include_once("conexao.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];
}else{
      header('location:ver_prod.php');
}
  try{
    $deletar=$conexao->query("DELETE FROM produtos WHERE id=$id;");
    header("location:ver_prod.php");
  }catch(Exception $e){
       echo $e->getMessage();
  }
?>