<?php
include_once("./conexao.php");
$nome=$_POST['nome'];
$horario=$_POST['horario'];
$id=$_POST['id'];

echo ''.$cpf.''.$nome.''.$telefone.'';

try{
    
    $update=$conexao->prepare("UPDATE funcionario SET nome=:nome,horario=:horario WHERE id=:id;");
    $update->execute(
        [
            ':nome'=>$nome,
            ':horario'=>$horario,
              ':id'=>$id
        ]
        );
        return header('location:ver_fun.php');
}catch(Exception $e){
    echo $e->getMessage();
}

?>