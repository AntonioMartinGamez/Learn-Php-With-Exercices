
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
   
    $hora = $_GET['hora'];
 
    if (($hora >= 6) && ($hora <= 12)){
       echo "buenos dias"; 
    }
    
    if (($hora >= 13) && ($hora <= 20)){
       echo "buenas tardes"; 
    }
    
    if (($hora >= 21) && ($hora <= 24)){
       echo "buenas noches"; 
    }
    
    if (($hora >= 0) && ($hora <= 5)){
       echo "buenas noches"; 
    }
                
    ?>
 
</body>
</html>
