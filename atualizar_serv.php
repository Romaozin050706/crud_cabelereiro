<?php
include_once("./conexao.php");
$id=$_POST['id'];
$preco=$_POST['preco'];
$descricao=$_POST['descricao'];

echo ''.$id.''.$preco.''.$descricao.'';

try{
    
    $update=$conexao->prepare("UPDATE servicos SET preco=:preco,descricao=:descricao WHERE id=:id;");
    $update->execute(
        [
            ':preco'=>$preco,
            ':descricao'=>$desricao,
              ':id'=>$id
        ]
        );
        return header('location:ver_serv.php');
}catch(Exception $e){
    echo $e->getMessage();
}

?>