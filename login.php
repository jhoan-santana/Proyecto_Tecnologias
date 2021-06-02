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
    <div class="form-group"> 
      <form action="servicios/login.php" method="POST">
        <label for="email" class="label">Correo Electronico</label>
        <input type="text" name="emailUsuario">
        <label for="password" class="label" >Contraseña</label>
        <input type="password" name="contrasena">
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
      </form>
    </div>
  </header>
  </body>
</html>