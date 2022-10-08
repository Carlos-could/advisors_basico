<?php
if(!defined ('ABSPATH')) exit;

function read_xml_chart() {

   $path = 'http://localhost/carlosPlugin/wp-content/plugins/advisors_basico/includes/cds_chart.xml';

   $xml = simplexml_load_file($path) ;

   header('Content-type: application/json');
   echo json_encode($xml);
   die();
}

add_action('wp_ajax_nopriv_read_xml_chart', 'read_xml_chart');
add_action('wp_ajax_read_xml_chart', 'read_xml_chart');
