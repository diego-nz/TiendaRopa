//Despliega animacion de cargando
function cargando(){
    $("#cargando").html('<div style="display:block; margin-left:auto; margin-right:auto;"><i class="fa fa-refresh fa-spin fa-5x"></i><span class="sr-only">Cargando...</span></div>');
}
$(document).on('click','#btnLogin',function(){
	//validar
	var usuario = document.getElementById("txtUsuario").value;
	var contrasena = document.getElementById("txtContrasena").value;
	$.ajax({
       beforeSend: function(){
        cargando();
       },
        url: "modelo/iniciarSesion.php",
        type: "POST",
        data:{txtUsuario:usuario, txtContrasena:contrasena},
        success: function(answer){
          if(answer == 0){
          	$('#respuesta').html("Credenciales Incorrectas <i class='fa fa-user-times fa-fw'></i>");
          	$('#respuesta').attr('class','error');
          }else if(answer == 1){
          	window.location.href="index.php?vista=inicio";
          	//$('#inicio').trigger('click');
          }
        },
        error: function(error,e,r){
          console.error(error.responseText);
        },
        complete: function(){
          $('#cargando').html("");
        }
    });
});