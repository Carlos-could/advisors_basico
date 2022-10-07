<?php



  $respuesta = [ ['descripcion' => 'IPhone X','unidad_de_medida'=>'standard','codigo'=>'07739340'],
	 		           ['descripcion' => 'Spectre x360','unidad_de_medida'=>'standard','codigo'=>'52932406'],
	 		           ['descripcion' => 'Mac AirBook','unidad_de_medida'=>'standard','codigo'=>'34807601']];


  $path = './cds.xml';
  $xmlfile = file_get_contents($path);
  $ob= simplexml_load_string($xmlfile);




  echo $ob;



  // $xml = simplexml_load_file("cds.xml");
  // $json = json_encode($xml);
  // header('Content-type: application/json');
  // echo $json;
