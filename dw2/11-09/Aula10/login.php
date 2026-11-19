<?php
    $texto = "";
    if(isset($_COOKIE["return"])){
        $texto = "<br>* " . $_COOKIE["return"];
        setcookie("return", "", time() - 10);
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="confirmarBanco.php" method="post">
        <label>Nome: <input type="text" name="lname"></label><br>
        <label>Senha: <input type="password" name="lpass"></label><br>
        <input type="submit" value="Login"> <input type="submit" formaction="cadastro.php" value="Cadastrar">
        <span class="error"><?php echo $texto;?></span>
    </form>
</body>
</html>