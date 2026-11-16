<?php
    $url = ".php";
    if(isset($_POST['mail']) && isset($_POST['name']) && isset($_POST['pass'])){
        $dbh = new PDO('mysql:host=localhost;dbname=barrefertas', 'root', '');
        
        $comando = "INSERT INTO `usuarios` (`id`, `email`, `nome`, `senha`)
        VALUES (NULL, '{$_POST['mail']}', '{$_POST['name']}', '{$_POST['pass']}')";

        $linhas = $dbh->exec($comando);
        if($linhas > 0){
            echo "Sucesso!";
            $url = '3;url=login' . $url;
        }
        else{
            echo "Falha.";
            $url = '3;url=cadastro' . $url;
        }

        $dbh = null;
    }
    else{
        echo "Dados faltando!";
        $url = '3;url=cadastro' . $url;
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    
</body>
</html>