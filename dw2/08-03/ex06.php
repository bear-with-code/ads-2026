<!DOCTYPE html>
<html>
    <body>
        <p>
            <?php
                $sp = (float) $_GET["vel"];
                $mx = (float) $_GET["lim"];
                
                if($sp > $mx){
                    echo "Gerar multa.";
                }

                if($sp <= $mx){
                    echo "Direção segura.";
                }
            ?>
        </p>
    </body>
</html>