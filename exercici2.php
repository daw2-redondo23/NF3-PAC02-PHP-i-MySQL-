<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

mysqli_select_db($db,'moviesite') or die(mysqli_error($db));
$query = 'INSERT INTO movie
        (movie_id, movie_name, movie_type, movie_year, movie_leadactor,
        movie_director)
    VALUES
        (4, "Wolverine", 1, 2011, 7, 2),
        (5, "Deadpool", 1, 2016, 8, 6),
        (6, "The equalizer", 1, 2019, 9, 3)';
$query2 = 'INSERT INTO movietype 
        (movietype_id, movietype_label)
        VALUES 
        (9, "Musical"),
        (10, "Fantasy"),
        (11, "Documental")';
$query3  = 'INSERT INTO people
(people_id, people_fullname, people_isactor, people_isdirector)
VALUES
(7, "Hugh Jackman", 1, 0),
(8, "Ryan Reynolds", 1, 0),
(9, "Denzel Washington", 1, 0)';
mysqli_query($db,$query) or die(mysqli_error($db));
mysqli_query($db,$query2) or die(mysqli_error($db));
mysqli_query($db,$query3) or die(mysqli_error($db));
echo 'Datos nuevos insertados';
