<?php

require __DIR__ . '/Models/DB_Movie.php';
require __DIR__ . '/Models/allMovieAdded.php';
require __DIR__ . '/Models/allGenres.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-black text-white">
    <div class="container">
        <div class="row mt-4">
            <h1 class="text-center my-4">Lista Film</h1>
            <table class="table text-white table-bordered border-white">
                <thead>
                    <tr>
                    <th scope="col">Copertina</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">data di rilascio</th>
                    <th scope="col">voto</th>
                    <th scope="col">genere</th>
                    <th scope="col">descrizione</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($movieList as $movie){ ?>
                            <tr>
                                <td><img class="w-100 h-100" src="./CopertinaFilm/<?php echo $movie->img; ?>.jpg" ></td>
                                <td> <?php echo $movie->title; ?></td>
                                <td> <?php echo $movie->release_date; ?></td>
                                <td > <?php echo $movie->vote; ?></td>
                                <td> <?php 
                                    foreach($allGenres as $genere){
                                        echo $genere . ' ';
                                    }
                                    echo '.';
                                ?></td>
                                <td > <?php echo $movie->description; ?></td>
                            </tr>
                     <?php   } ?>
                </tbody>
            </table>
        </div>

    </div>
    
</body>
</html>