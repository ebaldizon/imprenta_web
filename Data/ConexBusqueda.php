<?php
  class ConexBusqueda
  {
    private $user;
    private $pass;
    private $server;
    private $db;
    private $conexion;

    function _construct()
    {
      $this->user = "root";
      $this->pass = "";
      $this->server = "localhost";
      $this->db = "busqueda";
      $this->conexion = NULL;
    }


    function serverConnection()
    {
      $this->conexion = mysql_connect($this->server, $this->user, $this->pass) or die("
      Error al conectar a la base de datos".mysql_error());
    }

    function dbConnection($db)
    {
      if(empty($this->conexion))
      {
        echo "Falta establecer conexion con el servidor";
        return false;
      }
      else
      {
        setDB($db);
        mysql_select_db($this->db, $this->conexion);
        return true;
      }
    }

    function consultarPalabra($palabra)
    {
      serverConnection();
      if(dbConnection(getDB()))
      {
        $sql= 'SELECT nombreWeb, direccion FROM busqueda WHERE contenido like'%$palabra%'';
        $resultado = mysql_query($sql, $conexion);
        mysql_close($this->conexion);
        echo "Consulta exitosa";
        return $resultado;
      }
        return false;
    }

    function getUsuer()
    {
      return $this->user;
    }

    function setUser($user)
    {
      $this->user = $user;
    }

    function setPass($pass)
    {
      $this->pass = $pass;
    }

    function getServer()
    {
      return $this->server;
    }

    function setServer($server)
    {
      $this->server = $server;
    }

    function getDB()
    {
      return $this->db;
    }

    function setDB($db)
    {
      $this->db =$db;
    }

    function getConexion()
    {
      return $this->conexion;
    }

    function setConexion($conexion)
    {
      $this->conexion = $conexion;
    }
  }
?>
