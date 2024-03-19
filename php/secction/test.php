<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<style>
       body {
              background-color: #fff
       }


       @media (max-width:991.98px) {
              .padding {
                     padding: 1.5rem
              }
       }

       @media (max-width:767.98px) {
              .padding {
                     padding: 1rem
              }
       }

       .padding {
              padding: 5rem
       }

       .card {
              position: relative;
              display: flex;
              width: 600px;
              flex-direction: column;
              min-width: 0;
              word-wrap: break-word;
              background-color: #fff;
              background-clip: border-box;
              border: 1px solid #d2d2dc;
              border-radius: 11px;
              -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
              -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
              box-shadow: 0px 0px 5px 0px rgb(161, 163, 164);
       }

       .card .card-body {
              padding: 1rem 1rem;
       }

       .card-body {
              flex: 1 1 auto;
              padding: 1.25rem
       }

       p {
              font-size: 0.875rem;
              margin-bottom: .5rem;
              line-height: 1.5rem;
              color: #000
       }

       h4 {
              line-height: .2 !important;
       }


       .items {
              width: 58%;
              margin: 0px auto;
              margin-top: 100px;
              left: 50px;
       }

       .slick-slide {
              margin: 10px
       }


       .media iframe,
       .media-content {
              position: absolute;
              top: 0;
              bottom: 0;
              left: 0;
              right: 0;
              border: 0;
              border-radius: inherit;
              background-size: cover;
              background-repeat: no-repeat;
              background-position: 50% 50%;
              background-color: rgba(120, 120, 120, .1);
              display: flex;
              -webkit-box-pack: center;
              -ms-flex-pack: center;
              justify-content: center;
              -webkit-box-align: center;
              -ms-flex-align: center;
              align-items: center
       }

       .media-content:before {
              content: '';
              position: absolute;
              height: 10%;
              width: 90%;
              left: 5%;
              bottom: 0;
              background: inherit;
              background-position-y: 100%;
              filter: blur(10px)
       }

       .circle .media-content:before {
              width: 40%;
              left: 30%
       }


       .profile-image {
              width: 100%;
              height: 200px;
              border-top-left-radius: 11px !important;
              border-top-right-radius: 11px;
       }

       .card-title {
              font-size: 19px;
              font-weight: 200;
       }

       .roger{
              color: #fff;
              margin: 65px 85px;
       }

       .col-Roger{
              margin-top: 10px;
              box-shadow: 2px 2px 21px #9d9d9d;
       }

       .Roger-form{
              margin: 10px;
              height: 45px;
       }

       .Roger-Form{
              margin: 11px -1px;
              height: 44px;
              margin-top: 33px;
       }

       .textarea-r{
              height: 95px;
       }

       .text-form-r{
              margin-left: 13px;
       }

       .btn-r{
              margin-left: 13px;
       }
</style>





<!-- 
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" /> -->

<?php

class Resena {
    public $usuario;
    public $comentario;

    public function __construct($usuario, $comentario) {
        $this->usuario = $usuario;
        $this->comentario = $comentario;
    }
}

// Archivo para almacenar las reseñas
$archivoReseñas = 'reseñas.txt';

// Array para almacenar las reseñas
$reseñas = [];

// Función para cargar reseñas desde el archivo
function cargarReseñas() {
    global $archivoReseñas, $reseñas;
    
    if (file_exists($archivoReseñas)) {
        $contenido = file_get_contents($archivoReseñas);
        $reseñas = unserialize($contenido);
    }
}

// Función para guardar reseñas en el archivo
function guardarReseñas() {
    global $archivoReseñas, $reseñas;
    
    $contenido = serialize($reseñas);
    file_put_contents($archivoReseñas, $contenido);
}

// Función para agregar una nueva reseña
function agregarResena($usuario, $comentario) {
    global $reseñas;
    $nuevaResena = new Resena($usuario, $comentario);
    $reseñas[] = $nuevaResena;
    guardarReseñas();
    //echo "Reseña agregada correctamente.\n";
}

function limpiarReseñas() {
       global $reseñas;
       $reseñas = [];
       guardarReseñas();
       echo "Reseñas borradas correctamente.\n";
}

