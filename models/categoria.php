<?php

class Categoria
{
    public $genere_animale;
    public $icona_animale;

    public function __construct($genere_animale, $icona_animale)
    {
        $this->genere_animale = $genere_animale;
    }

    public function get_icona()
    {
        if ($this->genere_animale == "Cane") {
            return $this->icona_animale = "img/dog.jpg";
        } else {
            return $this->icona_animale = "img/cat.jpg";
        }
    }
}