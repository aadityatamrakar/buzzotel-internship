<?php

require_once 'functions.php';

$movies_data = file_get_contents('input.json');     // Load Movies Json File
$movies = json_decode($movies_data, true);          // Convert to Array

$result = []; // Initialize Blank Array for Result & Filtering

foreach ($movies as $index=>$movie)
{
    // Get Movies of This Movie Director
    $similar_director = isset($movie['director'])?get_movies_from_director($movies, $movie['director']):[];

    // Get Same Director Movies then Filter Similar Genres Movie
    $similar_genre = isset($movie['genre'])?get_similar_genre($similar_director, $movie['genre']):[];

    // Get Titles only
    $similar_director_titles = get_titles_only($similar_director);
    $similar_genre_titles = []; //get_titles_only($similar_genre);

    $result[$movie['title']] = array_diff(
        array_merge($similar_director_titles, $similar_genre_titles),
        array($movie['title']) // Removing this Movie title from List
    );
}

if(isset($_GET['pretty']))
    echo "<pre>" . json_encode($result, JSON_PRETTY_PRINT) . "</pre>";
else
    echo json_encode($result);

?>