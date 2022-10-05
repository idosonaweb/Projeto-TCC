<?php

    include("conexao.php");

    $Data_Final = $_POST["data_final"];

    $sql = "SELECT * FROM produto where data_final =" . $Data_Final ;

    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Produtos</title>
</head>

<body>

    <h1>Alteração de Produtos</h1>

    <hr><br>

    <div>

    <form action = "Altera_produto_exe.php" method = "POST">
        
        <div class="form-item">

            <label for = "data_inicial_produto">Data Inicial: </label>
            
            <input type = "date" name = "data_inicial_produto" size = "50" value = "<?php echo $row['data_inicial'] ?>"></input>

        </div>

        <br>

        <div class="form-item">

            <label for = "data_final_produto">Data Final: </label>
            
            <input type = "date" name = "data_final_produto" size = "50" value = "<?php echo $row['data_final'] ?>"></input>

        </div>

        <br>

        <div class="form-item">

            <label for = "valor_produto">Valor: </label>
            
            <input type = "text" name = "valor_produto" size = "50" value = "<?php echo $row['valor'] ?>"></input>

        </div>

        <br>

        <div class="form-item">

            <label for = "quantidade_produto">Quantidade: </label>
            
            <input type = "number" name = "quantidade_produto" size = "50" value = "<?php echo $row['quantidade'] ?>"></input>

        </div>

        <br>

        <div class="form-item">

            <label for = "marca_produto">Marca: </label>
            
            <input type = "text" name = "marca_produto" size = "50" value = "<?php echo $row['marca'] ?>"></input>

        </div>

        <br>

        <div class="form-item">
                
            <input id="btn" type="submit" value="Enviar" >
                    
            <a href='index.php'> Voltar</a>
            
        </div>

        <input name="data_final" type="hidden" value="<?php echo $row['data_final']?>">

    </form>

    </div>
    
</body>
</html>