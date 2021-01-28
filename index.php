<?php 
    $p = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur quasi, necessitatibus animi consequatur aut vitae, nemo fugiat rerum, magnam error quaerat beatae ad dolorum iure! Aliquid praesentium modi provident officiis!";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>First php</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body {
                font-size: 1.5rem;
            }
            strong {
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
        <h4>Paragrafo</h4>
        <p style="margin-bottom: 30px;"><?php echo var_dump($p)?></p>

        <h4 style="color: crimson;">Bad Word</h4>
        <code style="color: purple">index.php?bad=THEBADWORD</code>
        <p>Scrivere <?php echo str_replace($_GET["bad"], "***", $_GET["bad"]) ?> non va bene.</p>


    </body>
</html>
