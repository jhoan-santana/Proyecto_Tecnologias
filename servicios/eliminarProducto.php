
<?php
include('ConnectionDB.php');


  if(isset($_POST['Eliminar'])){
    $sql = "DELETE FROM PRODUCTO   WHERE   codpro = $codpro";
    $con = $_POST['Eliminar']; 
    $result = mysqli_query($con,$sql);
    if ($result) {
      header('Location: ../inicio admin');
      echo "Elimino";
    }else{
      
      echo "No elimino";
    }
  }
  
  


?>

