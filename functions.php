<?php

$caratteri = [];

if (isset($_GET['lunghezzaPassword'])) {
    $lunghezzaPassword = $_GET['lunghezzaPassword'];
}

if (isset($_GET['lettereMin'])) {
    $caratteri = array_merge($caratteri, str_split('abcdefghijklmnopqrstuvwxyz'));
}

if (isset($_GET['lettereMax'])) {
    $caratteri = array_merge($caratteri, str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ'));
}

if (isset($_GET['numeri'])) {
    $caratteri = array_merge($caratteri, str_split('0123456789'));
}

if (isset($_GET['simboli'])) {
    $caratteri = array_merge($caratteri, str_split('!#&?'));
}

function generaPassword($lunghezza, $caratteri, $ripetizione)
{
    $parola = "";
    $lunghezzaTotale = count($caratteri);

    if ($ripetizione == 0 && $lunghezza > $lunghezzaTotale) {
        return "La lunghezza richiesta è maggiore della disponibilità di caratteri unici.";
    }

    for ($i = 0; $i < $lunghezza; $i++) {
        $indiceRandom = rand(0, $lunghezzaTotale - 1);

        if ($ripetizione == 0) {
            $parola .= array_splice($caratteri, $indiceRandom, 1)[0];
            $lunghezzaTotale--;
        } else {
            $parola .= $caratteri[$indiceRandom];
        }
    }

    return $parola;
}

$password = generaPassword($lunghezzaPassword, $caratteri, $_GET['ripetizioneCaratteri']);
