$(document).ready(function() {
    $('#ejemplo').DataTable();
});

function alert() {
    swal({
        text: "Venta emergente",
        title: "Ventana",
        icon: "success",
        closeOnEsc: false,
        closeOnClickOutside: true,
        timer: 2500,
        buttons: {
            cancel: {
                text: "Cancelar",
                value: false,
                visible: true,
                className: "",
                closeModal: true,
            },
            confirm: {
                text: "OK",
                value: true,
                visible: true,
                className: "boton",
                closeModal: true
            }
        }
    })
}