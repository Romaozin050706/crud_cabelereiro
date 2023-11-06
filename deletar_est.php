<?php
include_once("conexao.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];
}else{
      header('location:ver_est.php');
}
  try{
    $deletar=$conexao->query("DELETE FROM estoque WHERE id=$id;");
    header("location:ver_est.php");
  }catch(Exception $e){
       echo $e->getMessage();
  }
?>