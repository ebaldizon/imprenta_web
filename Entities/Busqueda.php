<?php
    class Busqueda
    {
        private $palabra;
        private $nombreWeb;
        private $contenido;
        private $direccion;

        function _construct()
        {
          $this->palabra = "";
          $this->nombreWeb = "";
          $this->contenido = "";
          $this->direccion = "";
        }

        function _construct($palabra, $nombreWeb, $contenido, $direccion)
        {
          $this->palabra = $palabra;
          $this->nombreWeb = $nombreWeb;
          $this->contenido = $contenido;
          $this->direccion = $direccion;
        }

        function getPalabra()
        {
          return $this->palabra;
        }

        function setPalabra($palabra)
        {
          $this->palabra = $palabra;
        }

        function getNombreWeb()
        {
          return $this->nombreWeb;
        }

        function setNombreWeb($nombreWeb)
        {
          $this->nombreWeb = $nombreWeb;
        }

        function getContenido()
        {
          return $this->contenido;
        }

        function setContenido($contenido)
        {
          $this->contenido = contenido;
        }

        function getDireccion()
        {
          return $this->direccion;
        }

        function setDireccion($direccion)
        {
          $this->direccion = direccion;
        }
    }
?>
