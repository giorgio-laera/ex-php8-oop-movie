
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once './Models/movie.php';

require_once './Models/genre.php';
$rick_morty = new Movie('rick & Morty', ' Justin Roiland',false);
//$che_bella_giornata = new Movie('Che bella giornata', 'Francesco Medici',true, new Genre ('comico, drammatico'));



//var_dump($rick_morty);
var_dump($rick_morty);
var_dump($rick_morty->getSeen());
// var_dump($che_bella_giornata);
// var_dump($che_bella_giornata->getSeen());
$action = new Genre("Azione");
$rick_morty->addGenre($action);
var_dump( $rick_morty->getGenre());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1>ciao</h1>
</body>
</html>