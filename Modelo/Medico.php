<?php
class Medico
{
    private $medIdentificacion;
    private $medNombres;
    private $medApellidos;

    public function __construct($ide, $nom, $ape)
    {
        $this->medIdentificacion = $ide;
        $this->medNombres = $nom;
        $this->medApellidos = $ape;
    }
    public function obtenerIdentificacion()
    {
        return $this->medIdentificacion;
    }
    public function obtenerNombres()
    {
        return $this->medNombres;
    }
    public function obtenerApellidos()
    {
        return $this->medApellidos;
    }
}
