<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR04</title>
</head>
<body>
    <?php
        $tudo = 27.99;
        if(isset($_GET['box'])){
            $adds = $_GET['box'];
            foreach ($adds as $op) {
                if($op == "batata"){$tudo += 3.99;}
                if($op == "legume"){$tudo += 1.99;}
                if($op == "vinagr"){$tudo += 2.99;}
                if($op == "farofa"){$tudo += 3.25;} 
            }
        }

        echo 'Valor Total: R$ ' . $tudo;
    ?>
</body>
</html>