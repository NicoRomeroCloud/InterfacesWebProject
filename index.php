<?php
include 'bddPostulante.php'
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Favicon -->
  <link rel="icon" type="image/png" href="./src/img/Favicon_Image.png" />
  <!--Booststrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- FONT OSWALD -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap');
  </style>

  <!-- Css -->
  <link rel="stylesheet" href="estilos.css">
  <title>Adopción</title>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Match Mascota Ideal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="nosotros/index.html">Sobre nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contacto">Contacto</a>
          </li>
        </ul>

      </div>
    </div>

    </div>
    </div>
  </nav>

  <!-- Carrusel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
        aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
        aria-label="Slide 6"></button>
        
        
      
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./src/img/carrusel2.webp"  class="d-block w-100" alt="..." > 
      </div>
      <div class="carousel-item">
        <img src="./src/img/gato.gif" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./src/img/carrusel4.webp" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./src/img/carrusel2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./src/img/gif.webp" class="d-block w-100" alt="...">
        <!-- <a href="https://lacriaturacreativa.com/2018/08/29/esta-campana-crea-gifs-de-perros-abandonados-para-encontrarles-un-hogar/" class="d-block w-100" alt="..."></a> -->
      </div>
      <div class="carousel-item">
        <img src="./src/img/carrusel.jpg" class="d-block w-100" alt="...">
        <!-- <a href="https://lacriaturacreativa.com/2018/08/29/esta-campana-crea-gifs-de-perros-abandonados-para-encontrarles-un-hogar/" class="d-block w-100" alt="..."></a> -->
      </div>
      
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--Tarjetas-->
  <div class="container mt-2">
    <!--   <div class="card card-block mb-2">
      <h4 class="card-title">Card 1</h4>
      <p class="card-text">Welcom to bootstrap card styles</p>
      <a href="#" class="btn btn-primary">Submit</a>
    </div>   -->
    <div class="row">
      <div class="col-md-4 col-sm-8">
        <div class="card card-block">

          <img src="./src/en_adopcion/mascota3.jpg" class="img-targets">
          <h5 class="card-title mt-3 mb-3">Lolita</h5>
          <p class="card-text">Traviesa, divertida y cariñosa gatita.</p>
          <button type="button" class="css-button-3d--green" data-bs-toggle="modal" data-bs-target="#exampleModal"
            data-bs-whatever="@mdo">Quiero adoptarte! </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formulario De Contacto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body">
                <form method="POST" action="bddPostulante.php">
                  <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre Completo:</label>
                    <input name="nombre" type="text" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="rut" class="form-label">Rut:</label>
                    <input name="rut" type="text" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="correo" class="form-label">Correo:</label>
                    <input name="correo" type="text" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección:</label>
                    <input name="direccion" type="text" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono:</label>
                    <input name="telefono" type="text" class="form-control">
                  </div>
                  <div class="mb-20">
                    <label for="adopcion" class="form-label">¿Por qué adoptar a Lolita?:</label>
                    <input name="adopcion" type="text" class="form-control">
                  </div>
                  
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
                <button type="submit" value="Submit" class="btn btn-primary">Enviar</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
