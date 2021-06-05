<?php
    session_start();
    if (!isset($_SESSION['codusu'])) {
        header('location: ../index.php');
    }
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
  <link rel="stylesheet" href="../css/estilos.css" />
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
            <div class="logo-place"><a href="../componentes/inicio.php"><img src="../assets/logo.png"></a></div>
            <div class="item-option" title="Mi PC">
                <a href="carrito.php"><i class="fas fa-desktop" aria-hidden="true"></i></a>
            </div>
            <a class = "logout" href="../servicios/logout.php">Cierra Sesión </a>
        </div>
        
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #ffff;"> </path> </svg></div>
    </header>

	<div class="main-content">
        <div class="content-page">
            <div class="titulo">Mi PC</div>
            <div class="body-pedidos" id="space-list">
            </div>
            <!--<input class="ipt-procom" type="text" id="dirusu" placeholder="Dirección">
            <br>
            <input class="ipt-procom" type="text" id="telusu" placeholder="Celular">
            <br>
            <h4>Tipos de pago</h4>
            <div class="metodo-pago">
                <input type="radio" name="tipopago" value="1" id="tipo1">
                <label for="tipo1">Pago por transferencia</label>
            </div>
            <div class="metodo-pago">
                <input type="radio" name="tipopago" value="2" id="tipo2">
                <label for="tipo2">Pago con tarjeta de crédito/débito</label>
            </div>-->

            <button onclick="procesar_compra()" style="margin-top: 5px;">Guardar Mi PC</button>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $.ajax({
                url:'../servicios/pedido/get_porprocesar.php',
                type:'POST',
                data:{},
                success:function(data){
                    console.log(data);
                    let html='';
                    let sumaMonto=0;
                    for (var i = 0; i < data.datos.length; i++) {
                        html+=
                        '<div class="item-pedido">'+
                            '<div class="pedido-img">'+
                                '<img src="../assets/products/'+data.datos[i].rutimapro+'">'+
                            '</div>'+
                            '<div class="pedido-detalle">'+
                                '<h3>'+data.datos[i].nompro+'</h3>'+
                                '<p><b>Precio:</b> S/ '+data.datos[i].prepro+'</p>'+
                                '<p><b>Fecha:</b> '+data.datos[i].fecped+'</p>'+
                                '<p><b>Estado:</b> '+data.datos[i].estado+'</p>'+
                                /*'<p><b>Dirección:</b> '+data.datos[i].dirusuped+'</p>'+
                                '<p><b>Celular:</b> '+data.datos[i].telusuped+'</p>'+*/
                            '</div>'+
                        '</div>';
                        sumaMonto+=parseInt(data.datos[i].prepro)+1;
                    }
                    Culqi.settings({
                        title: 'Mi tienda',
                        currency: 'PEN',
                        description: 'Productos escolares',
                        amount: sumaMonto
                    });
                    document.getElementById("space-list").innerHTML=html;
                },
                error:function(err){
                    console.error(err);
                }
            });
        });
        function procesar_compra(){
            let dirusu=document.getElementById("dirusu").value;
            let telusu=$("#telusu").val();
            let tipopago=1;
            if (document.getElementById("tipo2").checked) {
                tipopago=2;
            }
            if (dirusu=="" || telusu=="") {
                alert("Complete los campos");
            }else{
                if (!document.getElementById("tipo1").checked &&
                    !document.getElementById("tipo2").checked) {
                    alert("Seleccione un método de pago!");
                }else{
                    if (tipopago==2) {
                        Culqi.open();
                    }else{
                        $.ajax({
                            url:'../servicios/pedido/confirm.php',
                            type:'POST',
                            data:{
                                dirusu:dirusu,
                                telusu:telusu,
                                tipopago:tipopago,
                                token:''
                            },
                            success:function(data){
                                console.log(data);
                                if (data.state) {
                                    window.location.href="../Mipc/pedido.php";
                                }else{
                                    alert(data.detail);
                                }
                            },
                            error:function(err){
                                console.error(err);
                            }
                        });
                    }
                }
            }
        }
        function culqi() {
            if (Culqi.token) { 
                var token = Culqi.token.id;
                $.ajax({
                    url:'../servicios/pedido/confirm.php',
                    type:'POST',
                    data:{
                        dirusu:document.getElementById("dirusu").value,
                        telusu:$("#telusu").val(),
                        tipopago:2,
                        token:token
                    },
                    success:function(data){
                        console.log(data);
                        if (data.state) {
                            window.location.href="../Mipc/pedido.php";
                        }else{
                            alert(data.detail);
                        }
                    },
                    error:function(err){
                        console.error(err);
                    }
                });
            } else {
                console.log(Culqi.error);
                alert(Culqi.error.user_message);
            }
        };
    </script>
    <script src="https://checkout.culqi.com/js/v3"></script>
    <script>
        Culqi.publicKey = 'pk_test_3adf22bd8acf4efc';
    </script>
</body>
</html>
