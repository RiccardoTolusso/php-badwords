<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No Bad Words Allowed</title>
    sty
</head>

<body>
    <form action="./requests/get_badwords.php" method="get">
        <div>
            <label for="text">Inserisci qui il tuo testo</label>
            <textarea name="text" id="text"></textarea>
        </div>
        <div>
            <label for="badwords">Inserisci qui le tue badwords</label>
            <input type="text" name="badwords" id="badwords">
        </div>
        <div>
            <button>Invia il testo da ripulire</button>
        </div>
    </form>
</body>

</html>