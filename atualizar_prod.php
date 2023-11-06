<?php
include_once("./conexao.php");
$id = $_POST['id'];
$preco = $_POST['preco'];
$validade= $_POST['validade'];

echo '' . $id . '' . $preco . '' . $validade . '';

try {

    $update = $conexao->prepare("UPDATE produtos SET id=:id,preco=:preco WHERE valiadade=:validade;");
    $update->execute(
        [
            ':preco' => $preco,
            ':descricao' => $validade,
            ':id' => $id
        ]
    );
    return header('location:ver_prod.php');
} catch (Exception $e) {
    echo $e->getMessage();
}

?>