<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <title>PasswordGenerator</title>
</head>

<?php
include __DIR__ . "/functions.php";
?>

<body>
    <div class="text-center mt-5">
        <h1>La tua password è: </h1>
        <h3><?php if (strlen($password) >= 5 && strlen($password) <= 16) {
                echo $password;
            } else {
                echo "La password generata non rispetta i criteri di lunghezza.";
            } ?></h3>
        <form action="form.php">
            <button class="mt-5 btn btn-primary" type="submit">Torna al generatore</button>
        </form>
    </div>
</body>

</html>