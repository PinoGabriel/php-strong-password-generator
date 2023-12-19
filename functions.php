<?php
function generaPassword($lunghezza, $caratteri)
{
    $parola = "";
    for ($i = 0; $i < $lunghezza; $i++) {
        $categoriaCasuale = rand(0, 3);
        $last = strlen($caratteri[$categoriaCasuale]) - 1;
        $parola .= $caratteri[$categoriaCasuale][rand(0, $last)];
    }

    return $parola;
}
