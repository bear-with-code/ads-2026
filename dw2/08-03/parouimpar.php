<!DOCTYPE html>
<html>
    <body>
        <p>
            <?php
                $num = (int) $_GET["numero"];

                echo $num . ' é um número ';
                if($num % 2 != 0){
                    echo 'ím';
                }
                echo 'par.';
            ?>
        </p>
    </body>
</html>