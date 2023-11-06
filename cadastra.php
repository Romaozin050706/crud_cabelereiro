<?php
include_once('conexao.php');
$cpf=$_POST['cpf'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=hash("sha256",$_POST['senha']);
$telefone=$_POST['telefone'];
$tipo=$_POST['tipo'];
$confirmarsenha=hash("sha256",$_POST['confirmasenha']);
if($senha==$confirmarsenha){
try{
     $inserir=$conexao->prepare('INSERT INTO clientes VALUES(:CPF,:email,:nome,:senha,:telefone,:tipo)');
     $inserir->execute(
        [
            ':CPF'=> $cpf,
            ':nome'=>$nome,
            ':email'=> $email,
            ':senha'=>$senha,
            ':telefone'=>$telefone,
            ':tipo'=>$tipo
    
        ]
        );
        header('location:ver_usuario.php');
    }catch(PDOException $erro){
          
        echo $erro->getMessage();
            }
        echo $inserir->rowCount();
    }else{
        echo 'errou';
        //header('location:index.php');
    }

    


?>