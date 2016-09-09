<?php require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';

    ?>
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="copyright" content="+Acceso"> <!--Nombre de la compañia-->
    <meta name="organization" content="+Acceso" /> <!--Nombre de la Organizacion-->
    <meta name="generator" content="Notepad++"> <!--Cual es la herramienta que se utiliza para editar, crear la pagina web-->
    <meta name="name" content="Index-Home">
    <meta name="description" content="Primera pantalla en cargar al acceso al sitio web, muestra las diferentes opciones de navegacion">
    <meta name="author" content="Guillermo Bernal, Marco Garofalo">
    <!-- http://getbootstrap.com/css/#overview-mobile -->
    <meta name='viewport' content='width=device-width, initial-scale=1, user-scalable=no'>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>+Acceso</title>
    <!-- http://getbootstrap.com/getting-started/ -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/tema.min.css">
    <link rel="stylesheet" href="css/estilos.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" media="screen">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/partes/menu.php'; ?>
    <div class="container-fluid cuerpo">
        <div class="row">
            <div class="col-sm-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="img/deporte.jpg" alt="+Acceso">
                        </div>

                        <div class="item">
                            <img src="img/desarrollo.jpg" alt="+Acceso">
                        </div>

                        <div class="item">
                            <img src="img/anuncios.jpg" alt="+Acceso">
                        </div>

                        <div class="item">
                            <img src="img/transporte.jpg" alt="+Acceso">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
        <h1>Instrucciones de búsqueda</h1>
        <div class="row">
        <div class="col-sm-6">
<<<<<<< HEAD
            <img class="img-responsive" alt="slider" src="img/Accesibilidad_1.gif">
        </div>
            <div class="col-sm-2">
            <img class="instruc" alt="slider" src="img/searchIns.gif">
                <p>Busca el edificio</p>
        </div>
            <div class="col-sm-2">
            <img class="instruc" alt="slider" src="img/build.gif">
                <p>Observa la evaluación del edificio</p>
        </div>
            <div class="col-sm-2">
            <img class="instruc" alt="slider" src="img/comment.gif">
=======
            <img class="img-responsive" src="img/Accesibilidad_1.gif">
        </div>
            <div class="col-sm-2">
            <img class="instruc" src="img/searchIns.gif">
                <p>Busca el edificio</p>
        </div>
            <div class="col-sm-2">
            <img class="instruc" src="img/build.gif">
                <p>Observa la evaluación del edificio</p>
        </div>
            <div class="col-sm-2">
            <img class="instruc" src="img/comment.gif">
>>>>>>> prod
                <p>Comenta y aporta</p>
        </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-md-offset-3">
                <ul class="icon">
                    <li><a href="http://www.consejodiscapacidades.gob.ec/wp-content/uploads/downloads/2014/03/normas_inen_acceso_medio_fisico.pdf">ACCESIBILIDAD DE LAS PERSONAS AL MEDIO FÍSICO SEÑALIZACIÓN.</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">

                <h5>Noticias Conadis</h5>
                <strong>Campaña Solidaria de Recolección de Donaciones para Atención Humanitaria</strong>
                <p>Campaña Solidaria de Recolección de Donaciones para Atención Humanitaria Direcciones MIES 1 Planta Central – Quito Ministerio de...</p>
            </div>
        </div>
    </div>
<footer>
<div class="container">
<img class="imgFooter" src="img/logo.gif" alt="Realizado por la Espol">
<div class="row">
<div class="col-sm-4">ESPOL</div>
  <div class="col-sm-4">PROGRAMACIÓN DE SITIOS WEB</div>
  <div class="col-sm-4">EDCOM</div>
</div>
</div>
</footer>
</body>

</html>
