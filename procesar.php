<?php
$nombre_valido="admin";
$password_valida="1234";

//verificar si se eviaron datos
if($_SERVER["REQUEST_METHOD"]=="POST"){
 $nombre=$_POST["nombre"];
 $password=$_POST["password"];
 if($nombre===$nombre_valido &&$password===$password_valida){
    echo"Bienvenido";
 }else{
    echo"Acceso denegado";
 }
}else{
    echo"acceso no permitido";
}
?>