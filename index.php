<?php
class Movie {
    public $title;
    public $genre;
    public $duration;
    public $country;
    public $poster;
    public $year;


    function __construct($_title, $_genre, $_duration, $_country, $year) {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->duration = $_duration;
        $this->country = $_country;
        // $this->poster = $poster;
        $this->year = $year;
    }

    public function getDetails() {
        return "Titolo: {$this->title} Genere: {$this->genre} Durata: {$this->duration} Paese: {$this->country} Anno: {$this->year}";
    }
}

$movie1 = new Movie("Guardiani della Galassia Vol 3", "Fantascienza", "2h 30m", "USA", "2023");
$movie2 = new Movie("Ant-Man and The Wasp: Quantumania", "Fantascienza", "2h 05m", "USA", "2023");
$movie3 = new Movie("Doctor Strange nel Multiverso della Follia", "Fantascienza", "2h 06m", "USA", "2022");
$movie4 = new Movie("Thor: Love and Thunder", "Fantascienza", "2h 05m", "USA", "2022");

// echo $movie1->getDetails() . "\n";
// echo $movie2->getDetails() . "\n";

var_dump($movie1, $movie2, $movie3, $movie4)

?>