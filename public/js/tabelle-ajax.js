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
        //console.log(typeof response);
        //console.log(response['CD'][1]['TITLE']);
        //console.log(response['CD']);
        let res = document.querySelector('#res')
        res.innerHTML = '';

        for(var i =0; i<5; i++){
          res.innerHTML += `
            <tr>
              <td>` + response['CD'][i]['TITLE'] + `</td>
              <td>` + response['CD'][i]['ARTIST'] + `</td>
              <td class="text-center-edi">` + response['CD'][i]['PRICE'] + `</td>
            </tr>
          `
        }

      }); // fin done

   });
})(jQuery);
