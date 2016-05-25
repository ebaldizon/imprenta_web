<?php
    class SolicitudProducto
    {
        private $producto;
        private $nombre;
        private $correo;
        private $telefono;
        private $encargo;

        function _construct($producto, $nombre, $correo, $telefono, $encargo)
        {
            $this->producto = $producto;
            $this->nombre = $nombre;
            $this->correo = $correo;
            $this->telefono = $telefono;
            $this->encargo = $encargo;
        }

        function getProducto()
        {
            return $this->producto;
        }

        function setProducto($producto)
        {
            $this->producto = $producto;
        }

        function getNombre()
        {
            return $this->nombre;
        }

        function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        function getCorreo()
        {
            return $this->correo;
        }

        function setCorreo($correo)
        {
            $this->correo = $correo;
        }

        function getTelefono()
        {
            return $this->telefono;
        }

        function setTelefono($telefono)
        {
            $this->telefono = $telefono;
        }

        function getEncargo()
        {
            return $this->encargo;
        }

        function setEncargo($encargo)
        {
            $this->encargo = $encargo;
        }
    }
?>