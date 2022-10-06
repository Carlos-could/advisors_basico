<?php



   $respuesta = [ ['descripcion' => 'IPhone X','unidad_de_medida'=>'standard','codigo'=>'07739340'],
	 		           ['descripcion' => 'Spectre x360','unidad_de_medida'=>'standard','codigo'=>'52932406'],
	 		           ['descripcion' => 'Mac AirBook','unidad_de_medida'=>'standard','codigo'=>'34807601']];


  $xml = simplexml_load_file("cds.xml");
  $json = json_encode($respuesta);

  header('Content-type: application/json');
  echo $json;
  //
  // echo json_encode($xml);
  //echo $json;
