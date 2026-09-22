<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX01</title>
    <style>
        .container{
            display: grid;
            grid-template-columns: auto auto;
            background-color: #1e90ff;
            padding: 10px;
            width: 25%;
            font-family: "Courier New", Courier, monospace;
        }

        .container div {
            background-color: #e7ebee;
            text-align: center;
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .caixaTexto{
            height: 100px;
            resize: none;
            font-family: "Courier New", Courier, monospace;
        }

        .header{
            grid-column: 1 / span 2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header"><b>Leitor de Receitas</b></div>
        <div style="grid-column: 1 / span 2;">
            <?php
                $file = fopen("receitas.md", "r+");
                echo "<textarea readonly class=\"caixaTexto\" rows=\"5\" cols=\"30\">";
                echo fread($file, filesize("receitas.md"));
                echo "</textarea>";
                fclose($file);
            ?>
        </div>

        <div style="text-align: right;">Foto:</div>
        <div>
            <?php
                echo "<img src=\"" . $_POST["receitaFoto"] . "\" width=\"300\" height=\"150\">";
            ?>
        </div>
    </div>

    <br>
    <form action="ex01.html">
        <button type="submit">Voltar</button>
    </form>
</body>
</html>