<?php
session_start();
include_once("../conexao.php");

$email=$_POST['email'];
$senha=hash("sha256",$_POST['senha']);

echo $email,'',$senha,'';

$login=$conexao->query("SELECT email,senha FROM clientes WHERE email='$email' AND senha='$senha'; ");
if($login->rowCount()>0){ 
    while($linha=$login->fetch(PDO::FETCH_ASSOC)){
        $_SESSION['cpf']=$linha['cpf'];
        $_SESSION['tipo']=$linha['tipo'];
        $_SESSION['nome']=$linha['nome'];
    }
if($_SESSION['tipo']==0){
    header('location:../cliente/index.php');
}elseif($_SESSION['tipo']==1);
    header('location:adm.php');
}else{
    header('location:../index.php');{

    echo"usuario ou senha incorretos";
}
}

?>