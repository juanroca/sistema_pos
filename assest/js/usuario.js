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
    var pass1=document.getElementById("pass1").value //extraemos el dato de password
    var pass2=document.getElementById("pass2").value //extraemos el dato de password2
    //console.log(pass1,pass2);
    
    if(pass1==pass2){
        var obj=new FormData($('#FRegNuevoUsuario')[0]);
        $.ajax({
                type:"POST",
                url:"controlador/usuario_controlador.php?ctrRegUsuario",
                data:obj,
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
        document.getElementById("error-pass").innerHTML="Las contraseñas no coiniden"
        //alert("Las contraseñas no coinciden!!!");
    }
}
