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
        if ($this->ValidarUsuario()) {
            $carga .= $this->nombre . ",";
            $carga .= $this->clave . ",";
            $carga .= $this->mail . "\n";
            $miarchivo = fopen("usuarios.csv", "a");
            if (fwrite($miarchivo, $carga)) {
                $retorno = true;
            }
            fclose($miarchivo);
        }
        return $retorno;
    }

    public static function CsvToArrayUsuario($filename)
    {
        $retorno = [];
        $miarchivo = fopen($filename, 'r');
        while(!feof($miarchivo))
        {
            $datos = fgetcsv($miarchivo);
            $retorno[count($retorno)] = new Usuario($datos[0], $datos[1], $datos[2]);
        }
        return $retorno;
    }

    public function __toString()
    {
        return $this->nombre . " - " . $this->clave . " - " . $this->mail;
    }
}
?>