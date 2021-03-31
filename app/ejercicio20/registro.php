<?php
include "usuario.php";
/*
Lamas Juan Pablo
Aplicación No 20 (Registro CSV)
Archivo: registro.php
método:POST
Recibe los datos del usuario(nombre, clave,mail )por POST ,
crear un objeto y utilizar sus métodos para poder hacer el alta,
guardando los datos en usuarios.csv.
retorna si se pudo agregar o no.
Cada usuario se agrega en un renglón diferente al anterior.
Hacer los métodos necesarios en la clase usuario
*/
$nombrePost = $_POST["nombre"];
$clavePost = $_POST["clave"];
$mailPost = $_POST["mail"];
$u1 = new Usuario($nombrePost, $clavePost, $mailPost);

echo $u1->CargarUsuario();

?>