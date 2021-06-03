<?php
include('ConnectionDB.php');

if(isset($_POST['Registrar'])){
    if (strlen($_POST['nomusu']) >= 1  && strlen($_POST['apeusu']) >= 1  && strlen($_POST['emausu']) >= 1  && strlen($_POST['pasusu']) >= 1) {
    $nomusu = trim($_POST['nomusu']);
    $apeusu = trim($_POST['apeusu']);
    $emausu = trim($_POST['emausu']);
    $pasusu = trim($_POST['pasusu']);
    $sql = "INSERT INTO USUARIO (nomusu,apeusu,emausu,pasusu) VALUES ('$nomusu','$apeusu','$emausu','$pasusu')";
    $result = mysqli_query($con,$sql);
    if ($result) {
      header('Location: ../login.php');
   
    }
    }
  }

?>