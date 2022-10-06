<?php
//connect to MySQL
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

    $query = 'select people_fullname as actor,(select people_fullname from people where movie.movie_director = people.people_id) as director, movie_name as movie
    from people, movie
    where movie.movie_leadactor = people.people_id;  
    ';

echo 'consulta echa';
mysqli_query($db,$query) or die(mysqli_error($db));