<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ciclos</h1>
    <?php 
    $contador=1;
    while($contador<=10){
        echo " <p> $contador </p>";
        $contador++;
    }

    ?>

    <h2>ciclo for</h2>
    <?php
        for($i=0;$i<11;$i++){
            echo "$i ";
        }
    ?>
</body>
</html>