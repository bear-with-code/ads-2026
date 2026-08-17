<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR07</title>
</head>
<body>
    <?php
        $pr = $_GET['preco']; 
        $pr = (float) str_replace(",", ".", $pr);

        $n = (float) $_GET['qtd']; $pr *= $n;

        $res = sprintf("Preço original: R$ %.2f<br>", $pr);
        echo str_replace(".", ",", $res);

        $pr *= 1 - ($n / 10);

        $res = sprintf("Preço com desconto: R$ %.2f<br>", $pr);
        echo str_replace(".", ",", $res);
    ?>
</body>
</html>