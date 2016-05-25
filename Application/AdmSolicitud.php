<?php
    include '../Entities/SolicitudProducto.php';
    $check = $_POST['check'];

    if(validarCheck($check) == true)
    {
        echo "</br>entrando check";

        $solicitud1 = new SolicitudProducto();
        $solicitud1->_construct($_POST['txtProducto'], $_POST['txtNombre'], $_POST['txtCorreo'], $_POST['txtTelefono'], $_POST['txtEncargo']);

        $datos = array($solicitud1->getProducto(), $solicitud1->getNombre(), $solicitud1->getCorreo(), $solicitud1->getTelefono(), $solicitud1->getEncargo());

        /*$mensaje1 = "Producto:".$solicitud1->getProducto()."</br>".
            "Nombre:".$solicitud1->getNombre()."</br>".
                           "Correo:".$solicitud1->getCorreo()."</br>".
                           "Teléfono:".$solicitud1->getTelefono()."</br>".
                           "Mensaje:".$solicitud1->getEncargo()."</br>";
        echo $mensaje1;*/

        if(validarVacios($datos) == true)
        {
            $email1 = "emanuel.baldizon@gmail.com";
            $email2 = "emanuel1606@gmail.com";
            $email3 = "amnetdeluxe@gmail.com";
            $asunto = "Solicitud:Producto - www.imprentaliberia.com";

            $mensaje = "Buenos días señores Imprenta Liberia, les enviamos una solicitud de producto de un cliente desde el sitio web www.imprentaliberia.com\n\n".
                "Los datos del cliente serían los siguientes:\n".
                "Nombre: ".$solicitud1->getNombre()."\n".
                "Correo: ".$solicitud1->getCorreo()."\n".
                "Teléfono: ".$solicitud1->getTelefono()."\n\n".
                "Producto: ".$solicitud1->getProducto()."\n".
                "La consulta por parte del cliente es:\n".
                $solicitud1->getEncargo();

            $from = "From:".$solicitud1->getNombre()."<".$solicitud1->getCorreo().">";


            if(mail($email1, $asunto, $mensaje, $from))
            {
                mail($email2, $asunto, $mensaje);
                mail($email3, $asunto, $mensaje);
                echo  "Consulta enviada exitosamente</br>";
                echo "<a href='../solicitud.php'>Presione aqu&iacute; para regresar</a>";
            }
            else
            {
                echo "Esto es lamentable, no se puedo enviar la consulta";
                echo "<a href='../solicitud.php'></br>Presione aqu&iacute; para regresar</a>";
                //header("Location: ../contactenos.php");
            }
        }
        else
        {
            echo "Rellene los campos solicitados";
            echo "<a href='../solicitud.php'></br>Presione aqu&iacute; para regresar</a>";
        }
    }
    else
    {
        echo "Marque la casilla por favor";
        echo "<a href='../solicitud.php'></br>Presione aqu&iacute; para regresar</a>";
    }

    function validarCheck($checkbox)
    {
        if($checkbox == 'activado')
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function validarVacios($datos)
    {
        for($i=0;$i<5;$i++)
        {
            if(empty($datos[$i]))
            {
                return false;
            }
        }
        return true;
    }
?>
