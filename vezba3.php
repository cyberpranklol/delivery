<?php

  //1. Napisati funkciju za kalkulaciju popusta, popust je uvek 10%
  
  //2. Izracunati popust za sve brojeve iz varijable $brojevi
  //Upisati svaki popust u arrayu $popusti
  // $brojevi = [250, 330, 1000, 2000, 5000];
  // $popusti = [];

  //U varijablu $ukupanPopust upisati koliki je ukupan iznos niza $popusti
  // $ukupanPopust = 0;

  // $popusti = [25,33,100,200,500];
  // $ukupanPopust = 858;

    function izracunajPopust($iznos) {
        return $iznos * 0.1; // Popust je uvek 10%
    }

    $brojevi = [250, 330, 1000, 2000, 5000];
    $popusti = [];
    $ukupanPopust = 0;

    foreach ($brojevi as $broj) {
        $popust = izracunajPopust($broj);
        $popusti[] = $popust; // Dodavanje izračunatog popusta u niz $popusti
        $ukupanPopust += $popust; // Dodavanje izračunatog popusta u ukupan popust
    }

    // Ispisivanje rezultata
    // print_r($popusti); // Prikazuje popuste za svaki broj
    echo "Ukupan popust za danasnji dan je: $ukupanPopust"; // Prikazuje ukupan popust
