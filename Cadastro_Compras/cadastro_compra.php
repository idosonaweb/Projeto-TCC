<?php
    
    include ("conexao.php") ;

    $foto_Nome = $_FILES['foto']['name'] ;

    $target_dir = "upload/" ;

    $target_file = $target_dir . basename($_FILES['foto']['name']) ;

    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $extensions_arr = array("jpg","jpeg","png","gif");

    if (in_array($imageFileType, $extensions_arr)) 
    {
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_dir.$foto_Nome)) 
        {
            $foto_Blob = addslashes(file_get_contents($target_dir.$foto_Nome)) ;
        }
    }

    echo "<h1>Cadastro de Compras</h1>" ;

    $Data_compra = $_POST["data_compra"];

    $Descricao_compra = $_POST["descricao_compra"];

    $Quantidade_produtos = $_POST["qtd_produtos"];

    $Valor_compra = $_POST["valor_compra"];

    $Nota_fiscal = $_POST["foto_nota_fiscal"];

    echo "<p> Data da Compra: " . $Data_compra . "<br> <br>" ;

    echo "Descrição da Compra: " . $Descricao_compra . "<br> <br>" ;

    echo "Valor da Compra: " . $Valor_compra . "</p>" ;

    $sql = "INSERT INTO usuario (data_compra,descricao_compra,qtd_produtos, valor_compra, nota_fiscal_foto) 
	        VALUES ('".$data_compra."','".$descricao_compra."','".$qtd_produtos."','".$valor_compra."','".$foto_nota_fiscal."')";
    
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