<?php

    include('conexao.php');

    $Data_Final = $_POST["data_final"];

    $sql = "DELETE FROM produto where data_inicial =" . $Data_Inicial ;

    echo "<h1>Exclusão de produto</h1>" ;

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

<a href="listar_produto.php">Voltar</a>