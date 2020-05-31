<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

$con = new SQLite3("riesgos.db") or die("Problemas para conectar");
$cs = $con -> query("SELECT procedimientoPro FROM listaProcedimientos ORDER BY procedimientoPro");

$array = array();

while ($resul = $cs -> fetchArray()) {

    $procedimientoPro = $resul['procedimientoPro'];
    $array[] = $procedimientoPro; 
}
header('Content-Type: application/json');
echo json_encode($array);

$con -> close();

 ?>