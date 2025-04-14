<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio_4</title>
</head>
<body>
    <table border ="1">
    <?php
        print("<tr>");
        for($x=1;$x<=50;$x++){//recorre todos los nros para poder analizarlos
            print("<th>$x</th>");
            if ($x % 3 == 0 && $x % 5 == 0) {
                print("<td>FizzBuzz</td>");
            } elseif ($x % 3 == 0) {
                print("<td>Fizz</td>");
            } elseif ($x % 5 == 0) {
                print("<td>Buzz</td>");
            } else {
                print("<td></td>"); 
            }
            print("<tr>");
        }
    ?>
    </table>
</body>
</html>
