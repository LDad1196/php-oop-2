<?php 

class Gioco extends Prodotto {
    public $gioco;

    public function __construct($nome, $prezzo, $immagine, $gioco,  Categoria $categoria) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
        $this->gioco = $gioco;
    }
} 