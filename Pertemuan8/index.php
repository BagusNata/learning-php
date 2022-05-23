<?php 
//data array
$obJson = [
  'putu'    => 30,
  'made'    => 27,
  'nyoman'  => 25,
  'ketut'   => 22
];

//rubah format array
$obJson =  json_encode($obJson);

$arrDecode = json_decode($obJson);

foreach($arrDecode as $nama => $umur){
  echo "Nama : " . $nama . ", umur : " . $umur . "</br>";
}

?>