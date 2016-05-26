<?php
    class Busqueda
    {
        private $nombreWeb;
        private $contenido;
        private $direccion;

        function _construct($nombreWeb, $contenido, $direccion)
        {
          $this->nombreWeb = $nombreWeb;
          $this->contenido = $contenido;
          $this->direccion = $direccion;
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
