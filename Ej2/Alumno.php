<?php
class Alumno
{

    public static $id = 0;
    private $nombre;
    private $apellido1;
    private $nivel;

    function __construct($nombre, $apellido1, $nivel)
    {
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->nivel = $nivel;
        Alumno::$id++;
    }

    function __destruct()
    {
        Alumno::$id--;
    }

    public function __get($atributo)
    {
        if (property_exists(__CLASS__, $atributo)) {
            return $this->$atributo;
        }
        return NULL;
    }

    public function __set($atributo, $valor)
    {
        if (property_exists(__CLASS__, $atributo)) {
            $this->$atributo = $valor;
        }
    }

    public function mostrarAlumno(){
		echo $this->nombre . " " . $this->apellido1 . " " . $this->nivel ;
	}
}
?>