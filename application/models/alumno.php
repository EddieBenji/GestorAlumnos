<?php
class Alumno
{
    /**
     * @var int
     */
    private $matricula;
    /**
     * @var String
     */
    private $apellidoP;
    /**
     * @var String
     */
    private $apellidoM;
    /**
     * @var date
     */
    private $fechaN;
    /**
     * @var date
     */
    private $fechaI;
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
    private $carrera;

    /**
     * Alumno constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param int $matricula
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
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
     * @return date
     */
    public function getFechaN()
    {
        return $this->fechaN;
    }

    /**
     * @param date $fechaN
     */
    public function setFechaN($fechaN)
    {
        $this->fechaN = $fechaN;
    }

    /**
     * @return date
     */
    public function getFechaI()
    {
        return $this->fechaI;
    }

    /**
     * @param date $fechaI
     */
    public function setFechaI($fechaI)
    {
        $this->fechaI = $fechaI;
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
    public function getCarrera()
    {
        return $this->carrera;
    }

    /**
     * @param String $carrera
     */
    public function setCarrera($carrera)
    {
        $this->carrera = $carrera;
    }



}