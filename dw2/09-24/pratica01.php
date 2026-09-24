<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX01</title>
</head>
<body>
    <div style="line-height: 170%;">
        <?php
            if(empty($_POST["loginNome"]) || empty($_POST["loginEmail"]) || empty($_POST["loginPass"])){
                echo "Dados incompletos! <br>";
            }
            else{
                $arquivo = fopen("usuarios.txt", "a");
                fwrite($arquivo, $_POST["loginNome"] . " | ");
                fwrite($arquivo, $_POST["loginEmail"] . " | ");
                fwrite($arquivo, $_POST["loginPass"] . "\n");
                fclose($arquivo);

                echo "Usuário cadastrado! <br>";
                
                echo "<form action=\"pratica02.html\">";
                echo "<input type=\"submit\" value=\"Fazer Login\">";
                echo "</form>";
            }
        ?>

        <form action="pratica01.html">
            <input type="submit" value="Voltar">
        </form>
    </div>
</body>
</html>