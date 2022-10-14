( function ($) {
   $(document).ready(function () {

      var date = {
          action: 'read_xml_tabelle'
      }

      $.ajax({
          url: tabelle_ajax_object.ajax_url,
          type: 'GET',
          data: date,
          dateType: 'JSON'
      }).done( function (response) {

        let res = document.querySelector('#res')
        res.innerHTML = '';

        for(var i =0; i<5; i++){
          res.innerHTML += `
            <tr>
              <td>` + response['fond'][i]['name'] + `</td>
              <td class="text-center-edi">` + response['fond'][i]['porcent'] + `</td>
            </tr>
          `
        }

      });

   });
})(jQuery);
