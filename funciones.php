<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Funciones</h2>
    <?php
    function saludar($nombre){
        echo "Hola, $nombre";
    }
    function sumar($a, $b){
        return $a + $b;
    }

    saludar("Valeri");
    echo "Suma: 2 + 3 = " . sumar(2, 3);
    ?>
</body>
</html>