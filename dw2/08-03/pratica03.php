<!DOCTYPE html>
<html>
    <body>
        <p>
            <?php
                $num = (int) $_GET["idade"];
                echo 'Você';

                if($num < 18){
                    echo ' não';
                }

                echo ' é maior de idade.';
            ?>
        </p>
    </body>
</html>