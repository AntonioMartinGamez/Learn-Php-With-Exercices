<!DOCTYPE html>
<!--
Ejercicio 16
Escribe un programa que diga si un número introducido por teclado es o no primo. Un número
primo es aquel que sólo es divisible entre él mismo y la unidad.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $numero = 23;
        $esPrimo = true;
        for ($i = 2; $i < $numero;$i++){
            $resto = $numero % $i;
            
            if($resto == 0 ){
                $esPrimo = false;
            }
        }
        
        
        if ($esPrimo == true){
            echo'el numero es primo';
        }  else {
            echo'el numero no es primo';
        }
        ?>
    </body>
</html>
