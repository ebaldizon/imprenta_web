<?php
    class Consulta
    {
        private $nombre;
        private $correo;
        private  $telefono;
        private $mensaje;

        function _construct($nombre, $correo, $telefono, $mensaje)
        {
            $this->nombre = $nombre;
            $this->correo = $correo;
            $this->telefono = $telefono;
            $this->mensaje = $mensaje;
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

        function getMensaje()
        {
            return $this->mensaje;
        }

        function setMensaje($mensaje)
        {
            $this->mensaje = $mensaje;
        }
    }
?>

