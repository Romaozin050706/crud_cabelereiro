<?php
include_once('conexao.php');  

$id=$_POST['id'];
$validade=$_POST['validade'];
$descricao=$_POST['descricao'];


try{
     $inserir=$conexao->prepare('INSERT INTO estoque VALUES(:id,:validade,:descricao)');
     $inserir->execute(
        [
            ':id'=> $id,
            ':validade'=>$validade,
            ':descricao'=> $descricao,
            
        ]
        );
        header('location:ver_est.php');
    }catch(PDOException $erro){
          
        echo $erro->getMessage();
            }
        echo $inserir->rowCount();
    
    


?>