<?php

class Categoria
{
    public $genere_animale;
    public $icona_animale;

    public function __construct($genere_animale, $icona_animale)
    {
        $this->genere_animale = $genere_animale;
        $this->icona_animale = $icona_animale;
    }
}