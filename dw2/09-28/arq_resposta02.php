<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR02</title>
</head>
<body>
    <div style="line-height: 170%;">
        <?php
            echo "Y = " . $_SESSION["y"];
        ?>
        
        <br>
        <form action="pratica02.html" method="post">
            <input type="submit" value="Voltar">
            <input type="submit" value="Triplicar" formaction="triplo.php">
        </form>
    </div>
</body>
</html>