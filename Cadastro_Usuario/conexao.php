<?php
    
    $hostname = "localhost" ;

    $port = 3306 ;

    $username = "root" ;

    $password = "" ;

    $database = "cadastro_usuario" ;

    $con = mysqli_connect($hostname, $username, $password, $database, $port);

    if (mysqli_connect_errno()) 
    {
        printf("Erro ao conectar ao banco de dados: %s\n", mysqli_connect_error());

        exit;
    }

    //printf("Banco de Dados conectado com sucesso \o/")


?>