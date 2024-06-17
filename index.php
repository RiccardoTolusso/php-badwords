<?php
$current_url = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No Bad Words Allowed</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="vh-100 bg-secondary">
        <div class="container text-center">

            <div class="py-5">
                <h1 class="display-1 fw-bold text-uppercase">Badwords Parser</h1>
                <h5 class="display-6">Free Online Bad Words Parsers</h5>
            </div>
            <form action="./requests/get_badwords.php" method="get" class="py-4">
                <input type="hidden" value="<?php echo $current_url ?>" name="current_url">

                <div class="form-floating mb-4">
                    <textarea name="text" id="text" class="form-control" placeholder="Inserisci il testo" required></textarea>
                    <label for="text">Inserisci qui il tuo testo</label>
                </div>

                <div class="form-floating mb-4">
                    <input type="text" name="badwords" id="badwords" class="form-control" placeholder="Inserisci le parole da filtrare" required>
                    <label for="badwords">Inserisci qui le tue badwords separate da spazi es: "parola1 parola2"</label>
                </div>

                <button class="btn btn-success">Invia il testo da ripulire</button>

            </form>
        </div>
    </div>


    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</body>


</html>