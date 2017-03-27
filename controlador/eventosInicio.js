$(document).ready(function(){
    $('.bxslider').bxSlider({
        auto: true,
        mode: 'fade',
        speed: 500,
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

function cargarProductos(){
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
}

$(document).ready(function(){
       $('#txtBuscar').keyup(function(){
        var busqueda = $('#txtBuscar').val();

        if(busqueda!=""){
            $('#txtBuscar').keyup(function(){
              $.ajax({
                  beforeSend: function(){
                      cargando();
                  },
                  url: "modelo/buscador.php",
                  type: "POST",
                  data: {producto:busqueda},
                  success: function(answer){
                      if(answer==0){
                          $('#resultadosBuscador').html("");
                          $('#sinResultados').html("<h1 class='centrado'>Sin resultados</h1>");
                      }else{
                          $('.imagenProducto').html("");
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
        }else{
            $('#sinResultados').html("");
            $('#resultadosBuscador').html("");
            $('#masVendidos').trigger("click");
        }
       });
});
