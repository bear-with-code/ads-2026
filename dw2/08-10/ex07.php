<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX07</title>
</head>
<body>
    <?php
        $dia = $_GET['peri'];
        printf("Bo%s! ", ($dia == 'M') ? "m dia" : 
            (($dia == 'T') ? "a tarde" : "a noite")
        );

        $temp = $_GET['temp'];
        printf("Está %s!", ($temp < 0) ? "gelado" : (
                ($temp < 16) ? "frio" : (
                    ($temp < 26) ? "agradável" : "quente"
                )
            )
        );
    ?>
</body>
</html>