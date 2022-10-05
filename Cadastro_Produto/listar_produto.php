<?php

    include("conexao.php");

    $sql = "SELECT * FROM produto" ;

    $result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
</head>
<body>
    
    <h1 align = "center">Consulta de Produtos</h1>

    <table align = "center" border = "1" widht = "500">

        <tr>
            <th>Data Inicial</th>
            <th>Data Final</th>
            <th>Valor</th>
            <th>Quantidade</th>
            <th>Marca</th>
            <th>Excluir</th>
        </tr>

        <?php

            while ($row = mysqli_fetch_array ($result))
            {
                echo "<tr>";
                
                echo "<td>" . $row['data_inicial'] . "</td>";
                
                echo "<td>" . $row['data_final'] . "</td>";
                
                echo "<td>" . $row['valor'] . "</td>";

                echo "<td>" . $row['quantidade'] . "</td>";
                
                echo "<td>" . $row['marca'] . "</td>";
                
                echo "<td><a href='excluir_produto.php?id=".$row['data_final']."'>Excluir</a></td>";                
                
                echo "</tr>";
            }

        ?>

    </table>

</body>
</html>