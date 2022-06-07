/* ***** MODAL NUEVO PACIENTE */
function MNuevoPaciente() {
    $('#modal-lg').modal('show');
    var obj = "";
    $.ajax(
        {
            type: "POST",
            url: "vista/usuario/FNuevoUsuario.php",
            data: obj,
            success: function (data) {
                $("#modal-content-lg").html(data);
            }
        }
    )
}

/* ***** FUNCION REGISTRO NUEVO PACIENTE */
function RegNuevoPaciente() {
    var formData = new FormData($('#FRegNuevoPaciente')[0]);
    $.ajax({
        type: "POST",
        url: "controlador/paciente_controlador.php?ctrRegPaciente",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            Swal.fire({
                icon: 'success',
                showConfirmButton: true,
                title: 'El paciente ha sido registrado correctamente',
                timer: 2500,
            });
            setTimeout(
                function () {
                    location.href = "paciente";
                }, 500);
        }
    })

}

/* ***** MODAL VER USUARIO */
function MVerUsuario(id) {
    $('#modal-lg').modal('show');
    var obj = "";
    $.ajax(
        {
            type: "POST",
            url: "vista/usuario/FDetalleUsuario.php?idUsuario=" + id,
            data: obj,
            success: function (data) {
                $("#modal-content-lg").html(data);
            }
        }
    )
}

/* ***** MODAL ELIMINAR USUARIO */
function MEliUsuario(id) {
    $('#modal-df').modal('show');
    var obj = "";
    $.ajax(
        {
            type: "POST",
            url: "vista/usuario/FEliUsuario.php?idUsuario=" + id,
            data: obj,
            success: function (data) {
                $("#modal-content-df").html(data);
            }
        }
    )
}

/* ***** FUNCION ELIMINAR USUARIO */
function EliUsuario(id) {
    var obj = {
        "idUsuario": id
    }
    //console.log(obj);
    $.ajax({
        type: "POST",
        data: obj,
        url: "controlador/usuario_controlador.php?ctrEliUsuario",
        cache: false,
        success: function (data) {
            console.log(data);
            if (data == "eliminado") {
                Swal.fire({
                    icon: 'success',
                    showConfirmButton: true,
                    title: 'El usuario ha sido eliminado correctamente',
                    timer: 1500,
                });
                setTimeout(function () {
                    location.reload();
                }, 1000);
            }

        }
    })
}

/* ***** MODAL EDITAR USUARIO */
function MEditUsuario(id) {
    $('#modal-lg').modal('show');
    var obj = "";
    $.ajax(
        {
            type: "POST",
            url: "vista/usuario/FEditUsuario.php?idUsuario=" + id,
            data: obj,
            success: function (data) {
                $("#modal-content-lg").html(data);
            }
        }
    )
}
/* ***** FUNCION EDITAR USUARIO */
function EditUsuario(id) {

    var formData = new FormData($('#FEditUsuario')[0]);
    $.ajax({
        type: "POST",
        url: "controlador/usuario_controlador.php?ctrEditUsuario",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            //console.log(data);
            if (data == "correcto") {
                Swal.fire({
                    icon: 'success',
                    showConfirmButton: true,
                    title: 'Datos actualizados correctamente',
                    timer: 1500
                });
                setTimeout(function () {
                    location.reload();
                }, 1200);
            }
        }
    })


}