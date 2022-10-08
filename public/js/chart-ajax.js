( function ($) {
  $(document).ready(function () {

    var date = {
        action: 'read_xml_chart'
    }

    $.ajax({
        url: chart_ajax_object.ajax_url,
        type: 'GET',
        data: date,
        dateType: 'JSON'
    }).done( function (response) {

  // ----------------chart
      let label = [];
      let price = [];
      for(var i =0; i<12; i++){
        label.push (response['CD'][i]['COUNTRY'] );
        price.push (response['CD'][i]['PRICE'] )
      }

      const data = {
        labels: label,
        datasets: [{
          label: 'Aktienfonds',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: price,
        }]
      };

      const config = {
        type: 'line',
        data: data,
        options: {}
      };

      const myChart = new Chart(
        document.getElementById('meinChart'),
        config
      );

    }); // fin done

  });
})(jQuery);
