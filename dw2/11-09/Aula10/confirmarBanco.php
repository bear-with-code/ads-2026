<?php
    $emptyField = empty($_POST['lname']) || empty($_POST['lpass']);
    $matchLogin = FALSE;

    if($emptyField){setcookie("return", "Preencher todos os campos");}
    elseif(isset($_POST['lname']) && isset($_POST['lpass'])){
        $dbh = new PDO('mysql:host=localhost;dbname=barrefertas', 'root', '');

        $sql = "SELECT `id`, `nome` FROM `usuarios` WHERE `nome` = {$_POST['lname']} AND `senha` = {$_POST['lpass']}";
        $res = $dbh->query($sql); $matchLogin = ($res->rowCount() > 0);
        if(!$matchLogin){setcookie("return", "Login incorreto");}
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        if($emptyField || !$matchLogin){
            echo "<meta http-equiv=\"refresh\" content=\"0;login.php\">";
        }
    ?>

    <title>Document</title>
</head>
<body>
    
</body>
</html>