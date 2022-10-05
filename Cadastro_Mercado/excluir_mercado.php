<?php

    include('conexao.php');

    $id_mercado = $_GET["id_mercado"];

    $sql = "DELETE FROM mercado WHERE id_mercado=" . $id_mercado ;

    echo "<h1>Exclusão de Mercado</h1>" ;

    $result = mysqli_query($con, $sql);

    if ($result) 
    {
        echo "Registro excluído com sucesso" ;
    }
    else
    {
        echo "Erro ao tentar excluir usuário " . mysqli_error($con) . "<br>";
    }

?>

<a href="listar_mercados.php">Voltar</a>