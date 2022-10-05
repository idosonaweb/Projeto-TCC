<?php

    include('conexao.php');

    $foto_Nome = $_FILES ['foto']['name'] ;

    $target_dir = "upload/" ;

    $target_file = $target_dir . basename($_FILES ["foto"]["name"]) ;

    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $extensions_arr = array("jpg","jpeg","png","gif");

    if (in_array($imageFileType, $extensions_arr)) 
    {
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_dir.$foto_Nome)) 
        {
            $foto_Blob = addslashes(file_get_contents($target_dir.$foto_Nome)) ;
        }
    }


    $id_mercado = $_POST["id_mercado"];

    $Nome_Mercado = $_POST["nome_mercado"];

    $Rua = $_POST["rua"];

    $Bairro = $_POST["bairro"];
    
    $Cidade = $_POST["cidade"];

    $Estado = $_POST["estado"];

    $Cep = $_POST["cep"];

    echo "<h1>Alteração de dados</h1>" ;
    
    echo "<p>Nome mercado: " . $Nome_Mercado . "</p>" ;

    if(isset($foto_Nome))
    {
        $sql = "UPDATE mercado SET
                nome_mercado ='". $Nome_Mercado ."',
                rua ='". $Rua ."',
                bairro ='". $Bairro . "',
                cidade ='". $Cidade . "',
                estado ='". $Estado . "',
                cep ='". $Cep . "',
                foto_blob='".$foto_Blob."',
                foto_nome='".$foto_Nome."'
                WHERE id_mercado=".$id_mercado;
      }
      else
      {
        $sql = "UPDATE mercado SET
                nome_mercado ='". $Nome_Mercado ."',
                rua ='". $Rua ."',
                bairro ='". $Bairro . "',
                cidade ='". $Cidade . "',
                estado ='". $Estado . "',
                cep ='". $Cep . "'
                WHERE id_mercado=".$id_mercado;
      }
      
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