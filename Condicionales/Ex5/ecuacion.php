<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
 <!--
Ejercicio 2
Realiza un programa que pida una hora por teclado y que muestre luego buenos días,
buenas tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12,
de 13 a 20 y de 21 a 5 respectivamente. Sólo se tienen en cuenta las horas,
los minutos no se deben introducir por teclado.
-->

    <?php
   
        $a = $_GET['a'];

        $b = $_GET['b'];
        
        if ($a != 0){
        echo (($b*-1)/$a);
        
        }else{
            echo "a tiene que ser distinto a 0";
        }
    ?>
 
</body>
</html>
