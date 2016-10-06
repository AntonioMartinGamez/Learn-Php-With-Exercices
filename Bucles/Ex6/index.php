<!DOCTYPE html>
<!--
Ejercicio 6
Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle do-while.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $numero = 320;
        
        do{
            echo "$numero </br>";
            $numero = $numero - 20;
        }
        while ($numero >= 160);
        ?>
    </body>
</html>
