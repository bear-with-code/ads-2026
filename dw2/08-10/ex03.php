<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX03</title>
</head>
<body>
    <?php
        $gen = $_GET['tipo'];
        $siz = $_GET['size'];

        $price = ($gen == 'M') ? 30 : 25;
        $price += ($siz == 'P') ? -5 : (($siz == 'M') ? 1 : 10);
        echo 'R$ ' . (float) $price;
    ?>
</body>
</html>