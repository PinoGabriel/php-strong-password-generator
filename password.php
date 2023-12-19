<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <title>PasswordGenerator</title>
</head>

<?php
if (isset($_GET['lunghezzaPassword'])) {
    $lunghezzaPassword = $_GET['lunghezzaPassword'];
}

$caratteri = [
    'abcdefghijklmnopqrstuvwxyz',
    'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
    '0123456789',
    '!#&?'
];

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

$password = generaPassword($lunghezzaPassword, $caratteri)
?>

<body>
    <div class="text-center mt-5">
        <h1>La tua password è: </h1>
        <h3><?php if (strlen($password) >= 5) {
                echo $password;
            } else {
                echo "Nessun numero inserito";
            } ?></h3>
        <form action="form.php">
            <button class="mt-5 btn btn-primary" type="submit">Torna al generatore</button>
        </form>
    </div>
</body>

</html>