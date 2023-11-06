<?php
include_once('conexao.php');
?>
<?php
include_once("partials/header.php");
?>


<a href="index_end.php">adicionar enderecos</a>
<div class="container">
    <h1>lista de enderecos</h1>
    <table class="table">
        <tr>
            <th scope="col">cep</th>
            <th scope="col">numero</th>
            <th scope="col">bairro</th>
            
        </tr>
        <?php
        $select = $conexao->query('SELECT cep,numero,bairro FROM endereco');
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
    <td>{$linha['cep']}<td/>
    <td>{$linha['numero']}<td/>
    <td>{$linha['bairro']}<td/>
    <td>
    <a href='editar_end.php?cep=$linha[cep]'><span class='material-symbols-outlined'>edit</span></a>
    <a href='deletar_end.php?cep=$linha[cep]'><span class='material-symbols-outlined'>delete</span></a>

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