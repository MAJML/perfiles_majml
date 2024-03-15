console.log('esto en el indexxxx');

$(document).on("click", "#empezar", function(){
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Home/ingresandoSistema',
        data: {user:$("#user").val()},
        success:function(response){
            console.log('esta es la vlaidacion : ',response)
            if(response == 'Entrando al sistema'){
                /* mostrarMensaje('confirmacion','Bienvenido','Por espere un momento') */
                window.location.href = 'inicio';
            }else{
                mostrarMensaje('error','Usted no tiene Acceso','Por favor comuniquese con el proveedor')
            }
        },error:function(){
        console.log("ERROR GENERAL DEL SISTEMA, POR FAVOR INTENTE MÁS TARDE");
        }
    });
})
