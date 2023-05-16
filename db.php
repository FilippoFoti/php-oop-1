<?php
require __DIR__ . "/Models/movie.php";

$movies = array(
    new Movie("https://mr.comingsoon.it/imgdb/locandine/235x336/59695.jpg", "Guardiani della Galassia Vol 3", ["Fantascienza", "Azione", "Commedia"], "2h 30m", "USA", "2023"),
    new Movie("https://mr.comingsoon.it/imgdb/locandine/235x336/59685.jpg" ,"Ant-Man and The Wasp: Quantumania", ["Avventura", "Fantascienza", "Azione", "Commedia"], "2h 05m", "USA", "2023"),
    new Movie("https://mr.comingsoon.it/imgdb/locandine/235x336/58184.jpg" ,"Doctor Strange nel Multiverso della Follia", ["Fantascienza", "Azione"], "2h 06m", "USA", "2022"),
    new Movie("https://mr.comingsoon.it/imgdb/locandine/235x336/58016.jpg" ,"Thor: Love and Thunder", ["Azione","Fantascienza", "Avventura"], "2h 05m", "USA", "2022"),
);
