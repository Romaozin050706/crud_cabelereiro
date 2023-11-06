<?php
include_once("conexao.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];
}else{
      header('location:ver_serv.php');
}
  try{
    $deletar=$conexao->query("DELETE FROM  WHERE id=$id;");
    header("location:ver_serv.php");
  }catch(Exception $e){
       echo $e->getMessage();
  }
?>