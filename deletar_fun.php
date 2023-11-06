<?php
include_once("conexao.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];
}else{
      header('location:ver_usuario.php');
}
  try{
    $deletar=$conexao->query("DELETE FROM funcionario WHERE id=$id;");
    header("location:ver_fun.php");
  }catch(Exception $e){
       echo $e->getMessage();
  }
?>