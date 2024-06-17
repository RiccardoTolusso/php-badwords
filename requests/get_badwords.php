<?php

$text = $_GET['text'];
$badwords = $_GET['badwords'];

$output_text = $text;

if (str_contains($badwords, " ")) {
    $badwords = explode(" ", $badwords);
} else {
    $badwords = [$badwords];
}



for ($i = 0; $i < count($badwords); $i++) {
    $output_text = str_replace($badwords[$i], "***", $output_text);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>
    <div class="vh-100 bg-secondary">
        <div class="container text-center">
            <!-- before result -->
            <div id="before-result">
                <h2 class="display-1 fw-semibold py-5">Utilizzando antichi incantesimi sulla tua frase...</h2>
                <div class="spinner-border my-5" style="width: 10vw; height: 10vw;" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
            <div id="display-result" class="d-none">
                <h2 class="display-1 fw-semibold py-5">La tua frase è pronta</h2>
                <p class="fs-2"><?php echo $output_text ?></p>

            </div>
        </div>
    </div>

    <script src="./js/main.js"></script>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</body>

</html>