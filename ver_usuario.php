<?php
include_once('conexao.php');
?>
<?php
include_once("partials/header.php");
?>


<a href="index.php">adicionar clientes</a>
<div class="container">
    <h1>lista de clientes</h1>
    <table class="table">
        <tr>
            <th scope="col">cpf</th>
            <th scope="col">nome</th>
            <th scope="col">email</th>
            <th scope="col">telefone</th>
            <th scope="col">ações</th>
        </tr>
        <?php
        $select = $conexao->query('SELECT cpf,nome,email,telefone FROM clientes');
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
    <td>{$linha['cpf']}<td/>
    <td>{$linha['nome']}<td/>
    <td>{$linha['email']}<td/>
    <td>{$linha['telefone']}<td/>
    <td>
    <a href='editar_usuarios.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>edit</span></a>
    <a href='deletar.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>delete</span></a>

    <td/>
    </tr>";
        }
        ?>
    </table>
</div>

</body>

</html>
<?php
include_once("partials/footer.php");
?>