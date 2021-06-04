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
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/estilos.css" />
  <link rel="shortcut icon" href="assets/logo2.png" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" 
    rel="stylesheet"/>

	<link rel="stylesheet" href="librerias/fontawesome/css/all.css">
	
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
			<div class="logo-place"><a href="inicio.php"><img src="assets/logo.png"></a></div>
			<div class="item-option" title="Mi PC">
				<a href="carrito.php"><i class="fas fa-desktop" aria-hidden="true"></i></a>
				
			</div>
			
			<a class = "logout" href="logout.php">Cierra Sesión </a>
		</div>
		
		<div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #ffff;"> </path> </svg></div>
	</header>

	
	<div class="contenedor grafica">
		<h1 class = "titulo">Gabinete</h1>
		<div class= contenedor-grafica>
			<div class= "contenido-textos">
				<h3><span>1</span>¿Qué es el gabinete?</h3>
				<p>Las carcasas, torres, gabinetes, cajas o chasis de computadora u ordenador,
					 son el armazón del equipo que contiene los componentes del computador,
					  normalmente construidos de acero, plástico o aluminio. 
					  También podemos encontrarlas de otros materiales como madera o polimetilmetacrilato
					   para cajas de diseño. A menudo de metal electrogalvanizado.
					    Su función es la de proteger los componentes del computador. </p>
			</div>
			</div>
		<div class="products-list" id="space-list">
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				url:'servicios/producto/get_all_products.php',
				type:'POST',
				data:{},
				success:function(data){
					console.log(data);
					let html='';
					for (var i = 0; i < data.datos.length; i++) {
						html+=
						'<div class="product-box">'+
							'<a href="producto.php?p='+data.datos[i].codpro+'">'+
								'<div class="product">'+
									'<img src="assets/products/Chasis/'+data.datos[i].rutimapro+'">'+
									'<div class="detail-title">'+data.datos[i].nompro+'</div>'+
									'<div class="detail-description">'+data.datos[i].despro+'</div>'+
									'<div class="detail-price">'+formato_precio(data.datos[i].prepro)+'</div>'+
								'</div>'+
							'</a>'+
						'</div>';
					}
					document.getElementById("space-list").innerHTML=html;
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
			return "$ "+array[0]+".<span>"+array[1]+"</span>";
		}
	</script>




	<div class="contenedor grafica">
		<h1 class = "titulo">Memoria RAM</h1>
		<div class= contenedor-grafica>
			<div class= "contenido-textos">
				<h3><span>2</span>¿Qué son las tarjetas gráficas?</h3>
				<p>La memoria RAM es la memoria principal de un dispositivo,
					 esa donde se almacenan de forma temporal los datos de los programas
					  que estás utilizando en este momento. Sus siglas significan Random Access Memory </p>
			</div>
			</div>
		<div class="products-list1" id="space-list1">
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				url:'servicios/producto/get_all_products1.php',
				type:'POST',
				data:{},
				success:function(data){
					console.log(data);
					let html='';
					for (var i = 0; i < data.datos.length; i++) {
						html+=
						'<div class="product-box">'+
							'<a href="producto.php?p='+data.datos[i].codpro+'">'+
								'<div class="product">'+
									'<img src="assets/products/Ram/'+data.datos[i].rutimapro+'">'+
									'<div class="detail-title">'+data.datos[i].nompro+'</div>'+
									'<div class="detail-description">'+data.datos[i].despro+'</div>'+
									'<div class="detail-price">'+formato_precio(data.datos[i].prepro)+'</div>'+
								'</div>'+
							'</a>'+
						'</div>';
					}
					document.getElementById("space-list1").innerHTML=html;
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
			return "$ "+array[0]+".<span>"+array[1]+"</span>";
		}
	</script>



