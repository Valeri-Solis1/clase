<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>condicionales</h1>
    <?php
    if(!isset($nombre)){
        echo "No se ha pasado la variable por url";
    }else{
        echo "El nombre es: " . $nombre;
    }
    ?>

    <h2>foreach</h2>
    <?php
    $animales =array("perro", "gato", "conejo", "hamster");
    foreach($animales as $animal){
        echo "$animal<br>";
    }
    echo "<h2>foreach con array asociativo</h2>";
    //array asociativo
    $persona = array(
        "nombre" => "valeri",
        "edad" => 20,
        "ciudad" => "Madrid"
    );
    //recorrer con un foreach
    foreach($persona as $clave => $valor){
        echo "$clave: $valor <br>";
    }
    ?>
    
</body>
</html>