<!DOCTYPE html>
<html>
    <body>
        <p>
            <?php
                $idade = (int) $_GET["idade"];
                $membro = $_GET["membro"];
                $convite = $_GET["convite"];

                if(($idade >= 18) && ($membro == "S") && ($convite == "S")){
                    echo "Entrada permitida.";
                }
                else{
                    echo "Entrada negada.";
                }
            ?>
        </p>
    </body>
</html>