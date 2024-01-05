<?php

// 1. Napisati funkciju koja racuna iznos kamate za kredit na osnovu godine

// Pre 2000 godine, kamata 0.05%
// Izmedju 2000 - 2010, kamata 0.08%
// Izmedju 2011 - 2020, kamata 0.1%
// Posle 2020 kamata je 0.14%

    function izracunajKamatu($iznos, $godina) {
        $kamata = 0;

        if ($godina < 2000) {
            $kamata = $iznos * 0.05; // Kamata 0.05%
        } elseif ($godina >= 2000 && $godina <= 2010) {
            $kamata = $iznos * 0.08; // Kamata 0.08%
        } elseif ($godina >= 2011 && $godina <= 2020) {
            $kamata = $iznos * 0.1; // Kamata 0.1%
        } else {
            $kamata = $iznos * 0.14; // Kamata 0.14%
        }

        return $kamata;
    }

    // Primer poziva funkcije za izračun kamate za kredit od $5000 u određenoj godini
    $iznosKamate = izracunajKamatu(10000, 2023);
    echo "Iznos kamate je: $iznosKamate";