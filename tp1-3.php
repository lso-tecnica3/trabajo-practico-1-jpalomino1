<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for($x=1;$x<=10;$x++){//repite y va cambiando el tamanio del pixel
            $fontSize = $x * 10; 
            print("<p style='font-size: {$fontSize}px'>Hola Mundo</p>");
        }
    ?>
</body>
</html>
