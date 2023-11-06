<?php
include_once('conexao.php');
$id=$_POST['id'];
$preco=$_POST['preco'];
$validade=$_POST['validade'];


try{
     $inserir=$conexao->prepare('INSERT INTO produtos VALUES(:id,:preco,:validade)');
     $inserir->execute(
        [
            ':id'=> $id,
            ':preco'=>$preco,
            ':descricao'=> $validade,
           
    
        ]
        );
        header('location:ver_prod.php');
    }catch(PDOException $erro){
          
        echo $erro->getMessage();
            }
        echo $inserir->rowCount();
   
        //header('location:index.php');

    


?>