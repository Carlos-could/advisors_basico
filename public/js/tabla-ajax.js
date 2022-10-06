
( function ($) {
     $(document).ready(function () {

        var date = {
            action: 'funciona'
        }

        $.ajax({
            url:    admin_url.ajax_url,
            type: 'GET',
            data: date
        }).done( function (response) {
          console.log(typeof response);
          console.log(response);



        }); // fin done


     });
})(jQuery);
