<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Filmes Populares</h1>
    <hr>
    <div id="filmes-container">

        <?php

        foreach ($filmes as $filme) {
            echo "<div class='filmes'";
            echo "h2" . $filme["titulo"] . "<h2>";
            echo "<img src= '" . $filme["poster"] . " 'alt='filme'>";
            echo "<p>" . $filme['descricao'] . '</p>';
            echo "</div>";
        }



        ?>










    </div>
</body>

</html>