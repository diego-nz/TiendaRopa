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
    $("#cargando").html('<div style="display:block; margin-left:auto; margin-right:auto;"><i class="fa fa-refresh fa-spin fa-5x"></i><span class="sr-only">Cargando...</span></div>');
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
              $('#resultadosBuscador').show();
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
                                $('#resultadosBuscador').hide();
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
        cargando();
       },
        url: "modelo/categoria.php",
        type: "POST",
        data:{categoria:idCategoria},
        success: function(answer){
          $(".productos").html("");
          $(".productos").html(answer);
        },
        error: function(error){
          console.error(error);
        },
        complete: function(){
          $('#cargando').html("");
        }
    });
});

//clic flahas obtener total de paginas y en la primera solo se puede usar la derecha
function flechasPaginacion(tipoFlecha){
    
    $.ajax({
        beforeSend: function(){
             cargando();
        },
        url: "modelo/paginadorFlecha.php",
        type:"GET",
        data:{p:pagina},
        success: function(answer){
          
        },
        error: function(){

        },
        complete: function(){
          $('#cargando').html("");
        }
    });
}
