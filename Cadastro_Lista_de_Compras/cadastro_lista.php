<?php
    
    include ("conexao.php") ;

    echo "<h1>Cadastro de Clientes - IFSP</h1>" ;

    $Nome_Usuario = $_POST["nome_usuario"];

    $Email_Usuario = $_POST["email_usuario"];

    $Fone_Usuario = $_POST["telefone_usuario"];

    echo "<p> Nome do usuário: " . $Nome_Usuario . "<br> <br>" ;

    echo "E-mail: " . $Email_Usuario . "<br> <br>" ;

    echo "Telefone: " . $Fone_Usuario . "</p>" ;

    $sql = "INSERT INTO usuario (nome_usuario,email_usuario,telefone_usuario, foto_blob, foto_nome) 
	        VALUES ('".$nome."','".$email."','".$telefone."','".$foto_Blob."','".$foto_Nome."')";
    
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