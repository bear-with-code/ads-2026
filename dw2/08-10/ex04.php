<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX04</title>
</head>
<body>
    <?php
        if(!isset($_GET['box']) || empty($_GET['mail'])){echo 'Assinatura recusada!';}
        else{
            $em = $_GET['mail']; $box = $_GET['box'];
            
            echo 'Email: ' . $em . '<br>';
            foreach($box as $val){
                if($val == 'news'){
                    echo 'Aceitou receber notícias. <br>';
                }
                if($val == 'prom'){
                    echo 'Aceitou receber promoções. <br>';
                }
            }
        }
    ?>
</body>
</html>