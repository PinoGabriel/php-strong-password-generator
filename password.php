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
    $lunghezzaPassword  = $_GET['lunghezzaPassword'];
}

function generaPassword($lunghezza)
{
    $parola = "";
    for ($i = 0; $i < $lunghezza; $i++) {
        $parola .= "ciao";
    }

    return $parola;
}

$password = generaPassword($lunghezzaPassword)
?>

<body>
    <h1><?php echo $password; ?></h1>
</body>

</html>