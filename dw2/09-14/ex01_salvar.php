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
        if(!empty($_GET["caixaTexto"])){
            $file = fopen("diario.md", "a");
            fwrite($file, $_GET["caixaTexto"] . "\n");
            echo 'Página adicionada com sucesso!';
            fclose($file);
        }
        else{
            echo 'Texto vazio!';
        }
    ?>
    <br>
    <form action="ex01.html">
        <button type="submit">Voltar</button>
    </form>
</body>
</html>