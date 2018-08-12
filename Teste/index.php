<!DOCTYPE HTML>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title> Teste inicial com php </title>
</head>
<body>

    <?php
        //REQUISICOES
        require 'config.php';
        require 'connection.php';

        //INICIO DA CONEXAO
        $link = DB_connection();


        //FINAL DA CONEXAO
        DB_close($link);

    ?>

</body>
</html>
