<?php
include __DIR__ . "/data.php";
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
    <h2 class="text-center">Le Card dei Prodotti per animali sono:</h2>
        <div class="row m-0 p-0 justify-content-between">
            <?php foreach ($prodotti_generici as $prodotto) { ?>
                <div class="card col-2 px-2 py-2 bg-black">
                    <img src="<?= $prodotto->immagine ?>" class="card-img-top img-fluid h-50" alt="immagine-cucce">
                    <div class="card-body bg-secondary text-center">
                        <h6 class="card-title"><b>Marca:</b> <?= $prodotto->marca ?></h6>
                        <p class="card-text"><b>Tipo:</b> <?= $prodotto->nome ?></p>
                        <p class="card-text"><b>Prezzo:</b> <?= $prodotto->prezzo ?> <b>€</b></p>

                        <?php if (get_class($prodotto) == "Cibo") { ?>
                            <p class="card-text"><b>Calorie:</b> <?= $prodotto->kcal_cibo ?></p>
                            <p class="card-text"><b>Tipo:</b> <?= $prodotto->tipo_cibo ?></p>
                        <?php } elseif (get_class($prodotto) == "Cuccia") { ?>
                            <p class="card-text"><b>Dimensione:</b> <?= $prodotto->dimensioni_cuccia ?></p>
                            <p class="card-text"><b>Materiale:</b> <?= $prodotto->materiale_cuccia ?></p>
                        <?php } elseif (get_class($prodotto) == "Gioco") { ?>
                            <p class="card-text"><b>Tipo Gioco:</b> <?= $prodotto->materiale_gioco ?></p>
                        <?php } ?>

                        <p class="card-text"><b>Adatto Per:</b></p>
                        <img src="<?= $prodotto->categoria->get_icona() ?>" alt="" class="my-w">
                    </div>
                </div>
            <?php } ?>
        </div>

    <!--  -->
    <h2 class="text-center">Le Card dei giochi per animali sono:</h2>
    <div class="row m-0 p-0 justify-content-between">
        <?php foreach ($prodotti_gioco as $gioco) { ?>
            <div class="card col-2 px-2 py-2 bg-black">
                <img src="<?= $gioco->immagine ?>" class="card-img-top img-fluid h-50" alt="immagine-giochi">
                <div class="card-body bg-secondary text-center">
                    <h6 class="card-title"><b>Marca:</b> <?= $gioco->marca ?></h6>
                    <p class="card-text"><b>Gioco:</b> <?= $gioco->nome ?></p>
                    <p class="card-text"><b>Prezzo:</b> <?= $gioco->prezzo ?> <b>€</b></p>
                    <p class="card-text"><b>Tipo:</b> <?= $gioco->materiale_gioco ?></p>
                    <p class="card-text"><b>Adatto Per:</b></p>
                    <img src="<?= $gioco->categoria->get_icona() ?>" alt="" class="my-w">
                </div>
            </div>
        <?php } ?>
    </div>

    <h2 class="text-center">Le Card delle Cucce per animali sono:</h2>
    <div class="row m-0 p-0 justify-content-between">
        <?php foreach ($prodotti_cuccia as $cuccia) { ?>
            <div class="card col-2 px-2 py-2 bg-black">
                <img src="<?= $cuccia->immagine ?>" class="card-img-top img-fluid h-50" alt="immagine-cucce">
                <div class="card-body bg-secondary text-center">
                    <h6 class="card-title"><b>Marca:</b> <?= $cuccia->marca ?></h6>
                    <p class="card-text"><b>Tipo:</b> <?= $cuccia->nome ?></p>
                    <p class="card-text"><b>Prezzo:</b> <?= $cuccia->prezzo ?> <b>€</b></p>
                    <p class="card-text"><b>Dimensione:</b> <?= $cuccia->dimensioni_cuccia ?></p>
                    <p class="card-text"><b>Materiale:</b> <?= $cuccia->materiale_cuccia ?></p>
                    <p class="card-text"><b>Adatto Per:</b></p>
                    <img src="<?= $cuccia->categoria->get_icona() ?>" alt="" class="my-w">
                </div>
            </div>
        <?php } ?>
    </div>

    <h2 class="text-center">Le Card dei Cibi per animali sono:</h2>
    <div class="row m-0 p-0 justify-content-between">
        <?php foreach ($prodotti_cibo as $cibo) { ?>
            <div class="card col-2 px-2 py-2 bg-black">
                <img src="<?= $cibo->immagine ?>" class="card-img-top img-fluid h-50" alt="immagine-cucce">
                <div class="card-body bg-secondary text-center">
                    <h6 class="card-title"><b>Marca:</b> <?= $cibo->marca ?></h6>
                    <p class="card-text"><b>Tipo:</b> <?= $cibo->nome ?></p>
                    <p class="card-text"><b>Prezzo:</b> <?= $cibo->prezzo ?> <b>€</b></p>
                    <p class="card-text"><b>Calorie:</b> <?= $cibo->kcal_cibo ?></p>
                    <p class="card-text"><b>Tipo:</b> <?= $cibo->tipo_cibo ?></p>
                    <p class="card-text"><b>Adatto Per:</b></p>
                    <img src="<?= $cibo->categoria->get_icona() ?>" alt="" class="my-w">
                </div>
            </div>
        <?php } ?>
    </div>
</body>
</html>