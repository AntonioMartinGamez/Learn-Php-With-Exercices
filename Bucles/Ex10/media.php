<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link href="default.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="container">
      

      <div id="content">
        Este programa calcula la media de los números positivos introducidos.<br>
        Vaya introduciendo números (puede parar introduciendo un número negativo).<br>
        <?php
          $n = $_POST['n'];
          $total = $_POST['total'];
          $cuentaNumeros = $_POST['cuentaNumeros'];
          if (!isset($n) || ($n > 0)) {
            $total += $n;
            $cuentaNumeros++;
            ?>
            <form action="media.php" method="post">
              <input type="number" name="n" autofocus>
            <input type="hidden" name="total" value="<?php echo $total; ?>">
            <input type="hidden" name="cuentaNumeros" value="<?php echo $cuentaNumeros; ?>">
            <input type="submit" value="Aceptar">
            </form>   
          <?php
          } else {
          ?>
            <br><br>La media de los números introducidos es <?php echo $total / ($cuentaNumeros - 1); ?>
            <br><br>
            <a href="index.php">>> Volver</a>
          <?php
          }
        ?>
  </div>
    </body>
</html>