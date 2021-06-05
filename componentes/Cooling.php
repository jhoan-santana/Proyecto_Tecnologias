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
		
		<div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #ffff;"> </path> </svg></div>
	</header>
	
	<div class="contenedor grafica">
		<h1 class = "titulo">Refrigeración</h1>
		<div class= contenedor-grafica>
			<div class= "contenido-textos">
				<h3><span>8</span>¿Qué es la refrigeración?</h3>
				<p>
				El calor es el enemigo a batir. El «coco» de los circuitos integrados en general.
				 Y de los microprocesadores en particular. Si se incrementa en exceso puede provocar 
				 que la estabilidad y el rendimiento de un ordenador caigan en picado, pero lo peor no es esto.
				  Lo más grave es que una temperatura excesiva puede desencadenar procesos fisicoquímicos capaces
				   de dañar permanentemente un microprocesador. 
				   Afortunadamente, tenemos herramientas diseñadas para impedir que
				   ocurran estos efectos no deseados. La refrigeración mediante ventiladores
				    es la más utilizada y suele dar muy buenos resultados, y tambien existe la refiregación liquida.
				</p>
			</div>
			</div>
		<div class="products-list7" id="space-list7">
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				url:'../servicios/producto/get_all_products7.php',
				type:'POST',
				data:{},
				success:function(data){
					console.log(data);
					let html='';
					for (var i = 0; i < data.datos.length; i++) {
						html+=
						'<div class="product-box">'+
							'<a href="../Mipc/producto.php?p='+data.datos[i].codpro+'">'+
								'<div class="product">'+
									'<img src="assets/products/'+data.datos[i].rutimapro+'">'+
									'<div class="detail-title">'+data.datos[i].nompro+'</div>'+
									'<div class="detail-description">'+data.datos[i].despro+'</div>'+
									'<div class="detail-price">'+formato_precio(data.datos[i].prepro)+'</div>'+
								'</div>'+
							'</a>'+
						'</div>';
					}
					document.getElementById("space-list7").innerHTML=html;
				},
				error:function(err){
					console.error(err);
				}
			});
		});
		function formato_precio(valor){
			//10.99
			let svalor=valor.toString();
			let array=svalor.split(".");
			return "$ "+array[0];
		}
	</script>


	<div class= "botonesfoot">
		<a class = "sig-atr" href="Psu.php">Atrás </a>
		<a class = "sig-atr" href="../Mipc/carrito.php">Siguiente </a>
	</div>

	

</body>
</html>