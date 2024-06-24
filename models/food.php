<?php

class Cibo extends Prodotto
{
    public $cibo;

    public function __construct($nome, $prezzo, $immagine, $cibo, Categoria $categoria)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->cibo = $cibo;
        $this->categoria = $categoria;
    }
}