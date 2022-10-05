<?php

    include('conexao.php');

    $id_lista = $_GET["id_lista"];

    $sql = "DELETE FROM listas WHERE id_lista=" . $id_lista ;

    echo "<h1>Exclusão de Lista de Compras</h1>" ;

    $result = mysqli_query($con, $sql);

    if ($result) 
    {
        echo "Registro excluído com sucesso" ;
    }
    else
    {
        echo "Erro ao tentar excluir lista " . mysqli_error($con) . "<br>";
    }

?>

<a href="index.php">Voltar</a>