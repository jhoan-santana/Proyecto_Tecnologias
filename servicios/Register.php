<?php
include('ConnectionDB.php');
$emailUsuario=$_POST['emailUsuario'];
$sql="SELECT * FROM usuario WHERE emailUsuario='$emailUsuario'";
$result=mysqli_query($con,$sql);
if ($result) {
    $row=mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);
    if ($count!=0) {
        $contrasena=$_POST['contrasena'];
        if ($row['contrasena']!=$contrasena) {
            header('Location: ../login.php?e=3');
        }else{
            session_start();
            $_SESSION['codeUsuario']=$row['codeUsuario'];
            $_SESSION['emailUsuario']=$row['emailUsuario'];
            $_SESSION['nombreUsuario']=$row['nombreUsuario'];
            header('Location: ../');
        }
    }else{
        header('Location: ../login.php?e=2');
    }
}else{
    header('Location: ../login.php?e=1');
}