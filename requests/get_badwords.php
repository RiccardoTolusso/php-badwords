<?php

$text = $_GET['text'];
$badwords = $_GET['badwords'];

$output_text = str_replace($badwords, "***", $text);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php echo $output_text ?>
</body>

</html>