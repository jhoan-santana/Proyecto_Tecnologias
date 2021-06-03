<?php
include('../ConnectionDB.php');
$response=new stdClass();


$datos=[];
$i=0;
$sql="SELECT * FROM producto where estado=1";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
	$obj=new stdClass();
	$obj->nombreProducto=$row['nombreProducto'];
	$obj->descripcionProducto=$row['descripcionProducto'];
	$obj->enlaceProducto=$row['enlaceProducto'];
	$obj->rutaimagenProducto=$row['rutaimagenProducto'];
	$datos[$i]=$obj;
	$i++;
}
$response->datos=$datos;

mysqli_close($con);
header('Content-Type: application/json');
echo json_encode($response);
