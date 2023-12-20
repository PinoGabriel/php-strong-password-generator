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
        <div class="container row my-5 mx-auto col-12">
            <label class="form-label col-6" for="number">Lunghezza Password da generare: </label>
            <input class="col-2" type="number" name="lunghezzaPassword" min="5" max="16" required>
        </div>
        <div class="container row my-5 mx-auto col-12">
            <div>
                <label class="form-check-label" for="lettereMinuscole">
                    Lettere minuscole
                </label>
                <input class="form-check-input" type="checkbox" name="lettereMin" value="Lm" id="lettereMinuscole" checked>
            </div>
            <div>
                <label class="form-check-label" for="lettereMaiuscole">
                    Lettere Maiuscole
                </label>
                <input class="form-check-input" type="checkbox" name="lettereMax" value="LM" id="lettereMaiuscole">
            </div>
            <div>
                <label class="form-check-label" for="numeri">
                    Numeri
                </label>
                <input class="form-check-input" type="checkbox" name="numeri" value="N" id="numeri">
            </div>
            <div>
                <label class="form-check-label" for="simboli">
                    Simboli
                </label>
                <input class="form-check-input" type="checkbox" name="simboli" value="S" id="simboli">
            </div>
        </div>


        <button class="btn btn-primary" type="submit">Genera</button>
    </form>
</body>

</html>