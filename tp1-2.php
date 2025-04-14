<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio_2</title>
</head>
<body>
<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
<?php
for($row=1; $row<=8; $row++)//recorre fila y analiza
{
    print("<tr>");
    
    for($col=1; $col<=8; $col++)//recorre columna y analiza
    {
        $total = $row + $col;
        
        if($total % 2 == 0)
        {
            print("<td height=30px width=30px bgcolor=#000000></td>");
        }
        else
        {
            print("<td height=30px width=30px bgcolor=#FFFFFF></td>");
        }
    }
    
    print("</tr>");
}
?>
</table>
</body>
</html>
