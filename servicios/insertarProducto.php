
<?php
include('ConnectionDB.php');

if(isset($_POST['Insertar'])){
    if (strlen($_POST['nompro']) >= 1 && strlen($_POST['despro']) >= 1 && strlen($_POST['prepro']) >= 1 && strlen($_POST['estado']) >= 1) {
    $nompro = trim($_POST['nompro']);
    $despro = trim($_POST['despro']);
    $prepro = trim($_POST['prepro']);
    $estado = trim($_POST['estado']);
    $rutimapro = trim($_POST['rutimapro']);
    //$rutimapro = addslashes(file_get_contents($_FILES['rutimapro']['tmp_name']));
    $sql = "INSERT INTO PRODUCTO (nompro,despro,prepro,estado,rutimapro) VALUES ('$nompro','$despro','$prepro','$estado','$rutimapro')";
    $result = mysqli_query($con,$sql);
    if ($result) {
      header('Location: ../Mipc/dashboard_admi.html');
      echo "inserto";
    }else{
      echo "no inserto";
    }
  } 

  
  
  
}

?>

