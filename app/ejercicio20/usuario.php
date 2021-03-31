<?php
class Usuario
{
    public $nombre;
    public $clave;
    public $mail;

    function __construct($nombre = NULL, $clave = NULL, $mail = NULL)
    {
        $this->nombre = $nombre;
        $this->clave = $clave;
        $this->mail = $mail;
    }


    public function ValidarUsuario()
    {
        $estado = NULL;
        if (isset($this->nombre) && isset($this->clave) && isset($this->mail)) {
            $estado = true;
        } else {
            $estado = false;
        }
        return $estado;
    }

    public function CargarUsuario()
    {
        $carga = null;
        $retorno = false;
        if (ValidarUsuario($this)) {
            $carga .= $this->nombre . "\;";
            $carga .= $this->clave . "\;";
            $carga .= $this->clave . "\n";
            $miarchivo = fopen("usuarios.csv", "a");
            if (fwrite($miarchivo, "$carga\n")) {
                $retorno = true;
            }
            fclose($miarchivo);
        }
        return $retorno;
    }
}
