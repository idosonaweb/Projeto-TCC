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
    <title>Listagem de Usuários</title>
</head>
<body>
    
    <h1>Listas de compra registradas</h1>

    <table align = "center" border = "1" widht = "500">

        <tr>
            <th>Código da lista</th>
            <th>Nome</th>
            <th>Data</th>
            <th>Quantidade de Produtos</th>
            <th>Excluir</th>
            <th>Ver Produtos</th>
        </tr>

       <li><a href="cadastro_lista.htm">Cadastrar Nova Lista de Compras</a></li>
      
        <?php

            while ($row = mysqli_fetch_array ($result))
            {
                echo "<tr>";
                echo "<td>" . $row['id_lista'] . "</td>";
              echo "<td>" . $row['nome_lista'] . "</td>";
              echo "<td>" . $row['data_criacao'] . "</td>";
              echo "<td>" . $row['qtd_produtos'] . "</td>";
                echo "<td><a href='altera_lista.php?id_lista=".$row['id_lista']."'>" .$row['nome_lista']. "</a></td>";
                echo "<td><a href='excluir_lista.php?id_lista=".$row['id_lista']."'>Excluir</a></td>";
                echo "<td><a href='listar_produtos.php?id_lista=".$row['id_lista']."'>Ver Produtos</a></td>";
                echo "</tr>";
            }

        ?>

    </table>

</body>
</html>