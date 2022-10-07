<?php
if(!defined ('ABSPATH')) exit;

function funciona() {


   $ar = [ ['descripcion' => 'IPhone X','unidad_de_medida'=>'standard','codigo'=>'07739340'],
	 		           ['descripcion' => 'Spectre x360','unidad_de_medida'=>'standard','codigo'=>'52932406'],
	 		           ['descripcion' => 'Mac AirBook','unidad_de_medida'=>'standard','codigo'=>'34807601']];

   //$xml = simplexml_load_file("cds.xml");

   $xmlOnline = 'https://www.w3schools.com/xml/simple.xml';
   $xmlLocal = 'http://localhost/carlosPlugin/wp-content/plugins/advisors_basico/cds.xml';
   $xmlLocalCD = './cds.xml';


   $xml = simplexml_load_file($xmlLocal) ;//hattest du die xml mit  simplexml_load_file  gelesen?


   header('Content-type: application/json');
   echo json_encode($xml);
   die();
}


add_action('wp_ajax_nopriv_funciona', 'funciona');
add_action('wp_ajax_funciona', 'funciona');
