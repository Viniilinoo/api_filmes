<?php 

require_once "config/config.php";
require_once "model/filmeModel.php";
require_once "view/filmes.php";

$api_key = '87550dc6ab1040faeb6418798680f5a4';

$url = 'http://api.themoviedb.org/3/movie/popular?api_key=87550dc6ab1040faeb6418798680f5a4&language=pt-BR';

$response = file_get_contents($url);

$data = json_decode($response, true);

foreach($data ['results'] as $filme){
    $titulo = $filme['title'];
    $descricao = $filme['overview'];
    $poster = "http://image.tmdb.org/t/p/w500/" . $filme['poster_path'];
    salvarFilmes($titulo, $descricao, $poster);
}

$filmes = listarFilmes();



?> 