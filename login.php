<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PCreate</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="assets/logo2.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <nav>                
      <img src="assets/logo.png" alt="" class= "formulario-logo">
    </nav>  

    <div class="form-group"> 
    <h1></h1>
    <h1>Inicia sesión</h1>
      <form class= "form" action="servicios/login.php" method="POST">

        <input type="text" name="emailUsuario" placeholder="Username">

        <input type="password" name="contrasena" placeholder="Password">
        <?php
          if (isset($_GET['e'])) { 
            switch ($_GET['e']) {
              case '1':
                echo '<p>Error de conexion</p>';
                break;
              case '2':
                echo '<p>Email invalido</p>';
                break;
              case '3':
                echo '<p>contraseña incorrecta</p>';
                break;
              default:
                break;
            }
          }
        ?>
        <button type="submit">Ingresar</button>
        <h1></h1>
        <a class = "botonregistro" href="Register.php">Registrate en pcreate</a>
        <h1></h1>
        <a class = "botonregistro" href="index.html">Salir</a>
      </form>
    </div>
    <div class= "wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #ffff;"></path></svg></div>
  </header>
  </body>
</html>