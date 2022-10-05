<?php

    include("conexao.php");

    $sql = "SELECT * FROM listas" ;

    $result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Compras</title>
</head>
<body>
    
    <h1>Lista de compras feitas</h1>

    <table align = "center" border = "1" widht = "500">

        <tr>
            <th>Código da lista</th>
            <th>Data</th>
            <th>Descrição</th>
            <th>Código do Mercado</th>
            <th>Quantidade de Produtos</th>
            <th>Valor Total</th>
            <th>Nota Fiscal</th>
            <th>Excluir</th>
        </tr>

        <br>
      
       <li><a href="cadastro_compra.htm">Cadastrar Nova Compra</a></li>
      
        <?php

            while ($row = mysqli_fetch_array ($result))
            {
                echo "<tr>";
                echo "<td>" . $row['id_compra'] . "</td>";
              echo "<td>" . $row['data_compra'] . "</td>";
              echo "<td>" . $row['descricao_compra'] . "</td>";
              echo "<td>" . $row['id_mercado'] . "</td>";
              echo "<td>" . $row['qtd_produtos'] . "</td>";
              echo "<td>" . $row['valor_compra'] . "</td>";
              echo "<td>" . $row['nota_fiscal_foto'] . "</td>";
                echo "<td><a href='altera_compra.php?id_compra=".$row['id_compra']."'>" .$row['descricao_compra']. "</a></td>";
                echo "<td><a href='excluir_compra.php?id_compra=".$row['id_compra']."'>Excluir</a></td>";
                echo "</tr>";
            }

        ?>

    </table>

</body>
</html>