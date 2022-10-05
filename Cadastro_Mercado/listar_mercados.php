<?php

    include("conexao.php");

    $sql = "SELECT * FROM mercado" ;

    $result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Mercados</title>
</head>
<body>
    
    <h1>Listagem de mercados</h1>

    <table align = "center" border = "1" widht = "500">

        <tr>
            <th>Código</th>
            <th>Foto</th>
            <th>Nome</th>
            <th>Rua</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>CEP</th>
            <th>Excluir</th>
        </tr>

        <?php

            while ($row = mysqli_fetch_array ($result))
            {
                echo "<tr>";
                echo "<td>" . $row['id_mercado'] . "</td>";
                echo "<td><img src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"] )."' width='150' height='150'/></td>";
                echo "<td><a href='altera_mercado.php?id_mercado=".$row['id_mercado']."'>" .$row['nome_mercado']. "</a></td>";
                echo "<td>" . $row['rua'] . "</td>";
                echo "<td>" . $row['bairro'] . "</td>";
                echo "<td>" . $row['cidade'] . "</td>";
                echo "<td>" . $row['estado'] . "</td>";
                echo "<td>" . $row['cep'] . "</td>";
                echo "<td><a href='excluir_mercado.php?id_mercado=".$row['id_mercado']."'>Excluir</a></td>";                
                echo "</tr>";
            }

        ?>

    </table>

</body>
</html>