<?php
    $parola = $_GET["parola"];
    $p = "Questo è una specie di paragrafo placeholder che contiene una parola scritta nell'URL, questa: <span style='color: red'>{$parola}</span>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>First php</title>
        <style>
            body {
                font-size: 1.5rem;
            }
        </style>
    </head>
    <body>
        <code style="color: purple">index.php?parola=BADWORD</code>
        <p><?php echo $p?></p>
        <p>Lunghezza del paragrafo sopra: <?php echo strlen($p)?></p>
        <p>
            <?php echo str_replace($parola, "***", $p) ?>
        </p>

    </body>
</html>
