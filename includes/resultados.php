<?php
if(!defined ('ABSPATH')) exit;



function funciona() {


  // function xml2js($xmlnode) {
  //     $root = (func_num_args() > 1 ? false : true);
  //     $jsnode = array();
  //
  //     if (!$root) {
  //         if (count($xmlnode->attributes()) > 0){
  //             $jsnode["$"] = array();
  //             foreach($xmlnode->attributes() as $key => $value)
  //                 $jsnode["$"][$key] = (string)$value;
  //         }
  //
  //         $textcontent = trim((string)$xmlnode);
  //         if (count($textcontent) > 0)
  //             $jsnode["_"] = $textcontent;
  //
  //         foreach ($xmlnode->children() as $childxmlnode) {
  //             $childname = $childxmlnode->getName();
  //             if (!array_key_exists($childname, $jsnode))
  //                 $jsnode[$childname] = array();
  //             array_push($jsnode[$childname], xml2js($childxmlnode, true));
  //         }
  //         return $jsnode;
  //     } else {
  //         $nodename = $xmlnode->getName();
  //         $jsnode[$nodename] = array();
  //         array_push($jsnode[$nodename], xml2js($xmlnode, true));
  //         return json_encode($jsnode);
  //     }
  // }

   $ar = [ ['descripcion' => 'IPhone X','unidad_de_medida'=>'standard','codigo'=>'07739340'],
	 		           ['descripcion' => 'Spectre x360','unidad_de_medida'=>'standard','codigo'=>'52932406'],
	 		           ['descripcion' => 'Mac AirBook','unidad_de_medida'=>'standard','codigo'=>'34807601']];

   $xml = simplexml_load_file("cds.xml");



   // $xml_string = file_get_contents('./cdsJulio.xml');
   // $xml = simplexml_load_string($xml_string);
   // $json = json_encode($xml);
   // $array = json_decode($json,TRUE);

   //$xml = simplexml_load_file('cdsJulio.xml', 'SimpleXMLElement',LIBXML_NOCDATA);


    // $fileContents= file_get_contents('cds.xml');
    //
 		// $fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);
    //
 		// $fileContents = trim(str_replace('"', "'", $fileContents));
    //
 		// $simpleXml = simplexml_load_string($fileContents);
    //
 		// $json = json_encode($simpleXml);

   header('Content-type: application/json');
   echo json_encode($xml);
   die();
}


add_action('wp_ajax_nopriv_funciona', 'funciona');
add_action('wp_ajax_funciona', 'funciona');
