<?php
include_once('conexao.php');
$cep=$_POST['cep'];
$bairro=$_POST['bairro'];
$numero=$_POST['numero'];



try{
     $inserir=$conexao->prepare('INSERT INTO endereco VALUES(:cep,:bairro,:numero,)');
     $inserir->execute(
        [
            ':cep'=> $cep,
            ':bairro'=>$bairro,
            ':numero'=> $numero,
           
    
        ]
        );
        header('location:ver_end.php');
    }catch(PDOException $erro){
          
        echo $erro->getMessage();
            }
        echo $inserir->rowCount();
  


?>