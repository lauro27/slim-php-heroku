<?php
/*
Lamas Juan Pablo
Aplicación No 22 ( Login)
Archivo: Login.php
método:POST
Recibe los datos del usuario(clave,mail )por POST ,
crear un objeto y utilizar sus métodos para poder verificar si es un usuario registrado,
Retorna un :
“Verificado” si el usuario existe y coincide la clave también.
“Error en los datos” si esta mal la clave.
“Usuario no registrado si no coincide el mail“
Hacer los métodos necesarios en la clase usuario
*/
include "usuario.php";
$usuarioPost = null;
$clavePost = null;
if(isset($_POST["mail"]))
{
    $usuarioPost = $_POST["mail"];
}
if(isset($_POST["clave"]))
{
    $clavePost = $_POST["clave"];
}

$usuariosArray = Usuario::CsvToArrayUsuario("usuarios.csv");
$retorno = "Usuario no registrado";
foreach ($usuariosArray as $value)
{
    if($value->mail == $usuarioPost)
    {
        if($value->clave == $clavePost)
        {
            $retorno = "Verificado";
        }
        else
        {
            $retorno = "Error en los datos";
        }
    }
}
echo $retorno;
?>