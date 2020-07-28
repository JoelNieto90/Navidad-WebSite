<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Joel Nieto Gomez"> 
        <meta name="description" content="Navidad en Familia">
        <meta name="keywords" content="Nieto, Navidad, Joel Nieto"> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <link href="css/estiloscss.css" type="text/css" rel="stylesheet">

        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <!--Tipografias de Google-->
        <link href="http://fonts.googleapis.com/css?family=Charmonman|Permanent+Marker|Codystar|Monoton|Raleway|Tangerine" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">


        <!--Iconos Material Design-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <title>Posada 2018</title>

        <style type="text/css">
          /*CAMBIA LAS IMAGENES DE FONDO*/
          #fondo1{
              position: fixed;
              width: 100%;
              height: 100vh;
              background: url('Imagenes/Background/backfondo.jpg') no-repeat center center fixed;
              background-size: cover;
              animation: miAnimacion 18s linear 12s infinite;
              -webkit-animation: miAnimacion 18s linear 12s infinite;
              -moz-animation: miAnimacion 18s linear 12s infinite;
          }

          #fondo2{
              position: fixed;
              width: 100%;
              height: 100vh;
              background: url('../Imagenes/Background/Modern.jpg') no-repeat center center fixed;
              background-size: cover;
              animation: miAnimacion 18s linear 6s infinite;
              -webkit-animation: miAnimacion 18s linear 6s infinite;
              -moz-animation: miAnimacion 18s linear 6s infinite;
          }

          #fondo3{
              position: fixed;
              width: 100%;
              height: 100vh;
              background: url('../Imagenes/Background/Christmas.jpg') no-repeat center center fixed;
              background-size: cover;
              animation: miAnimacion 18s linear 0s infinite;
              -webkit-animation: miAnimacion 18s linear 0s infinite;
              -moz-animation: miAnimacion 18s linear 0s infinite;
          }

          /*BARRA DE NAVEGACION*/
          .navbar{
            padding: .6rem 1rem;
            color: white;
            font-size: 1rem;
          }
          .bg-dark {
              background-color: #b01b0f !important;
          }
          .navbar-dark .navbar-nav .nav-link {
            color: white;
            padding-left: .9rem;
            padding-right: 2.5rem;
            font-family: 'Montserrat';
          }


          /*HOME*/
          .felizpino{
            margin-top: 5.5rem;
          }

          .titulo{
            color: black;
            text-align: center;
          }

          h1{
            font-size: 6.8vw;
            font-family: 'Tangerine';
            color:  #b7180c ;
          }

          /*MENSAJE NAVIDEÑO*/
          .mensaje{
            padding: 25px;
          }

          .lead{
            font-size: 1.3rem;
          }

          @media screen and (max-width: 480px) {
            .logomerry {
              display: none;
            }
          }

          /*album fotos*/
          ..mb-4{
              margin-bottom: 1.8rem !important;
              width: 
          }

          .transparent {
            opacity: 0.7;
            padding: 10px;
          }

          .transparent:hover{
            opacity: 1;
          }

          .img-thumbnail {
            padding: .25rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: .25rem;
            max-width: 100%;
            height: auto;
        }

        /*Formulario*/
        .textoasistencia{
                background-color: black;
            }
            
            input[type=submit]{
                color: #3cadbd;
                padding: 15px 20px;
                border-radius: 25px;
                font-family: sans-serif;
                font-size: 20px;
            }
            
            /*Propieddes del formulario*/
            input[type=text]{
                width: 90%;
                padding: 8px 15px;
                color: red;
                margin: 6px 0;
                box-sizing: border box;
            }
          
            
            #nombrebus {
                width: 150px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                background-color: white;
                background-position: 10px 10px;
                background-repeat: no-repeat;
                padding: 12px 20px 12px 40px;
                -webkit-transition: width 0.4s ease-in-out;
                transition: width 0.4s ease-in-out;
                color: black;
            }
            
            #nombrebus:hover {
                width: 65%;
            }
            
            label{
                font-family: Tangerine;
                font-size: 30px;
            }


        /*Ubicación*/
        .evento{
          background-color: #836107;
          color: white;
        }

        .tituloubicacion{
          font-weight: bold;
          font-family: Codystar;
          vertical-align: center;
        }

        .textoubicacion{
          font-family: Montserrat;
          font-size: 1.1rem;
          vertical-align: center;
        }

        .map-responsive{
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
        }
        .map-responsive iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
            border: 4px solid  #830772;
        }

        .footer {
            background-attachment: fixed;
        }

        .footer {
            padding: 6.25rem 0 2rem;
            background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.65)), to(rgba(0, 0, 0, 0.85))), url('../BOOTSTRAP/Imagenes/Background/contactofondo.jpg');
            background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.85)), url('../BOOTSTRAP/Imagenes/Background/contactofondo.jpg');
                background-position-x: 0%, 0%;
                background-position-y: 0%, 0%;
                background-attachment: scroll, scroll;
                background-size: auto auto, auto auto;
            background-size: cover;
            background-position: center;
            background-attachment: scroll;
        }

        .h5 {
          font-size: 2.90625rem;
          font-weight: 900;
          line-height: 1.2;
        }

        .footer .footer-social {
          padding: 6.25rem 0;
        }

        .px-3 {
          padding-left: 3rem !important;
        }

        #seccion2{
          padding-top: 30px;
        }

        #seccion3{
          padding-top: 30px;
        }
        </style>
    </head>

    <body data-spy="scroll">

      <!--BARRA DE NAVEGACIÓN-->
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#opciones">
              <span class="navbar-toggler-icon"></span>
          </button>

          <!-- logo -->
            <a class="navbar-brand" href="#">
              <img src="Imagenes/Background/pino.png" width="42" height="42" alt="">
            </a>

            <!--Enlaces-->
            <div class="collapse navbar-collapse" id="opciones">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="Bootstrapindex.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#seccion2">Mensaje</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#seccion3">Ubicación</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#seccion4">Organización</a>
                </li>  
                <li class="nav-item">
                  <a class="nav-link" href="Formulario.php">Registro</a>
                </li>  
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Iniciar Sesión</a>        
                      <div class="dropdown-menu text-center">
                          <form class="pr-4 pl-4">
                              <div class="form-group"> 
                                <label for="nombre">Usuario:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                              </div> 
                              <div class="form-group"> 
                                <label for="clave">Password:</label>
                                <input type="password" class="form-control" id="clave" name="clave" required>
                              </div> 
                              <button type="submit" class="btn btn-outline-info">Enviar</button>       
                          </form>
                      </div>
                    </div>  
                </li>
              </ul>
            </div>
      </nav>


      <!--Contenido-->
      <div class="container-fluid">

        <!--Home-->
        <div id="seccion1" class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 felizpino titulo">
            <h1>Posada Navideña 2018</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <img src="Imagenes/Background/merryvenados.jpg" class="img-fluid" alt="Responsive image" width="100%">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
               <!-------------------------------
                Registrar Participacion
                -------------------------------->
                <form action="Guardar.php" method='POST'>
                    <label>Nombre: </label> <input id="nombrebus" type="text" name="Nombre" pattern="([A-ZÑÁÉÍÓÚa-zñáéíóú]{1,}\s?){1,2}" placeholder="Nombre" required><br>

                    <label>Apellidos: </label> <input id="nombrebus" type="text" name="Apellidos" pattern="^[A-ZÑÁÉÍÓÚa-zñáéíóú]{1,}\s?[A-ZÑÁÉÍÓÚa-zñáéíóú]{1,}$" placeholder="Apellidos" required><br>
                    
                    <label>Edad: </label> <input id="nombrebus"  type="text" pattern="^[0-9][0-9]?[0-9]?$" placeholder="Edad" name="Edad" required><br>

                    <label>Dirección: </label> <input id="nombrebus"  type="text" pattern="^[A-ZÑÁÉÍÓÚa-zñáéíóú0-9.,# ]{1,}?$" placeholder="Direccion" name="Dirección" required><br>

                    <label>Telefono: </label> <input id="nombrebus"  type="text" pattern="^([(0-9]{2,2}[-. ]?)([(0-9]{2,2}[-. ]?)([0-9]{2,2}[-. ]?)([0-9]{2,2}[-. ]?)([(0-9]{2,2}[-. ]?)$" placeholder="Telefono" name="Telefono" required><br>
                    
                    <label>Sexo: </label> <input id="nombrebus"  type="text" name="Sexo" pattern="^[F|M]$" placeholder="Sexo (F o M)" required><br>

                    <label>Usuario: </label> <input id="nombrebus"  type="text" pattern="^[a-zA-Z]{4,10}[\d]+[\w]{1,8}$" placeholder="Usuario" name="Usuario" required><br>

                    <label>Password: </label> <input id="nombrebus"  type="pass" pattern="^[a-zA-Z0-9!.*#/\_-]{8,15}$" placeholder="Password" name="Password" required><br>

                    <input type="submit" name="btnGrabar" class="btn btn-outline-info" value="Guardar Usuario">
                </form>
                </section>
          </div>
        </div>


        <!--Ubicación-->
        <div id="seccion3" class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <h1>Ubicación</h1>
          </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 evento text-center">
              <img src="Imagenes/Background/reloj.png" width="30%"><br>
              <p class="lead text-center tituloubicacion" >
                 Cuando
              </p>
              <p class="lead text-center textoubicacion">
                 Sabado, 22 Diciembre 2018.
              </p>
            </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 evento text-center">
                <img src="Imagenes/Background/ubicacionlogo.png" width="30%"><br>
                <p class="lead text-center tituloubicacion">
                   Donde
                </p>
                <p class="lead text-center textoubicacion">
                 5 de Mayo, Col. Zaragoza, Nicolas Romero.
              </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="map-responsive">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15032.132477531952!2d-99.32293227827019!3d19.62588178662556!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2199f8e41651f%3A0x1c08835c12a7e610!2s5+de+Mayo+100%2C+Zaragoza%2C+54424+Villa+Nicol%C3%A1s+Romero%2C+M%C3%A9x.!5e0!3m2!1ses!2smx!4v1545375365445" width="500" height="350" frameborder="0" style="border:3" allowfullscreen></iframe>
              </div>
            </div>
        </div>

        <!--Video-->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <h1>Video</h1>
          </div>
        </div>

         <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-0">
            <img src="Imagenes/Background/pino.png" width="100%" >
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <iframe width="100%" height="100%" 
                    src="https://www.youtube.com/embed/gY4zu-kzRtE" picture-in-picture" frameborder="0" allowfullscreen ">
                </iframe>
          </div>
        </div>


        <!--Contacto-->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <h1>Contacto</h1>
          </div>
        </div>

      </div> <!--Fin Container-->

      <!--Footer-->
      <footer class="footer text-center text-white-50">
          <div class="row">

            <div class="col-lg-4 mb-5 mb-lg-0">
              <h5 class="text-uppercase">
                <i class="material-icons">
                  phone_iphone
                </i>
                Telefono
              </h5>
              <a class="text-white-50" href="">55-1660-0536</a>
            </div>

            <div class="col-lg-4 mb-5 mb-lg-0">
              <h5 class="text-uppercase">
                <i class="material-icons">
                  place
                </i>
                Visita
              </h5>
              <a class="text-white-50" href="">5 de Mayo, No. 100<br>Nicolas Romero, Méx.</a>
            </div>

            <div class="col-lg-4 mb-5 mb-lg-0">
              <h5 class="text-uppercase">
                <i class="material-icons">
                  email
                </i>
                Email
              </h5>
              <a class="text-white-50" href="">joenieto90@hotmail.com<br>luigiangel10@hotmail.com</a>
            </div>
        </div>

        <div class="footer-social">
          <a class="px-3 text-white-50" href="">
            <span style="font-size: 3em; color: gray;">
              <i class="fab fa-facebook-square"></i>
            </span>
          </a>
          <a class="px-3 text-white-50" href="">
            <span style="font-size: 3em; color: gray;">
              <i class="fab fa-whatsapp"></i>
            </span>
          </a>
          <a class="px-3 text-white-50" href="">
            <span style="font-size: 3em; color: gray;">
              <i class="fab fa-youtube"></i>
            </span>
          </a>
        </div>

        <div class="footer-copyright">© 2018  Joel Nieto Gómez</div>

          
      </footer>


       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
