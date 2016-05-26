<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/webStyle.css">
    <link rel="stylesheet" href="styles/bootstrap/fonts/">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="styles/bootstrap/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="img/favicon.JPG"/>
    <title>Solicitud</title>
</head>
<body>
<div class="banner-1">
    <div class="row">
        <div class="col-tipo-1 col-xs-12 col-sm-6 col-md-4">
            <img class="logotipo-1 img-responsive" src="img/logotipo.JPG">
        </div>
        <div class="col-tipo-1 col-xs-0 col-sm-0 col-md-3">

        </div>
        <div class="col-tipo-1 col-xs-12 col-sm-6 col-md-4 hidden-xs">
            <br/>
            <p><span class="glyphicon glyphicon-phone-alt"></span>  2666-0156 </p>
            <p><span class="glyphicon glyphicon-envelope"></span>  imprentaliberia@gmail.com </p>
        </div>
    </div>
</div>

<nav class="navbar navbar-defaul menu_styles" role="navigation">
    <div class="navbar-header sm_menu-1">
        <div type="button" class="navbar-toggle" data-toggle="collapse"
             data-target=".navbar-ex1-collapse">
            <span class="sr-only">Desplegar navegación</span>
            <div class="row">
                <div class="col-xs-10 col-sm-11"><p>Men&uacute;</p></div>
                <div class="col-xs-2 col-sm-1"><span class="glyphicon glyphicon-align-justify"></span></div>
            </div>

        </div>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <div class="container-1">
            <ul class="nav navbar-nav ul-style-1">
                <li><a href="index.html">Inicio</a></li>
                <li class="dropdown dropdown-style">
                    <a href="empresariales.html" class="dropdown-toggle" data-toggle="dropdown">
                        Empresariales<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="ProEmpresarial/factura.html">Facturas</a></li>
                        <li><a href="ProEmpresarial/recibo.html">Recibos</a></li>
                        <li><a href="ProEmpresarial/tarjeta.html">Tarjetas de presentaci&oacute;n</a></li>
                        <li><a href="ProEmpresarial/papelMembrete.html">Papel con membrete</a></li>
                        <li><a href="ProEmpresarial/notaLogotipo.html">Notas con logotipo</a></li>
                        <li><a href="ProEmpresarial/catalogo.html">Cat&aacute;logos</a></li>
                        <li><a href="ProEmpresarial/manual.html">Manuales de trabajo</a></li>
                    </ul>
                </li>

                <li class="dropdown dropdown-style">
                    <a href="publicitarios.html" class="dropdown-toggle" data-toggle="dropdown">
                        Publicitarios<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="ProPublicitario/afiche.html">Afiches</a></li>
                        <li><a href="ProPublicitario/brochure.html">Brochures</a></li>
                        <li><a href="ProPublicitario/calendario.html">Calendarios</a></li>
                        <li><a href="ProPublicitario/folder.html">Folders</a></li>
                        <li><a href="ProPublicitario/libreta.html">Libretas</a></li>
                        <li><a href="ProPublicitario/adhesivo.html">Adhesivos</a></li>
                    </ul>
                </li>

                <li class="dropdown dropdown-style">
                    <a href="otros.html" class="dropdown-toggle" data-toggle="dropdown">
                        Otros<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="ProOtro/tesis.html">Empastes de tesis</a></li>
                        <li><a href="ProOtro/sello.html">Sellos de hule</a></li>
                        <li><a href="ProOtro/menuRestaurante.html">Menús de restaurantes</a></li>
                        <li><a href="ProOtro/otro.html">Otros pedidos</a></li>
                    </ul>
                </li>
                <li><a href="contactenos.html">Cont&aacute;ctenos</a></li>
            </ul>
        </div>
        <form class="navbar-form navbar-right" role="search" method="get" action="Application/AdminBusqueda.php">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Buscar" id="txtBusqueda" name="txtBusqueda">
            </div>
            <button type="submit" class="btn btn-default">Enviar</button>
        </form>
    </div>
</nav>

