<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX01</title>
    <style>
        #caixaTexto{
            width: 350px;  
            height: 100px;
            resize: none;
        }
    </style>
</head>
<body>
    <?php
        $file = fopen("notas.txt", "a");
        $res = sprintf("Nome: %s - %.2f, %.2f, %.2f", 
            $_GET["nome"], floatval($_GET["n1"]), floatval($_GET["n2"]), floatval($_GET["n3"])
        );
        fwrite($file, $res . "\n");
        rewind($file);

        $file = fopen("notas.txt", "r");
        echo "<textarea readonly id=\"caixaTexto\" name=\"caixaTexto\" rows=\"5\" cols=\"30\">";
        echo fread($file, filesize("notas.txt"));
        echo "</textarea>";
        fclose($file);
    ?>

    <br>
    <form action="ex02.html">
        <button type="submit">Voltar</button>
    </form>

    
</body>
</html>