<div class="contenedor grafica">
		<h1 class = "titulo">Almacenamineto</h1>
		<div class= contenedor-grafica>
			<div class= "contenido-textos">
				<h3><span>3</span>¿Qué es un hdd y ssd?</h3>
				<p>Las unidades de estado sólido o SSD (Solid State Drive) son una alternativa 
					a los discos duros. La gran diferencia es que mientras los discos duros utilizan
					 componentes mecánicos que se mueven, las SSD almacenan los archivos en microchips
					  con memorias flash interconectadas entre sí. Por lo tanto, casi podríamos considerarlos
					   como una evolución de las memorias USB. </p>
					   </div>
			</div>
		<div class="products-list2" id="space-list2">
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				url:'servicios/producto/get_all_products2.php',
				type:'POST',
				data:{},
				success:function(data){
					console.log(data);
					let html='';
					for (var i = 0; i < data.datos.length; i++) {
						html+=
						'<div class="product-box">'+
							'<a href="producto.php?p='+data.datos[i].codpro+'">'+
								'<div class="product">'+
									'<img src="assets/products/Almacenamiento/'+data.datos[i].rutimapro+'">'+
									'<div class="detail-title">'+data.datos[i].nompro+'</div>'+
									'<div class="detail-description">'+data.datos[i].despro+'</div>'+
									'<div class="detail-price">'+data.datos[i].prepro+'</div>'+
								'</div>'+
							'</a>'+
						'</div>';
					}
					document.getElementById("space-list2").innerHTML=html;
				},
				error:function(err){
					console.error(err);
				}
			});
		});
	</script>


<div class="contenedor grafica">
		<h1 class = "titulo">CPU (central process unit)</h1>
		<div class= contenedor-grafica>
			<div class= "contenido-textos">
				<h3><span>4</span>¿Qué es el procesador?</h3>
				<p>El procesador es el cerebro del sistema,
					 justamente procesa todo lo que ocurre en la PC y 
					 ejecuta todas las acciones que existen.
					  Cuanto más rápido sea el procesador que tiene una computadora,
					   más rápidamente se ejecutarán las órdenes que se le den a la máquina.</p>
			</div>
			</div>
		<div class="products-list3" id="space-list3">
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				url:'servicios/producto/get_all_products3.php',
				type:'POST',
				data:{},
				success:function(data){
					console.log(data);
					let html='';
					for (var i = 0; i < data.datos.length; i++) {
						html+=
						'<div class="product-box">'+
							'<a href="producto.php?p='+data.datos[i].codpro+'">'+
								'<div class="product">'+
									'<img src="assets/products/cpu/'+data.datos[i].rutimapro+'">'+
									'<div class="detail-title">'+data.datos[i].nompro+'</div>'+
									'<div class="detail-description">'+data.datos[i].despro+'</div>'+
									'<div class="detail-price">'+data.datos[i].prepro+'</div>'+
								'</div>'+
							'</a>'+
						'</div>';
					}
					document.getElementById("space-list3").innerHTML=html;
				},
				error:function(err){
					console.error(err);
				}
			});
		});
	</script>




<div class="contenedor grafica">
		<h1 class = "titulo">Tarjeta gráfica</h1>
		<div class= contenedor-grafica>
			<div class= "contenido-textos">
				<h3><span>5</span>¿Qué son las tarjetas gráficas?</h3>
				<p>La tarjeta gráfica o tarjeta de vídeo de un componente que viene integrado en la placa base del PC o se instala a parte para ampliar sus capacidades. Concretamente, esta tarjeta está dedicada al procesamiento de datos relacionados con el vídeo y las imágenes que se están reproduciendo en el ordenador. </p>
			</div>
			</div>
		<div class="products-list2" id="space-list4">
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				url:'servicios/producto/get_all_products4.php',
				type:'POST',
				data:{},
				success:function(data){
					console.log(data);
					let html='';
					for (var i = 0; i < data.datos.length; i++) {
						html+=
						'<div class="product-box">'+
							'<a href="producto.php?p='+data.datos[i].codpro+'">'+
								'<div class="product">'+
									'<img src="assets/products/gpu/'+data.datos[i].rutimapro+'">'+
									'<div class="detail-title">'+data.datos[i].nompro+'</div>'+
									'<div class="detail-description">'+data.datos[i].despro+'</div>'+
									'<div class="detail-price">'+data.datos[i].prepro+'</div>'+
								'</div>'+
							'</a>'+
						'</div>';
					}
					document.getElementById("space-list4").innerHTML=html;
				},
				error:function(err){
					console.error(err);
				}
			});
		});
	</script>







