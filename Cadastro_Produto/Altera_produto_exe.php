<?php

    include('conexao.php');

    $Data_Inicial = $_POST["data_inicial_produto"];

    $Data_Final = $_POST["data_final_produto"];

    $Quantidade = $_POST["quantidade_produto"];

    $Marca = $_POST["marca_produto"];

    $Valor = $_POST["valor_produto"];

    echo "<h1>Alteração do Produto</h1>" ;

        $sql = "UPDATE produto SET
            
            data_inicial ='". $Data_Inicial ."',
            
            data_final ='" . $Data_Final . "',
            
            valor ='" . $Valor . "',
            
            quantidade ='" . $Quantidade . "',
            
            marca ='" . $Marca . "'
            
            WHERE data_final =". $Data_Final  ;

    $result = mysqli_query($con, $sql);

    if($result)
    {
        echo "Dados alterados com sucesso <br>" ;
    }
    else
    {
        echo "Erro ao alterar no banco de dados " . mysqli_error($con) . "<br>" ;
    }

?>

<a href="index.php">Voltar</a>