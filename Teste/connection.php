<?php

    //FUNCAO DE CONEXAO
    function DB_connection(){
        $link = @mysqli_connect('DB_HOSTNAME', 'DB_USERNAME', 'DB_PASSWORD', 'DB_DATABASE') or die(mysqli_connect_error());
        mysqli_set_charset($link, 'DB_CHARSET') or die(mysqli_error($link));
        return $link;
    }

    //FUNCAO DE FECHAMENTO
    function DB_close($link){
        @mysqli_close($link) or die(mysqli_error($link));
    }
?>
