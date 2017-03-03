<?php
/**
 * Permitir la conexion contra la base de datos
 */
class dbNBA
{
  //Atributos necesarios para la conexion
  private $host="localhost";
  private $user="root";
  private $pass="";
  private $db_name="nba";
  //Conector
  private $conexion;
  //Propiedades para controlar errores
  private $error=false;
  function __construct()
  {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->conexion->connect_errno) {
        $this->error=true;
      }
  }
  //Funcion para saber si hay error en la conexion
  function hayError(){
    return $this->error;
  }
  //Funcion para devolver los equipos y su conferencia
  public function devolverEquiposTemp($equipo_local,$equipo_visitante,$temporada){
    if($this->error==false){
      $resultado = $this->conexion->query("SELECT equipo_local, equipo_visitante, temporada FROM partidos WHERE equipo_local='".$equipo_local." ' AND equipo_visitante='".$equipo_visitante."' AND temporada='".$temporada."' ");
      //echo "SELECT nombre,conferencia FROM equipos WHERE conferencia='".$conferencia."'";
      return $resultado;
    }else{
      return null;
    }
  }




  public function devolverLocalVisitante(){
    if($this->error==false){
      $resultado1 = $this->conexion->query("SELECT distinct(Nombre) FROM equipos");
      //echo "SELECT nombre,conferencia FROM equipos WHERE conferencia='".$conferencia."'";
      return $resultado1;
    }else{
      return null;
    }
  }

  public function devolverTemporada(){
    if($this->error==false){
      $resultado2 = $this->conexion->query("SELECT distinct(Temporada) FROM partidos");
      //echo "SELECT nombre,conferencia FROM equipos WHERE conferencia='".$conferencia."'";
      return $resultado2;
    }else{
      return null;
    }
  }

}
