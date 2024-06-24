<?php

include __DIR__ . "/models/data.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Lista Elementi</title>
</head>
<body>
    
    <h1 class="text-center my-2">Welcome to OOP 2</h1>

    <ul>
        <?php foreach($prodotti_cani as $prodotti) {
            echo "<li>" . $prodotti->descrizione() . "</li>";
        }?>
    </ul>

    <ul>
        <?php foreach($prodotti_gatti as $prodotto) {
            echo "<li>" . $prodotto->descrizione() . "</li>";
        }?>
    </ul>

</body>
</html>