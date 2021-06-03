<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>PCREA</title>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
	<html lang="en">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Proyecto</title>
    <link rel="stylesheet" href="css/estilos.css" />
    <link rel="shortcut icon" href="assets/logo2.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap"
      rel="stylesheet"
/>
</head>
<body>
	<header>
	<nav>
        <a href="login.php">Iniciar sesión</a>
        <img src="assets/logo.png" alt="" class="imagen-logo" />
        <a href="Register.php">Registrate en pcrea</a>
    </nav>
		<div class="logo-place"><a href="index.php"><img src="assets/logo.png"></a></div>
		<div class="search-place">
			<input type="text" id="idbusqueda" placeholder="Encuenta todo lo que necesitas...">
			<button class="btn-main btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
		</div>
		<div class="options-place">
			<?php
			if (isset($_SESSION['codusu'])) {
				echo
				'<div class="item-option"><i class="fa fa-user-circle-o" aria-hidden="true"></i><p>'.$_SESSION['nomusu'].'</p></div>';
			}else{
			?>
			<div class="item-option" title="Registrate"><i class="fa fa-user-circle-o" aria-hidden="true"></i></div>
			<div class="item-option" title="Ingresar"><i class="fa fa-sign-in" aria-hidden="true"></i></div>
			<?php
			}
			?>
			<div class="item-option" title="Mis compras">
				<a href="carrito.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
			</div>
		</div>
		<div class="wave" style="height: 150px; overflow: hidden;">
        <svg
          viewBox="0 0 500 150"
          preserveAspectRatio="none"
          style="height: 100%; width: 100%;"
        >
          <path
            d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
            style="stroke: none; fill: #ffff;"
          ></path>
        </svg>
      </div>
	</header>
	<div class="main-content">
		<div class="content-page">
			<div class="title-section">Productos destacados</div>
			<div class="products-list" id="space-list">
			</div>
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
									'<img src="assets/products/'+data.datos[i].rutimapro+'">'+
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
			return "S/. "+array[0]+".<span>"+array[1]+"</span>";
		}
	</script>
</body>
</html>