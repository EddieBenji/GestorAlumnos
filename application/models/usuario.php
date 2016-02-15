<?php
class Usuario
{
  /**
   * @var int
   */
  private $id;

  /**
   * @var String
   */
  private $nombre_usuario;

  /**
   * @var String
   */
  private $clave;

  /**
   * Usuario constructor.
   */
  public function __construct()
  {
  }


  /**
   * @return int
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @param int $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }

  /**
   * @return String
   */
  public function getNombreUsuario()
  {
    return $this->nombre_usuario;
  }

  /**
   * @param String $nombre_usuario
   */
  public function setNombreUsuario($nombre_usuario)
  {
    $this->nombre_usuario = $nombre_usuario;
  }

  /**
   * @return String
   */
  public function getClave()
  {
    return $this->clave;
  }

  /**
   * @param String $clave
   */
  public function setClave($clave)
  {
    $this->clave = $clave;
  }
  
  
}