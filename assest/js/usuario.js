/* ***** MODAL NUEVO USUARIO */
function MNuevoUsuario(){
    $('#modal-lg').modal('show');
    var obj="";
    $.ajax(
        {
            type:"POST",
            url:"vista/usuario/FNuevoUsuario.php",
            data:obj,
            success:function(data){
                $("#modal-content-lg").html(data);
            }
        }
    )
}

/* ***** FUNCION REGISTRO NUEVO USUARIO */
function RegNuevoUsuario(){
    var pass1=document.getElementById("pass1").value; //extraemos el dato de password
    var pass2=document.getElementById("pass2").value; //extraemos el dato de password2
    //console.log(pass1,pass2);
    
    if(pass1==pass2){
        var formData=new FormData($('#FRegNuevoUsuario')[0]);
        $.ajax({
                type:"POST",
                url:"controlador/usuario_controlador.php?ctrRegUsuario",
                data:formData,
                cache:false,
                contentType:false,
                processData:false,
                success:function(data){

                    if(data=="correcto"){
                        Swal.fire({
                            icon:'success',
                            showConfirmButton:true,
                            title:'El usuario ha sido registrado correctamente',
                            timer:1500
                        });
                        setTimeout(function(){
                            location.reload();
                        },1200);
                    }
                }
            })
    
    } else{
        document.getElementById("error-pass").innerHTML="Las contraseñas no coiniden";
        //alert("Las contraseñas no coinciden!!!");
    }
}

/* ***** MODAL VER USUARIO */
function MVerUsuario(id){
    $('#modal-lg').modal('show');
    var obj="";
    $.ajax(
        {
            type:"POST",
            url:"vista/usuario/FDetalleUsuario.php?idUsuario="+id,
            data:obj,
            success:function(data){
                $("#modal-content-lg").html(data);
            }
        }
    )
}

/* ***** MODAL ELIMINAR USUARIO */
function MEliUsuario(id){
    $('#modal-df').modal('show');
    var obj="";
    $.ajax(
        {
            type:"POST",
            url:"vista/usuario/FEliUsuario.php?idUsuario="+id,
            data:obj,
            success:function(data){
                $("#modal-content-df").html(data);
            }
        }
    )
}

/* ***** FUNCION ELIMINAR USUARIO */
function EliUsuario(id){
    var obj={
        "idUsuario":id
    }
    //console.log(obj);
    $.ajax({
        type:"POST",
        data:obj,
        url:"controlador/usuario_controlador.php?ctrEliUsuario",        
        cache:false,
        success:function(data){
            console.log(data);
            if(data=="eliminado"){
                Swal.fire({
                icon:'success',
                showConfirmButton:true,
                title:'El usuario ha sido eliminado correctamente',
                timer:1500,
            });
            setTimeout(function(){
                location.reload();
            },1000);
            }
            
        }
    })
}
