<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=height, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>variables</h1>
    <?php
    $texto = "tienda";
    $numero = 123;
    echo $texto;
    //concatenar
    echo "<h3>" . $texto . " " . $numero . "</h3>";
    var_dump($texto);
    $descripcion ="<p>Encuntra los mejores productos en  $texto $numero  </p>";
    echo $descripcion.= "todos los dias";
    ?>

    <h2>obtener variables url</h2>
    <?php
    echo"nombre: " . $_GET["nombre"] . "<br>";
    echo"edad: " . $_GET["edad"] . "<br>";
    ?>
</body>
</html>