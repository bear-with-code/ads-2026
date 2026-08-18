<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX06</title>
</head>
<body>
    <?php
        $gen = $_GET['tipo'];
        $siz = $_GET['size'];

        $pr = ($gen == 'M') ? 30 : 25;
        $pr += ($siz == 'P') ? -5 : (($siz == 'M') ? 1 : 10);

        $n = (float) $_GET['num']; $pr *= $n;

        $res = sprintf("Preço original: R$ %.2f<br>", $pr);
        echo str_replace(".", ",", $res);

        $pr *= 1 - (($n * 3) / 100);

        $res = sprintf("Preço com desconto: R$ %.2f<br>", $pr);
        echo str_replace(".", ",", $res);
    ?>
</body>
</html>