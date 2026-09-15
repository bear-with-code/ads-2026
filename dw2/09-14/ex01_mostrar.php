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
        if(!file_exists("diario.md")){
            echo "Arquivo não existe!";
        }

        else{
            $file = fopen("diario.md", "r");
            echo "<textarea readonly id=\"caixaTexto\" name=\"caixaTexto\" rows=\"5\" cols=\"30\">";
            echo fread($file, filesize("diario.md"));
            echo "</textarea>";
            fclose($file);
        }
    ?>

    <br>
    <form action="ex01.html">
        <button type="submit">Voltar</button>
    </form>

    
</body>
</html>