<?php
    session_start();
    if(isset($_SESSION["login"])){
        
    }

    $_SESSION["y"] = $_POST["num"];

    $url = "arq_resposta02.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
    <form action="login_7.php" method="post">
        <label>Nome: <input type="text" name="nome_7"></label><br>
        <label>Email: <input type="email" name="email_7"></label><br>
        <label>Senha: <input type="password" name="senha_7"></label><br>
        <input type="submit" value="Login">
        <input formaction="cadastro_7.php" type="submit" value="Cadastro">
    </form>
</body>
</html>