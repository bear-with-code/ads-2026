<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX01</title>
    <style>
        #nome{
            font-size: 1vw;
        }
    </style>
</head>
<body>
    <p id="nome">
        <?php
            $transporte = strtolower(trim($_GET['move']));

            if($transporte == "bicicleta"){echo 'Bike! 🚲';}
            if($transporte == "carro"){echo 'Carro! 🚗';}
            if($transporte == "onibus" || $transporte == "ônibus"){echo 'Busão! 🚌';}
            if($transporte == "moto"){echo 'Moto! 🏍';}
            if($transporte == "nenhum" || $transporte == "a pé"|| $transporte == "de pé"){echo 'A pé! 🚶‍♂️';}
            if($transporte == "motoca" || $transporte == "lambreta"){echo 'Motoca! 🛵';}
        ?>
    </p>
</body>
</html>