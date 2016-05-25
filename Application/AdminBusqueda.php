
   <?php session_start();
     include '../Data/ConexBusqueda.php';

     $palabra= $_GET['txtBusqueda'];
     echo "La palabra es:".$palabra;

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
         echo "<br/>conectado";

         mysqli_select_db ($conexion, $db);

         $resultado = mysqli_query ($conexion, "SELECT nombreWeb, direccion FROM busqueda where contenido like'%$palabra%'");


         //$_SESSION['resultado'] = $resultado;
         $_SESSION['test'] = "hola";
         mysqli_close($conexion);
         header("Location: ../resultado.php");


         /***
         $link = mysql_connect("localhost", "nobody");
         mysql_select_db("imprenta", $link);
         $result = mysql_query("SELECT nombreweb, direccion FROM busqueda", $link);
         echo "<table border = '1'> \n";
         echo "<tr><td>Nombre Web</td><td>Dirección</td></tr> \n";
         while ($row = mysql_fetch_row($result)){
                echo "<tr><td>$row[0]</td><td>$row[1]</td></tr> \n";
         }
         echo "</table> \n";
         ***/

         /*
         echo "<table border = '1'> \n";
         echo "<tr><td>Nombre Web</td><td>Dirección</td></tr> \n";
         while ($row = mysqli_fetch_row($resultado)){
                echo "<tr><td>$row[0]</td><td>$row[1]</td></tr> \n";
         }
         echo "</table> \n";
         */

     }


     /*
     $enlace =  mysqli_connect('localhost', 'root', 'test');
     if (!$enlace)
     {
         die('No pudo conectarse: ' . mysql_error());
     }
     echo 'Conectado satisfactoriamente';
     mysqli_close($enlace);
     */

     //echo ""Resultado de la busqueda:".$resultado;
    ?>
