<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Iniciar session</h2>

    <form action="procesar.php" method="post">
      <label for="nombre">Nombre</label>
      <input type="text"name="nombre" require>
      <label for="password">Contraseña</label>
      <input type="password"name="password" require>
      <input type="submit" value="Iniciar sesion">

    </form>
</body>
</html>