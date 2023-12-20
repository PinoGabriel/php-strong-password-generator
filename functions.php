<?php

$caratteri = '';

if (isset($_GET['lunghezzaPassword'])) {
    $lunghezzaPassword = $_GET['lunghezzaPassword'];
}

if (isset($_GET['lettereMin'])) {
    $caratteri .= 'abcdefghijklmnopqrstuvwxyz';
}

if (isset($_GET['lettereMax'])) {
    $caratteri .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
}

if (isset($_GET['numeri'])) {
    $caratteri .= '0123456789';
}

if (isset($_GET['simboli'])) {
    $caratteri .= '!#&?';
}

function generaPassword($lunghezza, $caratteri)
{
    $parola = "";
    $lunghezzaTotale = strlen($caratteri);
    for ($i = 0; $i < $lunghezza; $i++) {
        $indiceRandom = rand(0, $lunghezzaTotale - 1);
        $parola .= $caratteri[$indiceRandom];
    }

    return $parola;
};

$password = generaPassword($lunghezzaPassword, $caratteri);