<div class="container cont-max">
    <h2>Solicitud <small>Requisition</small></h2>

    <div class="row">
        <div class="col-md-5 cs-1">
            <form role="form" method="post" action="Application/AdmSolicitud.php">
                <div class="form-group">
                    <label>Producto</label>
                    <input type="text" class="form-control" id="txtProducto" name="txtProducto"
                           placeholder="Ingresa el producto">
                </div>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" id="txtNombre" name="txtNombre"
                           placeholder="Ingresa tu nombre">
                </div>
                <div class="form-group">
                    <label>Correo</label>
                    <input type="email" class="form-control" id="txtCorreo" name="txtCorreo"
                           placeholder="Ingresa tu correo">
                </div>
                <div class="form-group">
                    <label>Tel&eacute;fono</label>
                    <input type="tel" class="form-control" id="txtTelefono" name="txtTelefono"
                           placeholder="Ingresa tu tel&eacute;fono">

                    <input class="hidden" type="text" name="txtIP" id="txtIP" value="<?php
                    echo "{$_SERVER['REMOTE_ADDR']}";
                    ?>">
                </div>
                <div class="form-group">
                    <label>Especificaciones</label>
                    <textarea class="form-control" rows="4" placeholder="Ingresa los detalles del producto"
                              id="txtEncargo" name="txtEncargo"></textarea>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="check" name="check" value="activado"> Activa esta casilla
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
                <script type="text/javascript">
                    function getParameterByName(name) {
                        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
                        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                            results = regex.exec(location.search);
                        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
                    }
                    var prodId = getParameterByName('producto');
                    $("#txtProducto").val(prodId);
                </script>
            </form>
        </div>
    </div>
</div>
<br/>
<div class="panel-footer footer-color-1">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-5 panel panel-default columna-color-1">
                <h4>Mapa del sitio</h4>
                <div class="col-xS-2 col-sm-4 col-md-4">
                    <h5><a href="empresariales.html">Empresariales</a></h5>
                    <ul class="list-group">
                        <li><a href="empresariales.html#facturas">Facturas</a></li>
                        <li><a href="empresariales.html#recibos">Recibos</a></li>
                        <li><a href="empresariales.html#tarjetas">Tarjetas de presentaci&oacute;n</a></li>
                        <li><a href="empresariales.html#papel">Papel con membrete</a></li>
                        <li><a href="empresariales.html#notas">Notas con logotipo</a></li>
                        <li><a href="empresariales.html#catalogo">Cat&aacute;logo de productos</a></li>
                        <li><a href="empresariales.html#manuales">Manuales de trabajo</a></li>
                    </ul>
                </div>
                <div class="col-xS-2 col-sm-4 col-md-4">
                    <h5><a href="publicitarios.html">Publicitarios</a></h5>
                    <ul class="list-group">
                        <li><a href="publicitarios.html#afiches">Afiches</a></li>
                        <li><a href="publicitarios.html#brochures">Brochures</a></li>
                        <li><a href="publicitarios.html#calendarios">Calendarios</a></li>
                        <li><a href="publicitarios.html#folders">Folders</a></li>
                        <li><a href="publicitarios.html#libretas">Libretas</a></li>
                        <li><a href="publicitarios.html#adhesivos">Adhesivos</a></li>
                    </ul>
                </div>
                <div class="col-xS-2 col-sm-4 col-md-4">
                    <h5><a href="otros.html">Otros</a></h5>
                    <ul class="list-group">
                        <li><a href="otros.html#tesis">Empastes de tesis</a></li>
                        <li><a href="otros.html#sellos">Sellos de hule</a></li>
                        <li><a href="otros.html#menus-restaurantes">Menús de restaurantes</a></li>
                        <li><a href="otros.html#otros">Otros pedidos</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xS-2 col-sm-6 col-md-3 columna-color-2">
                <h4>Cont&aacute;ctenos</h4>
                <ul class="list-group">
                    <li>Tel: 2666-0156</li>
                    <li>Correo: imprentaliberia@gmail.com</li>
                    <li><a href="contactenos.html#conulstas">Consultas</a></li>
                    <li>Guanacaste, Costa Rica</li>
                </ul>
            </div>
            <div class="col-xS-2 col-sm-6 col-md-3 columna-color-2">
                <h4>Redes sociales</h4>
                <a href="https://www.facebook.com/imprentaliberia" target="_blank"><img class="img-responsive img-responsive-2" src="img/face2.png"/></a>
                <br/>
            </div>
        </div>
    </div>
</div>
</body>
</html>
