<?php

if(!defined ('ABSPATH')) exit;


function funciona() {

  // $respuesta = [ ['descripcion' => 'IPhone X','unidad_de_medida'=>'standard','codigo'=>'07739340'],
	// 		           ['descripcion' => 'Spectre x360','unidad_de_medida'=>'standard','codigo'=>'52932406'],
	// 		           ['descripcion' => 'Mac AirBook','unidad_de_medida'=>'standard','codigo'=>'34807601']];


  // 1 -xml file path
  // $path = "cds.xml";
  //
  // // 2 - Read entire file into string
  // $xmlfile = file_get_contents($path);
  //
  // // 3 - Convert xml string into an object
  // $new = simplexml_load_string($xmlfile);
  //
  // // 4 - Convert into json
  // $con = json_encode($new);
  //
  // // 5 - Convert into associative array
  // $newArr = json_decode($con, true);
  //
  // $x = json_encode($newArr['CD']);
  // $a = json_decode($x, true);
  $xml = simplexml_load_file("../includes/cds.xml");

  header('Content-type: application/json');
  echo json_encode($xml['CD']);
  die();

}

add_action('wp_ajax_nopriv_funciona', 'funciona');
add_action('wp_ajax_funciona', 'funciona');
