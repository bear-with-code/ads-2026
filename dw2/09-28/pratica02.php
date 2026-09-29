<?php
    session_start();
    $_SESSION["y"] = $_POST["num"];

    $url = "arq_resposta02.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1;url=<?php echo $url ?>">
    <script type="text/javascript">
        window.location.href = "<?php echo $url ?>"
    </script>
    <title>PR02</title>
</head>
<body>
</body>
</html>