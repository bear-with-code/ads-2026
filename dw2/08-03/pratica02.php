<!DOCTYPE html>
<html>
    <body>
        <p>
            <?php
                $num = (int) $_GET["ano"];
                $num = 2026 - $num;

                echo 'Ano que vem, terás ' . ++$num . ' anos.';
            ?>
        </p>
    </body>
</html>