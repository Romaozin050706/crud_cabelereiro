<?php
include_once('conexao.php');
?>
<?php
include_once("partials/header.php");
?>


<a href="index_est.php">adicionar no estoque</a>
<div class="container">
    <h1>lista do estoque</h1>
    <table class="table">
        <tr>
            <th scope="col">id</th>
            <th scope="col">validade</th>
            <th scope="col">descricao</th>

        </tr>
        <?php
        $select = $conexao->query('SELECT id,validade,descricao FROM estoque');
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
    <td>{$linha['id']}<td/>
    <td>{$linha['validade']}<td/>
    <td>{$linha['descricao']}<td/>
    <td>
    <a href='editar_est.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>edit</span></a>
    <a href='deletar_est.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>delete</span></a>

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