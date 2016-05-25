<?php
    include '../Entities/Consulta.php';

    $check = $_POST['check'];

    if(validarCheck($check) == true)
    {
        $consulta1 = new Consulta();
        $consulta1->_construct($_POST['txtNombre'], $_POST['txtCorreo'], $_POST['txtTelefono'], $_POST['txtMensaje']);
        $datos = array($consulta1->getNombre(), $consulta1->getCorreo(), $consulta1->getTelefono(),$consulta1->getMensaje());

        if(validarVacios($datos) == true)
        {
            $email1 = "emanuel.baldizon@gmail.com";
            $email2 = "emanuel1606@gmail.com";
            $email3 = "amnetdeluxe@gmail.com";
            $asunto = "Consulta - www.imprentaliberia.com";

            $mensaje = "Buenos días señores Imprenta Liberia, les enviamos una consulta de un cliente desde el sitio web www.imprentaliberia.com\n\n".
            "Los datos del cliente serían los siguientes:\n".
            "Nombre: ".$consulta1->getNombre()."\n".
            "Correo: ".$consulta1->getCorreo()."\n".
            "Teléfono: ".$consulta1->getTelefono()."\n\n".
            "La consulta por parte del cliente es:\n".
            $consulta1->getMensaje();

            /*$mensaj1 = " ".$consulta1->getNombre()."</br>".
                       "Correo:".$consulta1->getCorreo()."</br>".
                       "Teléfono:".$consulta1->getTelefono()."</br>".
                       "Mensaje:".$consulta1->getMensaje()."</br>";*/

            $from = "From:".$consulta1->getNombre()."<".$consulta1->getCorreo().">";

            if(mail($email1, $asunto, $mensaje, $from))
            {
                mail($email2, $asunto, $mensaje);
                mail($email3, $asunto, $mensaje);
                echo  "Consulta enviada exitosamente</br>";
                echo "<a href='../contactenos.html'></br>Presione aqu&iacute; para regresar</a>";
            }
            else
            {
                echo "Esto es lamentable, no se puedo enviar la consulta";
                echo "<a href='../contactenos.html'></br>Presione aqu&iacute; para regresar</a>";
                //header("Location: ../contactenos.php");
            }
        }
        else
        {
            echo "Rellene los campos solicitados";
            echo "<a href='../contactenos.html'></br>Presione aqu&iacute; para regresar</a>";
        }
    }
    else
    {
        echo "Marque la casiila por favor";
        echo "<a href='../contactenos.html'></br>Presione aqu&iacute; para regresar</a>";
    }


    /*if(validarCheck($check))
    {   echo "1";
        $consulta1 = new Consulta();
        $consulta1->_construct($_POST['txtNombre'], $_POST['txtCorreo'], $_POST['txtTelefono'], $_POST['txtMensaje']);
        $datos = array($consulta1->getNombre(), $consulta1->getCorreo(), $consulta1->getTelefono(),$consulta1->getMensaje());

        if(validarVacios($datos))
        {

        }
        else
        {
            echo "Campo vacio";
        }
    }
    else
    {
        echo "Marca la casilla de check";
        echo "<br/>";
    }*/

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
        for($i=0;$i<4;$i++)
        {
            if(empty($datos[$i]))
            {
                return false;
            }
        }
        return true;
    }
?>
