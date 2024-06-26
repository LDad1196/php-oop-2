<?php 
class Prodotto 
{
    public $marca;
    public $nome;
    public $prezzo;
    public $immagine;
    public $categoria;

    public function __construct($marca, $nome, $prezzo, $immagine, Categoria $categoria)
    {
        $this->marca = $marca;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
    }
}