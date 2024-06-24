<?php

class Cuccia extends Prodotto
{
    public $cuccia;

    public function __construct($nome, $prezzo, $immagine, $cuccia, Categoria $categoria)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->cuccia = $cuccia;
        $this->categoria = $categoria;
    }
}