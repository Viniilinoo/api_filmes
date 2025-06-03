<?php

    require_once 'config/config.php'; 


    function salvarFilme($titulo, $descricao, $poster){

        global $pdo; 

        try {

            $sql = "INSERT INTO filmes (titulo, descricao, poster) VALUES ('$titulo', '$descricao', '$poster')"; 

            $pdo->query($sql); 


        } 

        catch(PDOExcepction $e){
            echo "Erro ao salvar informações" . $e->getMessage();
        }


    }



    function listarFilmes() {
        global $pdo;
        
        $sql = "SELECT * FROM filmes";
        $result = $pdo->query($sql);
        return $result->fetchALL(PDO::FETCH_ASSOC);
    }
?>