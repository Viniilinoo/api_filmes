<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Filmes Populares</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
    <h1>Filmes Populares</h1>
    <hr>

    <div id="filmes-conteiner">

        <?php

            foreach ($filmes as $filmes) {

                    echo "<div class='filme'>";
                    echo "<h2>" . $filme['titulo'] . "</h2>";
                    echo "<img src=" . $filme['poster'] . "alt='Filme'>";
                    echo "<p>" . $filme['descricao'] . "</p>"; 
                    echo "</div>";  

            }

        ?>

    </div>



</body>
</html>