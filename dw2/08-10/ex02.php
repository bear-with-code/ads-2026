<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX02</title>
</head>
<body>
    <?php
        $login = trim($_GET['mail']);
        $senha = trim($_GET['pass']);

        if($login == "fulano@email.com" && $senha == "1234Thanos"){
            echo 'Logado com sucesso!';
        }
        else{
            echo 'Dados incorretos.';
        }

    ?>
</body>
</html>