<div class="contenedor grafica">
		<h1 class = "titulo">Tarjeta madre</h1>
		<div class= contenedor-grafica>
			<div class= "contenido-textos">
				<h3><span>6</span>¿Qué es la tarjeta madre?</h3>
				<p> La tarjeta madre también conocida como placa madre,
					 placa base o motherboard (en inglés), 
					 es la tarjeta principal en la estructura interna del computador donde 
					 se encuentran los circuitos electrónicos, el procesador, las memorias,
					 y las conexiones principales, en ella se conectan todos los componentes del computador. </p>
			</div>
			</div>
		<div class="products-list5" id="space-list5">
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				url:'servicios/producto/get_all_products5.php',
				type:'POST',
				data:{},
				success:function(data){
					console.log(data);
					let html='';
					for (var i = 0; i < data.datos.length; i++) {
						html+=
						'<div class="product-box">'+
							'<a href="producto.php?p='+data.datos[i].codpro+'">'+
								'<div class="product">'+
									'<img src="assets/products/mother/'+data.datos[i].rutimapro+'">'+
									'<div class="detail-title">'+data.datos[i].nompro+'</div>'+
									'<div class="detail-description">'+data.datos[i].despro+'</div>'+
									'<div class="detail-price">'+data.datos[i].prepro+'</div>'+
								'</div>'+
							'</a>'+
						'</div>';
					}
					document.getElementById("space-list5").innerHTML=html;
				},
				error:function(err){
					console.error(err);
				}
			});
		});
	</script>






<div class="contenedor grafica">
		<h1 class = "titulo">PSU( Power Supply Unit)</h1>
		<div class= contenedor-grafica>
			<div class= "contenido-textos">
				<h3><span>7</span>¿Qué son las fuentes de poder?</h3>
				<p> La fuente de poder o fuente de alimentación es componente
					 electrónico que sirve para abastecer de electricidad al computador.
					  Un nombre más adecuado sería el de transformador, porque convierte
					   o transforma corriente alterna (AC) en corriente directa (DC), y
					    baja el voltaje de 120 voltios AC a 12,5 voltios DC, necesarios para la PC y sus componentes.</p>
			</div>
			</div>
		<div class="products-list6" id="space-list6">
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				url:'servicios/producto/get_all_products6.php',
				type:'POST',
				data:{},
				success:function(data){
					console.log(data);
					let html='';
					for (var i = 0; i < data.datos.length; i++) {
						html+=
						'<div class="product-box">'+
							'<a href="producto.php?p='+data.datos[i].codpro+'">'+
								'<div class="product">'+
									'<img src="assets/products/psu/'+data.datos[i].rutimapro+'">'+
									'<div class="detail-title">'+data.datos[i].nompro+'</div>'+
									'<div class="detail-description">'+data.datos[i].despro+'</div>'+
									'<div class="detail-price">'+data.datos[i].prepro+'</div>'+
								'</div>'+
							'</a>'+
						'</div>';
					}
					document.getElementById("space-list6").innerHTML=html;
				},
				error:function(err){
					console.error(err);
				}
			});
		});
	</script>







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
				url:'servicios/producto/get_all_products7.php',
				type:'POST',
				data:{},
				success:function(data){
					console.log(data);
					let html='';
					for (var i = 0; i < data.datos.length; i++) {
						html+=
						'<div class="product-box">'+
							'<a href="producto.php?p='+data.datos[i].codpro+'">'+
								'<div class="product">'+
									'<img src="assets/products/refrigeracion/'+data.datos[i].rutimapro+'">'+
									'<div class="detail-title">'+data.datos[i].nompro+'</div>'+
									'<div class="detail-description">'+data.datos[i].despro+'</div>'+
									'<div class="detail-price">'+data.datos[i].prepro+'</div>'+
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
	</script>

</body>
</html>