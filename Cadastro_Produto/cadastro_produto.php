<?php
    
    include ("conexao.php") ;

    echo "<h1>Cadastro de Produto</h1>" ;

    $Data_Inicial = $_POST["data_inicial_produto"];

    $Data_Final = $_POST["data_final_produto"];

    $Quantidade = $_POST["quantidade_produto"];

    $Marca = $_POST["marca_produto"];

    $Valor = $_POST["valor_produto"];

    $sql = "INSERT INTO produto (data_inicial, data_final, valor, quantidade, marca)
            values ('" . $Data_Inicial. "', '" . $Data_Final . "', '" . $Valor. "', '" . $Quantidade . 
                    "', '" . $Marca. "')" ;

    $result = mysqli_query($con, $sql) ;

    if ($result) 
    {
        echo "Dados inseridos com sucesso" ;
        
    }
    else
    {
        echo "Erro ao inserir no banco de dados" . mysqli_error($con);
    }

?>