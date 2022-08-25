<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Landing Page
    </title>
    <link rel="icon" type="image/svg" href="img/succulent_flowerpot_plant_icon_182749.svg">
    <!--<link rel="stylesheet" type="text/css" href="normalize.css">-->
    <link rel="stylesheet" type="text/css" href="diseño.css">
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg py-3 sticky-top navbar-light bg-white">
        <div class="container">
            
            <a class="navbar-brand" href="#">
                <img class="logo" src="img/logo-dark.svg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contáctanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Reservaciones</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- //NAVBAR -->





    <section>
        <div class="content-banner">

            <div class="banner-text">
                <h1>Consintiendo a tu paladar</h1>


            </div>
            <div class="banner-img">
                <img src="img/logo.jpg">
            </div>

        </div>

        <center><button class="btn btn-primary ms-lg-3">Ver catálogo</button></center>
    </section>


    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300">
	  	<path fill="#ffffff" fill-opacity="1" d="M0,32L34.3,42.7C68.6,53,137,75,206,117.3C274.3,160,343,224,411,224C480,224,549,160,617,160C685.7,160,754,224,823,218.7C891.4,213,960,139,1029,128C1097.1,117,1166,171,1234,202.7C1302.9,235,1371,245,1406,250.7L1440,256L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
	</svg>

    <div class="contents">
        <section id="inicio">
            <h1>Nuestros inicios</h1>
            <div class="div-flex">
                <div class="parts">
                    <div class="content-img">
                        <div class="img"></div>
                    </div>
                </div>
                <div class="parts">
                    <h2>Restaurante</h2>
                    <p>Tuvo inicio en un pequeño comedor hace 10 años, y fue creciendo.</p>
                    <p>Gracias a los nuevos talentos de hoy en dia, pudimos ampliar nuestros productos para agregar deliciosos platillos a nuestro menú. Y unos postres dulces y salados. </p>
                </div>
            </div>
        </section>


        <section id="productos">
            <center>
                <h1>Productos más pedidos</h1>
            </center>
            <div class="div-grid">
                <div class="grid-item">
                    <div class="content-img-pro">
                        <img src="img/caldo.jpg">
                    </div>
                    <h3>Caldo de pollo</h3>
                    <p>Gustos Guatemaltecos</p>

                </div>
                <div class="grid-item">
                    <div class="content-img-pro">
                        <img src="img/gallina.jpg">
                    </div>
                    <h3>Gallina horneada</h3>
                    <p>Para toda ocacisión</p>
                </div>
                <div class="grid-item">
                    <div class="content-img-pro">
                        <img src="img/sushi1.jpg">
                    </div>
                    <h3>Sushi</h3>
                    <p>Orientales</p>
                </div>

            </div>
        </section>
        <section id="servicios">


            <center>
                <h1>Servicios que realizamos</h1>
            </center>
            <div class="div-grid">
                <div class="grid-item">
                    <div class="content-img-pro">
                        <img src="img/reserva.jpg">
                    </div>
                    <h3>Reservaciones</h3>
                    <p>Para algún evento en especial</p>
                </div>
                <div class="grid-item">
                    <div class="content-img-pro">
                        <img src="img/compra.jpg">
                    </div>
                    <h3>Compra en linea</h3>
                    <p>Por nuestro canales de venta digitales, puedes comprar sin salir de casa</p>
                </div>
                <div class="grid-item">
                    <div class="content-img-pro">
                        <img src="img/envio.png">
                    </div>
                    <h3>Delivery</h3>
                    <p>Hasta la puerta de tu casa</p>
                </div>
            </div>
        </section>

</body>

</html>