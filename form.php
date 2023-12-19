<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <title>Form</title>
</head>

<body>
    <form class="text-center m-5" action="password.php" method="GET">
        <label class="form-label" for="number">Lunghezza Password da generare: </label>
        <input class="ms-3" type="number" name="lunghezzaPassword" min="5" max="16">
        <button class="btn btn-primary" type="submit">Genera</button>
    </form>
</body>

</html>