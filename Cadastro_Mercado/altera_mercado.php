<?php

    include("conexao.php");

    $id_mercado = $_GET["id_mercado"];

    $sql = "SELECT * FROM mercado where id_mercado =" . $id_mercado ;

    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração do Mercado</title>
</head>

<body>

    <h1>Alteração do Mercado</h1>

    <hr><br>

    <?php echo "<img class='center' src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"] )."' align='center' width='150' height='150'/>"; ?>  
    
    <div id="teste">

    <form action = "altera_mercado_exe.php" method = "POST" enctype='multipart/form-data'>
        
        <div class="form-item">

            <label for = "nome_mercado">Nome: </label>
            
            <input type = "text" name = "nome_mercado" size = "50" value = "<?php echo $row['nome_mercado'] ?>"></input>

        </div>

        <br>

        <div class="form-item">

            <label for = "rua">Rua: </label>
            
            <input type = "text" name = "rua" size = "50" value = "<?php echo $row['rua'] ?>"></input>

        </div>

        <br>

        <div class="form-item">

            <label for = "bairro">Bairro: </label>
            
            <input type = "text" name = "bairro" size = "50" value = "<?php echo $row['bairro'] ?>"></input>

        </div>

        <br>

        <div class="form-item">

            <label for = "cidade">Cidade: </label>
            
            <input type = "text" name = "cidade" size = "50" value = "<?php echo $row['cidade'] ?>"></input>

        </div>

        <br>

        <div class="form-item">

            <label for = "estado">Estado: </label>
            
            <input type = "text" name = "estado" size = "30" value = "<?php echo $row['estado'] ?>"></input>

        </div>

        <br>

        <div class="form-item">

            <label for = "cep">CEP: </label>
            
            <input type = "text" name = "cep" size = "30" value = "<?php echo $row['cep'] ?>"></input>

        </div>

        <br>

        <div class="form-item">
                
            <input type="file" id="foto" name="foto" accept="image/*" />
            
        </div>

        <div class="form-item">
                
            <input id="btn" type="submit" value="Enviar" >
                    
            <a href='index.php'> Voltar</a>
            
        </div>
                
        <input name="id_mercado" type="hidden" value="<?php echo $row['id_mercado']?>">

    </form>

</body>
</html>