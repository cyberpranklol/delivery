<?php


function cenaDostave($grad, $dostava)
{
    $udaljenost = isset($dostava[$grad]) ? $dostava[$grad] : null;

    if ($udaljenost === null) {
        return "Dostava nije moguća do datog grada.";
    }
    else if ($udaljenost <= 100) {
        return 200;
    }
    else if ($udaljenost > 100 && $udaljenost <= 200) {
        return 350;
    }
    else {
        return 500;
    }
}

$dostava = [
    "Subotica" => 220,
    "Pancevo" => 10,
    "Sarajevo" => 292,
    "Split" => 799
];

$grad = "Subotica";

$cena = cenaDostave($grad, $dostava);

if (is_numeric($cena)) {
    echo "Rastojanje $grad - Beograd je $dostava[$grad] km, dostava je $cena dinara.";
}
else {
    echo $cena;
}
?>