<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="salvarBanco.php" method="post">
        <label>Email: <input type="email" name="mail"></label><br>
        <label>Nome: <input type="text" name="name" value="<?php if(isset($_POST['lname'])){echo trim($_POST['lname']);} ?>"></label><br>
        <label>Senha: <input type="password" name="pass" value="<?php if(isset($_POST['lpass'])){echo trim($_POST['lpass']);} ?>"></label><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>