<?php
     include '../Data/ConexBusqueda.php';
     include '../Entities/Busqueda.php';

     $palabra= $_GET['txtBusqueda'];
     /*
     $conexion = new ConexBusqueda();
     $conexi on->_construct();
     $resultado = $conexion->consultarPalabra($palabra);*/

     $db = "imprenta";

     $conexion = mysqli_connect("localhost","root", "test");
     mysqli_set_charset($conexion,'utf8');
     if (!$conexion)
     {
         die('<br/>No pudo conectarse: ' . mysql_error());
     }
     else
     {
         mysqli_select_db ($conexion, $db);

         $consulta = mysqli_query ($conexion, "SELECT nombreWeb, direccion FROM busqueda where contenido like'%$palabra%'");

         $resultados = array();
         while ($row = mysqli_fetch_row($consulta)){
                $bus = new Busqueda();
                $bus->_construct($row[0], "Contenido", $row[1]);
                array_push($resultados, $bus);
         }

         session_start();
         $_SESSION['resultados'] = $resultados;
         mysqli_close($conexion);
         header("Location: ../resultado.php");
      }
?>
