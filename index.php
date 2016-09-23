<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here

        $x = 24;
        $pi = 3.1416;
        $animal = "conejo";
        $saludo = "Hello buddy!, there is a snake in my boot";
        $numero = 20;
        $palabra = "40";
        $mezcla = $numero + $palabra;
        $mezclaConcatena = $numero . $palabra;
        echo $x, "<br>", $pi, "<br>",$animal, "<br>", $saludo, "<br>";
        echo $numero , $palabra , "<br>";
        echo $numero + $palabra , "<br>";
        echo $mezcla , "<br>";
        echo $mezclaConcatena , "<br>";
        print_r(get_defined_vars());
                
        ?>
    </body>
</html>
