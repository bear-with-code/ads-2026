<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR02</title>
</head>
<body>
    <?php
        $p = trim($_GET['pass']);

        if(strlen($p) >= 8){
            echo 'Senha aceita.';
        }
        else{
            echo 'Senha inválida.';
        }
    ?>
</body>
</html>