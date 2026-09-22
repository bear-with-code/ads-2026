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

            <div style="text-align: right;">Nome:</div>
            <div><input type="text" name="receitaNome"></div>

            <div style="text-align: right;">Ingredientes:</div>
            <div><textarea class="caixaTexto" name="receitaIngredientes" rows="5" cols="30"></textarea></div>

            <div style="text-align: right;">Modo de Preparo:</div>
            <div><textarea class="caixaTexto" name="receitaModo" rows="5" cols="30"></textarea></div>

            <div style="text-align: right;">Foto:</div>
            <div><input type="file" id="receitaFoto" name="receitaFoto"></div>
        </div>

        <br>
        
    
    
</body>
</html>