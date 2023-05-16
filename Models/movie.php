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
        $genreString = implode(", ", $this->genre);
        return "Titolo: {$this->title} Genere: {$genreString} Durata: {$this->duration} Paese: {$this->country} Anno: {$this->year}";
    }
}

?>