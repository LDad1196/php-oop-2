<?php

class Food extends Prodotto
{
    public $kcal_food;
    public $tipo_food;


    public function __construct( $marca, $nome, $prezzo, $immagine, Categoria $categoria, $cal, $tipo)
    {
        $this->marca = $marca;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
        $this->kcal_cibo = $cal;
        $this->tipo_cibo = $tipo;
    }
}