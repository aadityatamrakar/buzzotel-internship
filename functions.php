<?php

/*
 * Filter movies from Similar Genre
 */
function get_similar_genre($movies, $genres)
{
    $filtered = [];

    foreach ($movies as $movie)
    {
        if(isset($movie['genre']) && count($movie['genre']) > 0)
        {
            foreach($genres as $genre)
            {
                if(in_array($genre, $movie['genre']))
                {
                    $filtered[] = $movie;
                    break;
                }
            }
        }
    }

    return $filtered;
}

/*
 * Filter movies from Director
 */
function get_movies_from_director($movies, $director)
{
    $filtered = [];

    foreach ($movies as $movie) {
        if($movie['director'] == $director)
            $filtered[] = $movie;
    }

    return $filtered;
}

/*
 * Return Titles only of Filtered Movies
 */
function get_titles_only($movies)
{
    $titles = [];

    foreach ($movies as $movie)
        $titles[] = $movie['title'];

    return $titles;
}

?>