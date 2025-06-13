<?php

    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $db = 'tmdb_filmes'; 

    try{

        $pdo = new PDO("mysql:host=$host; dbname=$db", $usuario, $senha);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //echo "Conexão realizada com sucesso!";

    }

    catch(PDOException $e){

        echo "Não foi possível conectar!" . $e->getMessage();           


    }

?>