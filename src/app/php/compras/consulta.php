<?php
header ("Access-Control-Allow-Origin: *");
header ("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

require("../conexion.php");

$con = "SELECT * FROM  compras ORDER BY fecha";
$res =mysqli_query($conexion, $con) or die('no consulto compra');

$vec =[];
while ($reg=mysqli_fetch_array($res))
{
    $vec[]=$reg;
}

$cad=json_encode($vec);
echo $cad;
header('Content-Type: application/json');

?>