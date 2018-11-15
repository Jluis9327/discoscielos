function validaNumericos(event) {
    if (event.charCode >= 46 && event.charCode <= 57) {
        return true;
    }
    return false;
}

function alerta()
{
    var mensaje;
    var opcion = confirm("Clicka en Aceptar o Cancelar");
    if (opcion == true) {
        mensaje = "Has clickado OK";
    } else {
        mensaje = "Has clickado Cancelar";
    }
    document.getElementById("ejemplo").innerHTML = mensaje;
}
function capturar() {

}