<!-- repeticion -->
      <div class="col-md-4 col-sm-8">
        <div class="card card-block">

          <img src="./src/en_adopcion/mascota1.jpg" class="img-targets">
          <h5 class="card-title  mt-3 mb-3">Ralph</h5>
          <p class="card-text">Juguetón, dormilón y alegre perrito.</p>
          <button type="button" class="css-button-3d--green" data-bs-toggle="modal" data-bs-target="#exampleModal"
            data-bs-whatever="@mdo">Quiero adoptarte! </button>
       
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formulario De Contacto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
        <div class="modal-body">
                <form method="POST" action="bddPostulante.php">
                  <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre Completo:</label>
                    <input name="nombre" type="text" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="rut" class="form-label">Rut:</label>
                    <input name="rut" type="text" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="correo" class="form-label">Correo:</label>
                    <input name="correo" type="text" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección:</label>
                    <input name="direccion" type="text" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono:</label>
                    <input name="telefono" type="text" class="form-control">
                  </div>
                  <div class="mb-20">
                    <label for="adopcion" class="form-label">¿Por qué adoptar a Ralph?:</label>
                    <input name="adopcion" type="text" class="form-control">
                  </div>
                  
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" value="Submit" class="btn btn-primary">Enviar</button>
              </div>
      </div>
      </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-8">
        <div class="card card-block">

          <img src="./src/en_adopcion/mascota2.jpg" class="img-targets">
          <h5 class="card-title  mt-3 mb-3">Joy</h5>
          <p class="card-text">Un poco inquieto y cariñoso perrito.</p>
          <button type="button" class="css-button-3d--green" data-bs-toggle="modal" data-bs-target="#exampleModal"
            data-bs-whatever="@mdo">Quiero adoptarte! </button>
       
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formulario De Contacto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
        <div class="modal-body">
                <form method="POST" action="bddPostulante.php">
                  <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre Completo:</label>
                    <input name="nombre" type="text" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="rut" class="form-label">Rut:</label>
                    <input name="rut" type="text" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="correo" class="form-label">Correo:</label>
                    <input name="correo" type="text" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección:</label>
                    <input name="direccion" type="text" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono:</label>
                    <input name="telefono" type="text" class="form-control">
                  </div>
                  <div class="mb-20">
                    <label for="adopcion" class="form-label">¿Por qué adoptar a Joy?:</label>
                    <input name="adopcion" type="text" class="form-control">
                  </div>
                  
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" value="Submit" class="btn btn-primary">Enviar</button>
              </div>
      </div>
      </form>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-8">
        <div class="card card-block">

          <img src="./src/en_adopcion/mascota3.jpeg" class="img-targets">
          <h5 class="card-title  mt-3 mb-3">Joy</h5>
          <p class="card-text">This is a company that builds websites, web apps and e-commerce solutions.</p>
          <button type="button" class="css-button-3d--green" data-bs-toggle="modal" data-bs-target="#exampleModal"
            data-bs-whatever="@mdo">Quiero adoptarte! </button>
       
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formulario De Contacto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
        <div class="modal-body">
                <form method="POST" action="bddPostulante.php">
                  <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre Completo:</label>
                    <input name="nombre" type="text" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="rut" class="form-label">Rut:</label>
                    <input name="rut" type="text" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="correo" class="form-label">Correo:</label>
                    <input name="correo" type="text" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección:</label>
                    <input name="direccion" type="text" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono:</label>
                    <input name="telefono" type="text" class="form-control">
                  </div>
                  <div class="mb-20">
                    <label for="adopcion" class="form-label">¿Por qué adoptar a Felp?:</label>
                    <input name="adopcion" type="text" class="form-control">
                  </div>
                  
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" value="Submit" class="btn btn-primary">Enviar</button>
              </div>
      </div>
      </form>
            </div>
          </div>
        </div>
      </div>

  </div>

  <!-- Footer -->

  <footer class="footer  bg-light">
    <!-- Map -->
    <div class="footer__map" id="map">
      <iframe class="footer__iframe"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3202.9739485334817!2d-72.07953254917042!3d-36.60293647340246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9668d6273b1ad7ff%3A0xd768b9a8510513f6!2sUniversidad%20del%20B%C3%ADo-B%C3%ADo%20Campus%20Fernando%20May!5e0!3m2!1ses-419!2scl!4v1659917770713!5m2!1ses-419!2scl"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Dirección -->
    <div class="footer__direccion" id="contacto">
      <p>Match Mascota Ideal
      <p>
      <p><i class="fa-solid fa-location-dot"></i> Andrés Bello 720, Chillan, Chillán, Bío Bío</p>
      <p><i class="fa-solid fa-phone"></i> +569 00000000</p>
      <p><i class="fa-solid fa-envelope"></i> contacto@machMascotaIdeal.com</p>

    </div>
    <!-- Social -->
    <div class="footer__social">
      <ul class="footer__ul">
        <p>Redes Sociales</p>
        <li>
          <a href="https://www.instagram.com"><i class="fab fa-instagram"></i> I n s t a g r a m</a>
        </li>
        <li>
          <a href="https://facebook.com"><i class="fab fa-facebook"></i> F a c e b o o k</a>
        </li>
      </ul>
    </div>

  </footer>




  <!-- Scrip Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
</body>

</html>