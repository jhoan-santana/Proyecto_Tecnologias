<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>PCREA</title>
  <html lang="en">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="shortcut icon" href="../assets/logo2.png" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" 
    rel="stylesheet"/>

	<link rel="stylesheet" href="../librerias/fontawesome/css/all.css">
	
</head>
<body>
	<header>   
	 
		<div class="options-place">
			<?php
			if (isset($_SESSION['codusu'])) {
				echo
				'<div class="item-option"><i class="far fa-user" aria-hidden="true"></i><p>'.$_SESSION['nomusu'].'</p></div>';
			}else{
			?>
			<div class="item-option" title="Registrate"><i class="far fa-user" aria-hidden="true"></i></div>
			<div class="item-option" title="Ingresar"><i class="far fa-user" aria-hidden="true"></i></div>
			<?php
			}
			?>
			<div class="logo-place"><a href="inicio.php"><img src="../assets/logo.png"></a></div>
			<div class="item-option" title="Mi PC">
				<a href="../Mipc/carrito.php"><i class="fas fa-desktop" aria-hidden="true"></i></a>
				
			</div>
			
			<a class = "logout" href="../servicios/logout.php">Cierra Sesión </a>
		</div>


		<div class ="carousel">
        <div class ="carouselcontenedor">
            <button aria-label="Anterior" class ="carouselanterior">
                <i class="fas fa-chevron-left"></i>
            </button>

            <div class="carousellista">
                <div class = "carouselelemento">
                <img src="../assets/juegos1.jpg" alt="Juega sin limites con el poder de las nuevas tarjetas gráficas "  > 
                <p>Juega sin limites con el poder de las nuevas tarjetas gráficas</p>
                </div>
                 <div class = "carouselelemento">
                <img src="../assets/noticia.jpg" alt="Nvidia presenta sus nuevas tarjetas gráficas con arquetiectura ampere y nuevos nucleos RTX. ">
                <p>Nvidia presenta sus nuevas tarjetas gráficas con arquetiectura ampere y nuevos nucleos RTX.</p>
                </div>
                <div class = "carouselelemento">
                <img src="../assets/hardware.jpg" alt="Se rumorea que los nuevos procesadores de intel alfin pasaran a ser de 7nm.">
                <p>Se rumorea que los nuevos procesadores de intel alfin pasaran a ser de 7nm.</p>
                </div>
                <div class = "carouselelemento">
                <img src="../assets/nvidia.jpg" alt="Nvidia lidera el mercado con su tecnologia DLSS pero AMD no se quedara átras.">
                <p>Nvidia lidera el mercado con su tecnologia DLSS pero AMD no se quedara átras.</p>
                </div>
                <div class = "carouselelemento">
                <img src="../assets/diseño.jpg" alt="Crea más allá de tus limites con una computadora enfocada en diseño. ">
                <p>Crea más allá de tus limites con una computadora enfocada en diseño.</p>
                </div>
            </div>

            <button aria-label="Siguiente" class ="carouselsiguiente">
            <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <div role="tablist" class="carouselindicadores"></div>
    </div>
</div>







		<div class="container">
			<a href="Gabinete.php" class="Botoninicio">Gabinete</a>
			<a href="Almacenamiento.php" class="Botoninicio">Almacenamiento</a>
			<a href="Ram.php" class="Botoninicio">RAM</a>
			</div>
			<div class="container">
			<a href="Cpu.php" class="Botoninicio">CPU</a>
			<a href="Gpu.php" class="Botoninicio">GPU</a>
			<a href="Mother.php" class="Botoninicio">Motherboard</a>
			</div>
			<div class="container">
			<a href="Psu.php" class="Botoninicio">PSU</a>
			<a href="Cooling.php" class="Botoninicio">Refrigeración</a>
		</div>
<script>src ="../js/carrusel.js"</script>
		<div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #ffff;"> </path> </svg></div>
	</header>
	</body>
</html>