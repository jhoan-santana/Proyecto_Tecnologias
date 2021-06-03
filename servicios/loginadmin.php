<?php
include('ConnectionDB.php');
$emailAdmin=$_POST['emailAdmin'];
$sql="SELECT * FROM administrador WHERE emailAdmin='$emailAdmin'";
$result=mysqli_query($con,$sql);
if ($result) {
    $row=mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);
    if ($count!=0) {
        $contrasenaAdmin=$_POST['contrasenaAdmin'];
        if ($row['contrasenaAdmin']!=$contrasenaAdmin) {
            header('Location: ../login.php?e=3');
        }else{
            session_start();
            $_SESSION['codeAdmin']=$row['codeAdmin'];
            $_SESSION['emailAdmin']=$row['emailAdmin'];
            header('Location: ../dashboard_admi.html');
        }
    }else{
        header('Location: ../login.php?e=2');
    }
}else{
    header('Location: ../login.php?e=1');
}