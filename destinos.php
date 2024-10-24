<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuestros Destinos</title>
  <!--Icono de la ventana-->
  <link rel="shortcut icon" href="imagenes/favicon2.png">
  <!--Enlace a la hoja de estilo CSS-->
  <link rel="stylesheet" href="css/estilo.css">
  <!--Scroll reveal animacion-->
</head>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Obtener referencias a los elementos del formulario y al botón
    var formulario = document.getElementById("agregarDestinoForm");
    var botonAgregar = document.getElementById("agregarDestinoBtn");

    // Agregar un evento de clic al botón
    botonAgregar.addEventListener("click", function() {
      // Mostrar u ocultar el formulario al hacer clic en el botón
      formulario.style.display = formulario.style.display === "none" ? "block" : "none";
    });
  });
</script>

<body style="position: absolute;">
  <header>
    <div>
      <img src="imagenes/logo.png" alt="Equipo H">
    </div>

    <nav class="navbar">
      <ul>
        <li><a href="index.php">PAGINA PRINCIPAL</a></li>
        <li><a href="contacto.php">CONTACTO</a></li>
        <li><a href="acercaDe copy.php">SOBRE NOSOTROS</a></li>

      </ul>
    </nav>


    <nav class="navLogin">
      <ul>
        <li><a href="login/login.php" class="login">CERRAR SESIÓN</a></li>

      </ul>
    </nav>
  </header>

  <section class="topSeccion">
    <div class="topImage"></div>
    <div class="logoTop"></div>
  </section>

  <section class="destinosSeccion1">
    <div class="container1">
      <div></div>
      <div>
        <h1>DESTINOS</h1>
        <hr>
      </div>
    </div>
    <div>
      <h2 class="parrafoDestinos">
        Permítanos presentarle las impresionantes costas de Nayarit. Desde las soleadas playas y los encantadores pueblos mágicos, hasta las experiencias únicas de aventura, diversión y relajación, cada región ofrece su propia cultura, cocina, y encanto.
      </h2>
    </div>
  </section>

  <h2 class="separador">
    Deléitese con la belleza y la cultura de nuestros destinos y descubra las joyas ocultas que le esperan.
  </h2>

  <section class="destinosSeccionLugares">
    <div class="right">
      <h1>Sayulita</h1>
      <P>Pueblo mágico con hermosas playas y excelente surf.</P>
      <p>Es conocida por sus playas con fuerte oleaje, como la playa Sayulita central. Al oeste, la Playa de los Muertos está más resguardada entre rocas que la protegen. Las galerías de Sayulita venden obras de arte del pueblo indígena huichol. Al suroeste, las Islas Marietas tienen una fauna diversa que incluye ballenas jorobadas y delfines.</p>
      <p>Tiempo: 31°C, viento del SO a 11 km/h, humedad del 73 %.</p>
      <div class="btn">
        <a href="destinos/Sayulita/sayulita.php">LEER MÁS</a>
      </div>
      
    </div>
    <div class="left">
      <div class="imageDestinos1"></div>
    </div>
  </section>

  <section class="destinosSeccionLugares">
    <div class="right">
      <div class="imageDestinos2"></div>
    </div>
    <div class="left">

      <h1>San Blas</h1>
      <p>Destino histórico con rica fauna y flora.</p>
      <p>San Blas es una ciudad y puerto del estado mexicano de Nayarit, ubicada de cara al océano Pacífico. Es la cabecera del municipio de San Blas. Fue fundado en época de la colonia española y fue uno de los dos principales puertos en el océano Pacífico del Virreinato de Nueva España, junto con Acapulco.</p>
      <p>Superficie 823,6 km², Altitud 10m s.n.m. Población (2010) 10 187 hab.​</p>
      <div class="btn">
        <a href="destinos/San Blas/San Blas.php">LEER MÁS</a>
      </div>
    </div>
  </section>

  <section class="destinosSeccionLugares">
    <div class="right">
      <h1>Tepic</h1>
      <p>En el bello centro histórico de Tepic sobresalen construcciones como la Plaza de Armas, el Palacio de Gobierno y la Catedral de la Purísima Concepción.</p>
      <p>El Palacio de Gobierno fue inicialmente construido en el período 1870-1885, para que fuera una cárcel de la que aún se mantiene la distribución de espacios de los presidios de la época.</p>
      <p>Es un edificio de 2 plantas con altos ventanales y balcones. El centro de la fachada está rematado por un amplio frontón con reloj.</p>
      <div class="btn">
        <a href="destinos/Tepic/tepic.php">LEER MÁS</a>
      </div>
      
    </div>
    <div class="left">
      <div class="imageDestinos3"></div>
    </div>
  </section>

  <section class="destinosSeccionLugares">
    <div class="right">
      <div class="imageDestinos4"></div>
    </div>
    <div class="left">

      <h1>Rincón de Guayabitos</h1>
      <p>Con su playa de suave oleaje y arena blanca, Rincón de Guayabitos es uno de los mejores lugares para visitar en Nayarit por también su amplia variedad de alojamientos. Encontrarás desde cabañas rusticas a pie de arenal, hasta hoteles elegantes y modernos.</p>
      <p>En la playa se celebra ocasionalmente la ceremonia de liberación de tortuguillos que parten a hacer su vida. Desde ella también salen excursiones de pesca y de avistamiento de ballenas y fauna marina.</p>
      <div class="btn">
        <a href="destinos/RinconGuayabitos/guayabitos.php">LEER MÁS</a>
      </div>
    </div>
  </section>

  <section class="destinosSeccionLugares">
    <div class="right">
      <h1>Isla de Mexcaltitán</h1>
      <p>Isla con calles de agua y tradiciones ancestrales.</p>
      <p>Esta isla del municipio de Santiago Ixcuintla es uno de los rincones más raros y encantadores de Nayarit, con sus casas de techos entejados de dos aguas y calles inundadas por el desbordamiento del río San Pedro</p>
      <p>Los artesanos son hábiles trabajando el mangle y las hojas de palma con las que fabrican barcinas, esferas donde guardan camarones secos.</p>
      <div class="btn">
        <a href="destinos/Isla de Mexcaltitan/mexcaltitan.php">LEER MÁS</a>
      </div>
    </div>
    <div class="left">
      <div class="imageDestinos5"></div>
    </div>
  </section>

  <section class="destinosSeccionLugares">
    <div class="right">
      <div class="imageDestinos6"></div>
    </div>
    <div class="left">

      <h1>Punta Mita</h1>
      <p>Punta de Mita es el punto costero continental más cercano a las espectaculares Islas Marietas, uno de los destinos turísticos más demandados en el Pacífico mexicano.</p>
      <p>Es una península de poco más de 6 km2 con hoteles y condominios lujosos, caracterizada por un clima estable y fresca brisa marina.</p>
      <p> Allí también encontrarás el Cerro Careyeros con vestigios de vida del siglo IX.</p>
      <div class="btn">
        <a href="destinos/Punta de Mita/PuntaDeMita.php">LEER MÁS</a>
      </div>
    </div>
  </section>

  <br>


  <footer class="footer">
    <h2>
    </h2>
  </footer>

</body>

</html>