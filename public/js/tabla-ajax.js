
( function ($) {
         $(document).ready(function () {


            var datos = {
                action: 'funciona',
                data: "x"
            }


            $.ajax({
                url:    admin_url.ajax_url,
                type: 'GET',
                data: datos
            }).done( function (respuesta) {
                console.log('hi carlosss')

            //     console.log( $(data).find('CD').find('TITLE').text() );

                // $(data).find('CD').each( function(){

                //     console.log( $(this).find('TITLE').html() );

                //     var titulo = $(this).find('TITLE').text();
                //     var artista = $(this).find('ARTIST').text();
                //     var anio = $(this).find('YEAR').text();


                //     $('#cds tbody').append (
                //         '<tr> <td>'+ titulo + '</td>' +
                //             '<td>' + artista + '</td>'+
                //             '<td>' + anio + '</td> </tr>'
                //     );
                // });
            });


         });

})(jQuery);
