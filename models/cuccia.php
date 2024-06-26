<?php

class Cuccia extends Prodotto
{
    public $dimensioni_cuccia;
    public $materiale_cuccia;

    public function __construct($marca, $nome, $prezzo, $immagine, Categoria $categoria, $dimensioni, $materiale)
    {
        $this->marca = $marca;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
        $this->dimensioni_cuccia = $dimensioni;
        $this->materiale_cuccia = $materiale;
    }
}