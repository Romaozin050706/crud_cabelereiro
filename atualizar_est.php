<?php
include_once("./conexao.php");
$id=$_POST['id'];
$validade=$_POST['validade'];
$descricao=$_POST['descricao'];

echo ''.$id.''.$validade.''.$descricao.'';

try{
    
    $update=$conexao->prepare("UPDATE estoque SET validade=:validade,descricao=:descricao WHERE id=:id;");
    $update->execute(
        [
            ':validade'=>$validade,
            ':descricao'=>$descricao,
              ':id'=>$id
        ]
        );
        return header('location:ver_est.php');
}catch(Exception $e){
    echo $e->getMessage();
}

?>