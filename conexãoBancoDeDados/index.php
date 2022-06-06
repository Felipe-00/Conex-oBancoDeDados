<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão com Banco de dados</title>
</head>
<body>
<?php
    function conexao(){
        $conexao = mysqli_connect("localhost","root","");
        $numeroDeBancos = mysqli_num_rows(mysqli_query($conexao,"SHOW DATABASES"));
        echo "Na sua conexão foram encontrados $numeroDeBancos bancos de dados.";
    }
    conexao();
?>
</body>
</html>