
( function ($) {
     $(document).ready(function () {

        var date = {
            action: 'funciona'
        }

        $.ajax({
            url: admin_url.ajax_url,
            type: 'GET',
            data: date,
            //dateType: 'json'
        }).done( function (response) {
          //console.log( $(response).find('food').text() );
          console.log(typeof response);
          console.log(response);



        }); // fin done


     });
})(jQuery);

//simplexml_load_string
