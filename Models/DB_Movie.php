<?php

class Movie {
    public $title;
    public $release_date;
    public $description;
    public $vote;
    public $genres;

    public function __construct( string $title, string $release_date, array $genres, $vote = 'Coming-soon', string $description = '')
    {
        $this->title = $title;
        $this->release_date = $release_date;
        $this->description = $description;
        $this->vote = $vote;
        $this->genres = $genres;

    }

    public function getTitleFilm(){
        return $this->title . '( vote: ' . $this->vote . ') <br />';
    }

    public function getAllGenres(){
        $generi='';

        foreach($this->genres as $genre){
            $generi .= $genre .'<br />';
        }
        
        return $generi;

    }

}