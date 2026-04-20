<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once './Trais/houseProductor.php';
    require_once './Models/movie.php';
    require_once './Models/genre.php';
    require_once './movieDb.php';

    echo($movies[0]->getGenre()[0]->name);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1>ciao</h1>
    <div class="container d-flex gap-2">
        <?php foreach($movies as $movie){ ?>
        <div class="card " style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $movie->title ?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary"> <?php echo $movie->getSeen() ?></h6>
                <p class="card-text"><strong>Anno di rilascio:</strong> <?php echo $movie->relase_year ?></p>
                <p class="card-text"><strong>Descrizione:</strong> <?php echo $movie->description ?></p>
                <p class="card-text"><strong>Autore:</strong> <?php echo $movie->autor ?></p>
                <p class="card-text"><strong>Casa produttrice:</strong> <?php echo $movie->getProductor() ?></p>
                <p class="card-text"><strong>Genere:</strong> <?php $genres = [];
                                                      foreach ($movie->getGenre() as $genre) {
                                                          $genres[] = $genre->name;
                                                  }
                                                  echo implode(",", $genres)?></p>
            </div>
        </div>
        <?php } ?>
    </div>
</body>

</html>