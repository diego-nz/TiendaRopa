$(document).ready(function(){
    $('.bxslider').bxSlider({
        auto: true,
        mode: 'fade',
        speed: 3000,
        adaptiveHeight: true,
        adaptiveHeightSpeed: 200,
        responsive: true,
        touchEnabled: true
    });
});

//Despliega animacion de cargando
function cargando(){
    $("#cargando").html('<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><span class="sr-only">Cargando...</span>');
}

//Cuando se mande llamar la funcion en el parametro clase cambiar por nombre del id o clase del div
function animacionScroll(clase){
    var target = jQuery(clase);
        if (target.length) {
            $('html,body').animate({
                    scrollTop: target.offset().top
                }, 500, function(){
                   $(clase).focus();
             });
         }
}

$(document).ready(function(){
    $(document).on("click",".numeroPagina",function(){
        var pagina = $(this).attr("id");
        if(pagina>1){
            pagina=pagina+0;
        }else{
            pagina=0;
        }

        $.ajax({
           beforeSend: function(){
               cargando();
           },
            url: "modelo/cambiarPagina.php",
            type: "POST",
            data: {pagina:pagina},
            success: function(msg){

                    $(".productos").html("");
                    $(".productos").html(msg);

            },
            error: function(jqXHR){
                console.error(jqXHR);
            },
            complete: function(){
                $("#cargando").html("");
            }
        });
    });
});

/*function cargarProductos(){
    $('#resultadosBuscador').html("");
    $.ajax({
       beforeSend: function(){
           cargando();
       },
        url: "modelo/cargarProductos.php",
        success: function(answer){
            animacionScroll();
            $('#resultadosBuscador').html("");
            $('#sinResultados').html("");
            $(".productos").html(answer);
        },
        error: function(jqXHR){
            console.error(jqXHR);
        },
        complete: function(){
            $('#cargando').html("");
        }
    });
}*/

$(document).ready(function(){
       $('#txtBuscar').keyup(function(e){
        var busqueda = $('#txtBuscar').val();

            $('#txtBuscar').keyup(function(){
                    $.ajax({
                          beforeSend: function(){
                              cargando();
                          },
                          url: "modelo/buscador.php",
                          type: "POST",
                          data: {producto:busqueda},
                          success: function(answer){
                            if(answer == 0 ){
                                $('#resultadosBuscador').html("");
                            }if(answer == 1){
                                $('#resultadosBuscador').html("<h1>No hay coincidencias</h1>");
                            }if(answer != 1 && answer!=0){
                                $('#resultadosBuscador').html(answer);
                            }
                          },
                          error: function(jqXHR){
                              console.error(jqXHR);
                          },
                          complete: function(){
                              $('#cargando').html("");
                          }
                      });
            });
       });
});

$(document).on("click",".cate",function(){
    var idCategoria=$(this).attr("id");
    $.ajax({
       beforeSend: function(){

       },
        url: "",
        type: "",
        data:{},
        success: function(){

        },
        error: function(){

        },
        complete: function(){

        }
    });
});

//clic flahas obtener total de paginas y en la primera no se puede usar la derecha
function flechasPaginacion(tipoFlecha){
    $.ajax({
       beforeSend: function(){
           cargando();
       },
        url: "",
        type:"",
        data:{},
        success: function(){

        },
        error: function(){

        },
        complete: function(){

        }
    });
}
