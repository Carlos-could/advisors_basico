<?php
if(!defined ('ABSPATH')) exit;

function read_xml_tabelle() {

  //$path = 'http://localhost/carlosPlugin/wp-content/plugins/advisors_basico/includes/data/dachfonds.xml';
  $path = 'http://localhost/miwordpress/wp-content/plugins/advisors_basico/includes/data/dachfonds.xml';

   $xml = simplexml_load_file($path) ;

   header('Content-type: application/json');
   echo json_encode($xml);
   die();
}

add_action('wp_ajax_nopriv_read_xml_tabelle', 'read_xml_tabelle');
add_action('wp_ajax_read_xml_tabelle', 'read_xml_tabelle');
