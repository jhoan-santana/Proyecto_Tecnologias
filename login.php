<?php
include('ConnectionDB.php');
$emailUsuario=$_POST['emailUsuario'];
$sql="SELECT*FROM usuario WHERE emailUsuario='$emailUsuario';
$result= mysqli_query($con,$sql);
if ($result){   
    $row=mysqli_fetch_array($result);
    $count=mysqli_rows($result);
    if($count!=0){

    }else{
        header('../login.php?e=2');
        
    }
}else{
        header('../login.php?e=1');
        
    }
?>