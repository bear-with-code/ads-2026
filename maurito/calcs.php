<html>
    <body>
        <?php
            $preco = trim($_GET["preco"]);
            $qtd = trim($_GET["qtd"]);

            $preco = (float) $preco;
            $qtd = (int) $qtd;

            echo '<p>';
            echo "Preço: $preco<br>";
            echo "Quantidade: $qtd<br>";
            echo "Total: " . $preco * $qtd;
            echo '</p>';
        ?>
    </body>
</html>