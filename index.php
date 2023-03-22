<?php
//  - è definita una classe 'Movie'
//    => all'interno della classe sono dichiarate delle variabili d'istanza
//    => all'interno della classe è definito un costruttore
//    => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti 'Movie' e stampati a schermo i valori delle relative proprietà
// Bonus 1:
// Modificare la classe Movie in modo che accetti piú di un genere.
// Bonus 2:
// Creare un layout completo per stampare a schermo una lista di movies.
// Facciamo attenzione all'organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
// - creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
// - mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
// - organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.

require_once __DIR__ . "/models/movie.php";
require_once __DIR__ . "/models/genere.php";
require_once __DIR__ . "/data/list_movies.php";

$array_movies = [];
foreach($movies as $movie){
    $array_movies[] = new Movie(
        $movie["titolo"],
        $movie["genere"],
        $movie["paese"],
        $movie["durata"],
        $movie["valutazione"],
    );
}




// $Topolino = new Movie("Viaggio di Topolino", "Animazione", "USA", "2h", 5);
// var_dump($Topolino);
// $Topolino->setValutazione(5);
// var_dump($Topolino);

// $Paperino = new Movie("Viaggio di Paperino", "Animazione", "USA", "1h", 8);
// var_dump($Paperino);
// $Paperino->setValutazione(8);
// var_dump($Paperino);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>films</title>
</head>

<body>
    <div class="container">
        <h1>Films</h1>
        <?php foreach($array_movies as $movie) : ?>
        <h4><?= $movie->titolo ?></h4>
        <h4><?= $movie->genere ?></h4>
        <h4><?= $movie->paese ?></h4>
        <hr>
        <?php endforeach; ?>

    </div>
</body>

</html>