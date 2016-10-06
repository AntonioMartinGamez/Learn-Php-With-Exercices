

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
 <?php
    $numero =  $_GET['numero'] ;

    $contador = 0;
    
    echo floor(50/10);
    
    do {
        $numero = floor($numero /10);

        $contador++;
    }while ($numero > 0 );
    echo "Tu numero tiene " . $contador . " digitos";
    ?>
</body>
</html>