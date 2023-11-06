<?php
include_once('conexao.php');
?>
<?php
include_once("partials/header.php");
?>


<a href="index.php">adicionar servicos</a>
<div class="container">
    <h1>lista de servicos</h1>
    <table class="table">
        <tr>
            <th scope="col">id</th>
            <th scope="col">preco</th>
            <th scope="col">descricao</th>
           
        </tr>
        <?php
        $select = $conexao->query('SELECT id,preco,descricao FROM servicos');
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
    <td>{$linha['id']}<td/>
    <td>{$linha['preco']}<td/>
    <td>{$linha['descricao']}<td/>
    <td>
    <a href='editar_serv.php?cpf=$linha[id]'><span class='material-symbols-outlined'>edit</span></a>
    <a href='deletar_serv.php?cpf=$linha[id]'><span class='material-symbols-outlined'>delete</span></a>

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