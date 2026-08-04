<!DOCTYPE html>
<html>
    <body>
        <p>
            <?php
                $C = (float) $_GET["cap"];
                $I = (float) $_GET["tax"];
                $T = (float) $_GET["tem"];

                echo 'Juros Acumulados: ' . $C * ($I / 100) * $T;
            ?>
        </p>
    </body>
</html>