<?php
include_once("./conexao.php");
$cep=$_POST['cep'];
$bairro=$_POST['bairro'];
$numero=$_POST['numero'];

echo ''.$cep.''.$bairro.''.$numero.'';

try{
    
    $update=$conexao->prepare("UPDATE endereco SET bairro=:bairro,numero=:numero WHERE cep=:cep;");
    $update->execute(
        [
            ':cep'=>$cep,
            ':bairro'=>$bairro,
            ':numero'=>$numero
        ]
        );
        return header('location:ver_end.php');
}catch(Exception $e){
    echo $e->getMessage();
}

?>