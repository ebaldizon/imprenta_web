
function pasarProducto()
{
    var producto = document.getElementById("txtProducto").value;

    location.href='../solicitud.php?producto='+producto;
}
