<?php
    
    $hostname = "localhost" ;

    $port = 3307 ;

    $username = "root" ;

    $password = "" ;

    $database = "listas_de_compras" ;

    $con = mysqli_connect($hostname, $username, $password, $database, $port);

    if (mysqli_connect_errno()) 
    {
        printf("Erro ao conectar ao banco de dados: %s\n", mysqli_connect_error());

        exit;
    }

    //printf("Banco de Dados conectado com sucesso \o/")


?>