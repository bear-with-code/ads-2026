<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX05</title>
    <?php
        $bgColor = $_GET['bg']; $fontColor = $_GET['fc'];
        $text = $_GET['text'];
    ?>
    <style>
        p{
            <?php 
                echo 'background-color:' . $bgColor;
                echo ';color:' . $fontColor . ';';
            ?>
        }
    </style>


</head>
<body>
    <p> <?php echo $text; ?> </p>
</body>
</html>