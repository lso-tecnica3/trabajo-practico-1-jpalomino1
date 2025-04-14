<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio_5</title>
</head>
<body>
<table width="700px" cellspacing="0px" cellpadding="0px" border="1px">
<?php
for($row=1; $row<=20; $row++) //recorre las filas 
{
    print("<tr>");
    
    for($col=1; $col<=20; $col++)//recorre columnas
    {
        
        if( $col>$row)
        {
            print("<td height=30px width=30px bgcolor=0000FF></td>");
        }
        else if($row>$col)
        {
            print("<td height=30px width=30px bgcolor=Ff0000></td>");
        }
        else{
            print("<td height=30px width=30px bgcolor=00FF00></td>");
        }
    }
    
    print("</tr>");
}
?>
</table>
</body>
</html>
