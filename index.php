<?php

require_once __DIR__ . "/Models/movie.php";

$movie1 = new Movie("Guardiani della Galassia Vol 3", ["Fantascienza", "Azione", "Commedia"], "2h 30m", "USA", "2023");
$movie2 = new Movie("Ant-Man and The Wasp: Quantumania", ["Avventura", "Fantascienza", "Azione", "Commedia"], "2h 05m", "USA", "2023");
$movie3 = new Movie("Doctor Strange nel Multiverso della Follia", ["Fantascienza", "Azione"], "2h 06m", "USA", "2022");
$movie4 = new Movie("Thor: Love and Thunder", ["Azione","Fantascienza", "Avventura"], "2h 05m", "USA", "2022");

// var_dump($movie1, $movie2, $movie3, $movie4)

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
</head>
<body>

    <?php 
    echo $movie1->getDetails() . "<br>";
    echo $movie2->getDetails() . "<br>";
    echo $movie3->getDetails() . "<br>";
    echo $movie4->getDetails() . "<br>";
    ?>
    
</body>
</html>