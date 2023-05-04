<?php

class Movie {
    public $title;
    public $release_date;
    public $description;
    public $vote;
    public $genres;

    public function __construct( string $title, string $release_date, array $genres,int $vote = null, string $description = '')
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

$allGenres = ['avventura','azione','fantascienza'];


$avatar = new Movie('Avatar: The Way of Water','14/12/2022',$allGenres,4);
var_dump($avatar);

$superMario = new Movie('Super Mario : The Movie','05/04/2023',$allGenres,5);
var_dump($superMario);

$starWars = new Movie('Star Wars','18/02/2024',$allGenres);
var_dump($superMario);


echo $avatar->getTitleFilm();
echo $avatar->getAllGenres();

echo $superMario->getTitleFilm();
echo $superMario->getAllGenres();