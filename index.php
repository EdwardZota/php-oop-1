<?php

class Movie {
    public $title;
    public $release_date;
    public $description;
    public $vote;

    public function __construct( string $title, string $release_date, int $vote, string $description = '')
    {
        $this->title = $title;
        $this->release_date = $release_date;
        $this->description = $description;
        $this->vote = $vote;
    }

    public function getTitleFilm(){
        return $this->title . '( vote: ' . $this->vote . ') <br />';
    }
}

$avatar = new Movie('Avatar: The Way of Water','14/12/2022',4);
var_dump($avatar);

$superMario = new Movie('Super Mario : The Movie','05/04/2023',5);
var_dump($superMario);


echo $avatar->getTitleFilm();
echo $superMario->getTitleFilm();