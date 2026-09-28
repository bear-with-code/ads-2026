<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR01</title>
</head>
<body>
    <div>
        <?php
          for($i = 1; $i <= 30; $i++){
            if($i % 2 == 0){
                printf("%02d", $i);
            }
            else{
                echo "---";
            }

            if($i % 5 == 0){
                echo "<br>";
            }
            else{
                printf("  ");
            }
          }  
        ?>
    </div>
</body>
</html>