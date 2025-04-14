<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <?php
    print("<tr>");
        for($x=1;$x<=10;$x++){//recorre fila y ayuda a mostrar resiltado
            for($y=1;$y<=5;$y++){//recorre columna y ayuda a mostrar resultado
                $num= $x*$y;
                print("<td>•$num</td>");
            }
            print("<tr>");
        }
    ?>

    <?php
    print("<tr>");
        $num= 100;
        for($x=1;$x<=10;$x++){ //este for recorre las diez fila
            for($y=1;$y<=5;$y++){ // este las columnas y tmb va a ser nuestro contador que esta al lado del numero
                print("<td>$y . $num</td>");
                $num=$num-1;
            }
            print("<tr>");
        }
    ?>
    </table>
</body>
</html>
