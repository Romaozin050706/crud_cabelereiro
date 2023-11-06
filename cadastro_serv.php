<?php
include_once('conexao.php');
$id=$_POST['id'];
$preco=$_POST['preco'];
$descricao=$_POST['descricao'];
{
try{
     $inserir=$conexao->prepare('INSERT INTO servicos VALUES(:id,:preco,:descricao)');
     $inserir->execute(
        [
            ':id'=> $id,
            ':preco'=>$preco,
            ':descricao'=> $descricao,
       
    
        ]
        );
        header('location:ver_serv.php');
    }catch(PDOException $erro){
          
        echo $erro->getMessage();
            }
        echo $inserir->rowCount();
   
        //header('location:index.php');
    }

    


?>