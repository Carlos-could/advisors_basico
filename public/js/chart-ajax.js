( function ($) {
  $(document).ready(function () {

    var url = "http://localhost/carlosPlugin/wp-content/plugins/advisors_basico/includes/data/zeus-strategie.json";

    Highcharts.getJSON(url, function (data) {

  	Highcharts.stockChart('container', {
  			rangeSelector: {
  					selected: 1
  			},

  			title: {
  					text: 'Zeus Strategie'
  			},

  			series: [{
  					name: 'Zeus',
  					data: data,
  					tooltip: {
  							valueDecimals: 2
  					}
  			}]
  	   });
  	});

  });
})(jQuery);
