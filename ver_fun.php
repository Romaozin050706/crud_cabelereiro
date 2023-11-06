<?php
include_once('conexao.php');
?>
<?php
include_once("partials/header.php");
?>


<a href="index_fun.php">olhar funcionario</a>
<div class="container">
    <h1>lista de funcionarios</h1>
    <table class="table">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">HORARIO</th>
        </tr>

        <?php
        $select = $conexao->query('SELECT id,nome,horario FROM funcionario');
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
    <td>{$linha['id']}<td/>
    <td>{$linha['nome']}<td/>
    <td>{$linha['horario']}<td/>
    <td>
    <a href='editar_fun.php?id=$linha[id]'><span class='material-symbols-outlined'>edit</span></a>
    <a href='deletar.php?id=$linha[id]'><span class='material-symbols-outlined'>delete</span></a>

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