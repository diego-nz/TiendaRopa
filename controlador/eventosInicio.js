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

function siguientePagina(){
    $(document).on("click",".numeroPagina",function(){
        var pagina = $(this).attr("id");
        pagina=pagina+0;

        $.ajax({
           beforeSend: function(){

           },
            url: "modelo/cambiarPagina.php",
            type: "POST",
            data: {pagina:pagina},
            success: function(msg){

                    $('.productos').html("");
                    $('.productos').html(msg);

            },
            error: function(jqXHR){
                console.error(jqXHR);
            },
            complete: function(){

            }
        });
    });
}
