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


    $id_usuario = $_POST["id_usuario"];

    $Nome_Usuario = $_POST["nome_usuario"];

    $Email_Usuario = $_POST["email_usuario"];

    $Fone_Usuario = $_POST["telefone_usuario"];

    $Rua = $_POST["rua"];

    $Bairro = $_POST["bairro"];
    
    $Cidade = $_POST["cidade"];

    $Estado = $_POST["estado"];

    $Cep = $_POST["cep"];

    echo "<h1>Alteração de dados</h1>" ;
    
    echo "<p>Nome usuário: " . $Nome_Usuario . "</p>" ;

    if(isset($foto_Nome))
    {
        $sql = "UPDATE usuario SET
                nome_usuario ='". $Nome_Usuario ."',
                email_usuario ='". $Email_Usuario ."',
                telefone_usuario ='". $Fone_Usuario . "',
                rua ='". $Rua ."',
                bairro ='". $Bairro . "',
                cidade ='". $Cidade . "',
                estado ='". $Estado . "',
                cep ='". $Cep . "',
                foto_blob='".$foto_Blob."',
                foto_nome='".$foto_Nome."'
                WHERE id_usuario=".$id_usuario;
      }
      else
      {
        $sql = "UPDATE usuario SET
                  nome_usuario='".$Nome_Usuario."',
                  email_usuario='".$Email_Usuario."',
                  telefone_usuario='".$Fone_Usuario."',
                  rua ='". $Rua ."',
                  bairro ='". $Bairro . "',
                  cidade ='". $Cidade . "',
                  estado ='". $Estado . "',
                  cep ='". $Cep . "'
                WHERE id_usuario=".$id_usuario;
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