// Función para mostrar todas las reseñas
function mostrarReseñas() {
       global $reseñas;
       foreach ($reseñas as $resena) {
           echo '<div class="card">';
           echo '    <div class="media media-2x1 gd-primary">';
           echo '        <img class="profile-image" src="assets/img/Logo.png">';
           echo '    </div>';
           echo '    <div class="card-body">';
           echo '        <h5 class="card-title">' . $resena->usuario . '</h5>';
           echo '        <p class="card-text">' . $resena->comentario . '</p>';
           echo '    </div>';
           echo '</div>';
       }
   }

// Cargar reseñas existentes al inicio
cargarReseñas();

// Procesar formulario si se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $usuario = $_POST["usuario"];
    $comentario = $_POST["comentario"];

    // Validar y agregar la reseña
    if (!empty($usuario) && !empty($comentario)) {
        agregarResena($usuario, $comentario);
    } else {
        echo "Por favor, complete todos los campos del formulario.\n";
    }
}

?>

       
       <div class="container-full roger">
       <div class="row">
              <div class="col-md-5 col-Roger">
                     <div class="form-content Roger-Form">
                            <div class="text-form-r">
                                   <h2>Ready to Work With Us</h2>
                                   <h4>Leave a Message</h4>
                            </div>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-11">
                                          <div class="form-group">

                                          <label for="usuario">Usuario:</label>
                                          <input type="text"  class="form-control Roger-form" placeholder="Name Users"  name="usuario" required>
                                          

                                               <!-- <input for="usuario"  id="name" name="name" placeholder="Name" type="text">
                                            <span class="alert-error"></span> -->
                                          </div>
                                    </div>
                                   </div>
                                <div class="row">
                                    <div class="col-lg-11">
                                          <div class="form-group">
                                            <input class="form-control Roger-form" id="email" name="email" placeholder="Email*" type="email">
                                            <span class="alert-error"></span>
                                          </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-11">
                                          <div class="form-group comments">
                                             <label for="comentario">Comentario:</label>
                                                 <textarea class="form-control Roger-form textarea-r" placeholder="Give Us a Review" name="comentario" rows="3" required></textarea>
                                             
                                          </div>
                                   </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button class="default-btn btn-r" type="submit" name="submit" id="submit">
                                               Send Now
                                          </button>
                                   </div>
                            </div>
                            <!-- Alert Message -->
                                <div class="col-md-12 alert-notification">
                                       <div id="message" class="alert-msg"></div>
                                   </div>
                            </form>
                     </div>
              </div>


             

              
              <div class="items col-md-6">
                     <?php for ($i=1; $i <= 1 ; $i++) { ?>
                            <?php mostrarReseñas(); ?>
                            
                     <?php } ?>
                     <div class="card">
                            <div class="media media-2x1 gd-primary">
                                   <img class="profile-image"src="assets/img/Logo.png">
                            </div>
                            <div class="card-body">
                                  
                            </div>
                     </div>

                     <!-- <div class="card">
                            <div class="media media-2x1 gd-primary">
                                   <img class="profile-image" src="assets/img/Logo.png">
                            </div>
                            <div class="card-body">
                                   <h5 class="card-title">Malachi Lensing</h5>
                                   <p class="card-text">"<?php echo $textimonials[2]?>"
                            </p>
                     </div>
             
              
                     <div class="card">
                            <div class="media media-2x1 gd-primary">
                                          <img class="profile-image"src="assets/img/Logo.png">
                                   </div>
                                   <div class="card-body">
                                          <h5 class="card-title">Christian Isla</h5>
                                          <p class="card-text">"<?php echo $textimonials[3]?>"</p>
                                   </div>
                            </div>
                            
                     <div class="card">
                            <div class="media media-2x1 gd-primary">
                                   <img class="profile-image" src="assets/img/Logo.png">
                            </div>
                            <div class="card-body">
                                   <h5 class="card-title">Lori Charles</h5>
                                   <p class="card-text">"<?php echo $textimonials[4]?>"</p>
                            </div>
                            </div>
                     </div> -->
              </div>
       </div>
</div>



<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
<script>
       $(document).ready(function () {
              
              $('.items').slick({
                     dots: true,
       infinite: true,
       speed: 800,
       autoplay: true,
       autoplaySpeed: 2000,
       slidesToShow: 2,
       slidesToScroll: 2,
       responsive: [
              {
                     breakpoint: 1024,
                     settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                     }
              },
              {
                     breakpoint: 600,
                     settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                     }
              },
              {
                     breakpoint: 480,
                     settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                     }
              }

       ]
});
});
</script>
