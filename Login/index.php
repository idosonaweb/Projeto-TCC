<?php

    include ("conexao.php") ;

    if (isset($_POST["email"]) || isset($_POST["senha"]))
    {
        if (strlen($_POST["email"]) == 0) 
        {
            echo "Preencha seu e-mail!" ;
        }
        else
        {
            if (strlen($_POST["senha"]) == 0) 
            {
                echo "Preencha sua senha!" ;   
            }
            else
            {
                $Email = $mysqli->real_escape_string($_POST["email"]);

                $Senha = $mysqli->real_escape_string($_POST["senha"]);

                $sql_code = "SELECT * FROM usuarios WHERE email = '$Email' AND senha = '$Senha'";
            
                $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

                $Quantidade = $sql_query->num_rows;

                if($Quantidade == 1) 
                {
                    
                    $Usuario = $sql_query->fetch_assoc();

                    if(!isset($_SESSION)) 
                    {
                        session_start();
                    }

                    $_SESSION['id'] = $Usuario['id'];
                    $_SESSION['nome'] = $Usuario['nome'];

                    header("Location: painel.php");

                } 
                else 
                {
                    echo "Falha ao logar! E-mail ou senha incorretos";
                }
            }
        }
    }

?>