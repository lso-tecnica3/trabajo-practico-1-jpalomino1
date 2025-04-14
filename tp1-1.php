<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio_1</title>
    <style>
        th, td {
          border: 1px solid;
          width: 40px;
          height: 40px;
          text-align: center;
        }
        th {
          background-color: #80BFFF;
        }




    </style>
</head>
<body>
    <table border ="1">
    <tr>
        <th>X</th>
    <?php
        
      for($x=1; $x<11; $x++){ // muestra el encabezado
        print("<th>$x</th>");
      }
    ?> 
    <?php
        
        for($x=1; $x<11;                                                                                                                     $x++){ //muestra el encabezado pero el q esta pegado a la izquierda, funciona como variable para multiplicar y recorre
            print("<tr>");
            print("<th>$x</th>");
            for($y=1; $y<11; $y++){//recorre y ayuda a mostrar resultado
                $mul=$x*$y;
                print("<td>$mul</td>");
        }
        print("</tr>");

      }
    ?>
    </table>
</body>
</html>
