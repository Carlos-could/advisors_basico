
( function ($) {
         $(document).ready(function () {


            var datos = {
                action: 'funciona'
                //data: "x"
            }


            $.ajax({
                url:    admin_url.ajax_url,
                type: 'GET',
                data: datos
            }).done( function (respuesta) {
              console.log(respuesta);
            


            }); // fin done

                console.log(admin_url);
         });
})(jQuery);
