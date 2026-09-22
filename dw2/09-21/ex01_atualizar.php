<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX01</title>
</head>
<body>
    <?php
        if(empty($_POST["receitaModo"]) || empty($_POST["receitaIngredientes"])){
            echo "Texto vazio! <br>";
        }
        elseif($_FILES["receitaFoto"]["size"] == 0){
            echo "Arquivo vazio! <br>";
        }
        else{
            $destino = "imagens/" . basename($_FILES["receitaFoto"]["name"]);

            $file = fopen("receitas.md", "w");
            fwrite($file, "Nome: " . $_POST["receitaNome"] . "\n\n");
            fwrite($file, "[Ingredientes]\n" . $_POST["receitaIngredientes"] . "\n\n");
            fwrite($file, "[Modo de Preparo]\n" . $_POST["receitaModo"]);

            move_uploaded_file($_FILES["receitaFoto"]["tmp_name"], $destino);
            echo "Receita visualizada! <br>";

            printf("
                <form action=\"ex01_mostrar.php\" method=\"post\">
                    <input type=\"hidden\"
                    <input type=\"hidden\" id=\"receitaFoto\" name=\"receitaFoto\" value=\"%s\">
                    <button type=\"submit\">Mostrar receita</button>
                </form>
            <br>", $destino);
        } 
    ?>

    <form action="ex01.html">
        <button type="submit">Voltar</button>
    </form>
    
</body>
</html>