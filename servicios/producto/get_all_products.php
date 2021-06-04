<?php
include('../ConnectionDB.php');
$response=new stdClass();

//$datos=array();
$datos=[];
$i=0;
$sql="select * from producto where estado=1";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
	$obj=new stdClass();
	$obj->codpro=$row['codpro'];
	$obj->nompro=$row['nompro'];
	$obj->despro=$row['despro'];
	$obj->prepro=$row['prepro'];
	$obj->rutimapro=$row['rutimapro'];
	
	//$obj->rutimapro=($row['rutimapro']base64_encode);
	/*img src="data:image/png;base64,<?php echo base64_encode($row['rutimapro']); ?>"*/
	$datos[$i]=$obj;
	$i++;
}
$response->datos=$datos;

mysqli_close($con);
header('Content-Type: application/json');
echo json_encode($response);
?>