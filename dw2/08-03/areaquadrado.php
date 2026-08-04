<!DOCTYPE html>
<html>
    <body>
        <p>
            <?php
                $num = $_GET["valor"];
                $num = (float) str_replace(",", ".", $num);

                echo 'Um quadrado com ' . $num . ' de lado tem ';
                
                $num **= 2;
                echo $num . ' de área.';
            ?>
        </p>
    </body>
</html>