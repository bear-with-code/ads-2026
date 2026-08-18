<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR08</title>
</head>
<body>
    <?php
        $n = (int) $_GET["glad"];

        if($n < 4){
            echo "Sinto muito pela experiência.";
        }
        elseif($n > 7){
            echo "Muito obrigado pela avaliação!";
        }
        else{
            echo "Vamos tentar melhorar.";
        }
    ?>
</body>
</html>