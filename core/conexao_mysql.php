<?php

    function conecta() : mysqli
    {
        $servidor = 'localhost' ;

        $banco = 'purchase' ;

        $port = 3306 ;

        $usuario = 'root' ;

        $senha = '' ;

        $database = 'purchase' ;

        $conexao = mysqli_connect($servidor, $usuario, $senha, $banco, $port, $database) ;

        if (!$conexao) 
        {
            echo "Erro: Não foi possível conectar ao Mysql. " . PHP_EOL ;

            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL ;

            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL ;

            return null ;
        }

        return $conexao ;
    }

    function desconecta ($conexao)
    {
        mysqli_close($conexao) ;
    }

?>