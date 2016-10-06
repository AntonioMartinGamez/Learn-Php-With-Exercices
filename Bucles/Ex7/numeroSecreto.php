<!DOCTYPE html>
<!--
Ejercicio 7
Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El
programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje
“Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto
satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    
      
        
        <?php
        
  
        
        $clave_introducida = $_POST['clave_introducida'];
        $random = rand(1000, 9999);
        $contador = $_POST['contador'];
        
        echo $contador;
            
            
            
            if ($random == $clave_introducida ){
                echo "Enorabuena! has acertado";
                
            }else{
                echo "Has fallado :(";
                $contador ++;
                echo $contador;
                
            }
            if ($contador == 4){
                echo "Has agotado el numero de intentos!";
            }   
            
        ?>
        
        <form action="numeroSecreto.php" method="post">
            <input type="hidden" name="contador" value="<?= $contador ?>">
            <input type="text" name="clave_introducida">
            <input type="submit" value="Continuar">
        </form>
    </body>
</html>
