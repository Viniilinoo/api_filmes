<?php

require_once 'config/config.php';

function salvarFilmes($titulo, $descricao, $poster){

    global $pdo;

    try {
        
        $sql = "INSERT INTO filmes(titulo, descricao, poster) VALUES ('$titulo', '$descricao', '$poster')";

        $pdo->query($sql);

    } catch (\PDOException $e) {

        echo "erro ao salvar informações" . $e->getMessage();
    }
}

function listarFilmes(){
    global $pdo;

    try {
        
        $sql = "SELECT * FROM  INTO filmes";

        $result = $pdo->query($sql);

        return $result->fetchAll(PDO::FETCH_ASSOC);

    } catch (\PDOException $e) {

        echo "erro ao salvar informações" . $e->getMessage();
    }
}

?>