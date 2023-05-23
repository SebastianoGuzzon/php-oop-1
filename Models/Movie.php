<?php

class Movie {
    public $titles;
    public $genres;
    public $poster;
    public $duration;

    public function __construct($titles, $genres, $poster, $duration) {
        $this->titles = $titles;
        $this->genres = $genres;
        $this->poster = $poster;
        $this->duration = $duration;
    }

    public function printDetails() {
        echo "Titles: " . implode(", ", $this->titles) . "<br>";
        echo "Genres: " . implode(", ", $this->genres) . "<br>";
        echo "Poster: " . $this->poster . "<br>";
        echo "Duration: " . $this->duration . " min" . "<br>";
        echo "<br>";
    }
}