<!DOCTYPE html>
<!--
Ejercicio 12
Escribe un programa que muestre los n primeros términos de la serie de Fibonacci. El primer término
de la serie de Fibonacci es 0, el segundo es 1 y el resto se calcula sumando los dos anteriores, por lo
que tendríamos que los términos son 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144… El número n se debe
introducir por teclado
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $numero1 = 1;
        $numero2 = 0;
      
        $contador = $_POST['numeroIntroducido'] - 2;
        if (contador == -1){
            echo '0';
        }else{            
            echo '0 1 ';
            do{
            $suma = $numero1 + $numero2;
            $numero2 = $numero1;
            $numero1 = $suma;

            echo $suma," ";
            $contador--;
            }while ($contador > 0);
        }
        
        // put your code here
        ?>
    </body>
</html>
