<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR01</title>
</head>
<body>
    <?php
        $L1 = (float) $_GET['L1'];
        $L2 = (float) $_GET['L2'];
        $L3 = (float) $_GET['L3'];

        $L1 *= $L1; $L2 *= $L2; $L3 *= $L3;
        if($L3 > $L2){$L = $L2; $L2 = $L3; $L3 = $L;}
        if($L2 > $L1){$L = $L1; $L1 = $L2; $L2 = $L;}

        if($L1 == ($L2 + $L3)){
            echo 'É um triângulo retângulo!';
        }
        else{
            echo 'Nâo é um triângulo retângulo!';
        }
    ?>
</body>
</html>