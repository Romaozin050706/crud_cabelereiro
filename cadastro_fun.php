<?php
include_once('conexao.php');
$nome=$_POST['nome'];
$horario=$_POST['horario'];
$id=$_POST['id'];
try{
     $inserir=$conexao->prepare('INSERT INTO FUNCIONARIO VALUES(:id,:nome,:horario)');
     $inserir->execute(
        [
            ':id'=>$id,
            ':nome'=>$nome,
            ':horario'=>$horario

    
        ]
        );
        header('location:ver_fun.php');
    }catch(PDOException $erro){
          
        echo $erro->getMessage();
            }
        echo $inserir->rowCount();
        

    


?>