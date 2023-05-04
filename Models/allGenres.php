<?php

class Genres {

public $name;
public $over18;
public $description;

public function __construct($name, $over18, $description = '')
    {
        $this->name = $name;
        $this->over18 = $over18;
        $this->description = $description;
    }
    public function getAllGenres(){
        return 'genere: '. $this->name . ' <br /> 
                over18:' . $this->over18 . '<br />
                descrizione:' . $this->$description;
    }
}