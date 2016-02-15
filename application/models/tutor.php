<?php
class Tutor
{
    /**
     * @var int
     */
    private $clave_prof;
    /**
     * @var String
     */
    private $apellidoP;
    /**
     * @var String
     */
    private $apellidoM;
    /**
     * @var String
     */
    private $genero;
    /**
     * @var String
     */
    private $correo;
    /**
     * @var String
     */
    private $area;

    /**
     * Tutor constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getClaveprof()
    {
        return $this->clave_prof;
    }

    /**
     * @param int $clave_prof
     */
    public function setClaveprof($clave_prof)
    {
        $this->clave_prof = $clave_prof;
    }

    /**
     * @return String
     */
    public function getApellidoP()
    {
        return $this->apellidoP;
    }

    /**
     * @param String $apellidoP
     */
    public function setApellidoP($apellidoP)
    {
        $this->apellidoP = $apellidoP;
    }

    /**
     * @return String
     */
    public function getApellidoM()
    {
        return $this->apellidoM;
    }

    /**
     * @param String $apellidoM
     */
    public function setApellidoM($apellidoM)
    {
        $this->apellidoM = $apellidoM;
    }

    /**
     * @return String
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * @param String $genero
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    /**
     * @return String
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * @param String $correo
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    /**
     * @return String
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param String $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }



}