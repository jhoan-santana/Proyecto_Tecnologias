<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PCREA</title>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css" />
    <link rel="shortcut icon" href="assets/logo2.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap"
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
    <div class="maint-content">
      <div class="title-section">Tarjeta gráfica</div>
      <div class="products-list" id="space-list"></div>
    </div>
    <script type="text/javascript">
      $(document).ready(function() {
        $.ajax({
          url: "servicios/producto/get_all_products.php",
          type: "POST",
          data: {},
          success: function(data) {
            console.log(data);
            let html = "";
            for (var i = 0; i < data.datos.length; i++) {
              html +=
                '<div class="product-box">' +
                '<a href="producto.php?p=' +
                data.datos[i].codpro +
                '">' +
                '<div class="product">' +
                '<img src="assets/products/' +
                data.datos[i].rutimapro +
                '">' +
                '<div class="detail-title">' +
                data.datos[i].nompro +
                "</div>" +
                '<div class="detail-description">' +
                data.datos[i].despro +
                "</div>" +
                '<div class="detail-price">' +
                formato_precio(data.datos[i].prepro) +
                "</div>" +
                "</div>" +
                "</a>" +
                "</div>";
            }
            document.getElementById("space-list").innerHTML = html;
          },
          error: function(err) {
            console.error(err);
          }
        });
      });
      function formato_precio(valor) {
        //10.99
        let svalor = valor.toString();
        let array = svalor.split(".");
        return "S/. " + array[0] + ".<span>" + array[1] + "</span>";
      }
    </script>
  </body>
  <footer>
    <div class="contenedor-footer"></div>
    <div class="content-foo"></div>
    <h4>Desarrollado por</h4>
    <p>Felipe Escobar</p>
    <p>Laonardo Santana</p>
    <p>Nicolas Chaves</p>
    <p>Sofia Cuellar</p>
  </footer>
</html>
