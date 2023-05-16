<?php

class Movie {
    public $title;
    public $genre;
    public $duration;
    public $country;
    public $poster;
    public $year;


    function __construct( $poster, $_title, $_genre, $_duration, $_country, $year) {
        $this->poster = $poster;
        $this->title = $_title;
        $this->genre = $_genre;
        $this->duration = $_duration;
        $this->country = $_country;
        $this->year = $year;
    }

    public function getDetails() {
        return implode(", ", $this->genre);
        // $genreString = implode(", ", $this->genre);
        // return "Titolo: {$this->title} Genere: {$genreString} Durata: {$this->duration} Paese: {$this->country} Anno: {$this->year}";
    }
}
