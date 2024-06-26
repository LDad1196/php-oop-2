<?php

include __DIR__ . "/models/product.php";
include __DIR__ . "/models/categoria.php";
include __DIR__ . "/models/game.php";
include __DIR__ . "/models/cuccia.php";
include __DIR__ . "/models/food.php";

$cane = new Categoria("Cane");
$gatto = new Categoria("Gatto");

$prodotti_gioco = [
    new Gioco("Purina", "Osso", 10, "img/dog.jpg", $cane, "Osso"),
];

$prodotti_cuccia = [
    new Cuccia("Igloo", "Cuccia", 35, "img/cat.jpeg", $gatto, "80*35*120", "Plastica"),
];   

$prodotti_cibo = [
    new Food("Royal Canin", "Crocchette", 27, "img/cat.jpeg", $cane, "3000kcal", "Miste"),
];  

$prodotti_generici = [
    new Food("Whiskas", "Crocchette", 23, "img/cat.jpeg", $gatto, "300kcal", "Miste"),
];