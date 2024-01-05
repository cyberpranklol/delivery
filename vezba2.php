<?php

//Napisati funkciju koja vraca obracunati popust
// Primer: izracunajPopust(1500, 10) - treba da vrati 150

    function izracunajPopust($iznos, $procenatPopusta) {
        if ($procenatPopusta <= 0 || $iznos <= 0) {
            return 0; // U slučaju neispravnih vrednosti vraćamo 0
        }

        $popust = ($iznos * $procenatPopusta) / 100;
        return $popust;
    }

    // Primer poziva funkcije:
    $popustIznos = izracunajPopust(1500, 10);
    echo $popustIznos; // Ispisuje: 150