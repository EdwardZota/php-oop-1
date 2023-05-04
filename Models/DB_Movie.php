<?php

class Movie {
    public $title;
    public $release_date;
    public $description;
    public $vote;
    public $genres;
    public $img;

    public function __construct( string $img, string $title, string $release_date, array $genres, $vote = 'Coming-soon', string $description = '')
    {
        $this->title = $title;
        $this->release_date = $release_date;
        $this->description = $description;
        $this->vote = $vote;
        $this->genres = $genres;
        $this->img = $img;

    }

    public function getTitleFilm(){
        return $this->title . '( vote: ' . $this->vote . ') <br />';
    }

}