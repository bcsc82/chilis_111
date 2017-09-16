<!DOCTYPE html>
<html lang="es">

<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="Cargadores solares para dispositivos móviles, no te quedes sin batería.">
    <meta name="keywords" content="cargador,solar,celular,tablet,movil,bateria,viaje,trabajo,deporte,accesorio,portatil,dispositivo,ecologia">

    <title><?php the_title(); ?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css ">

    <link href="https://fonts.googleapis.com/css?family=Arimo|Acme|Architects+Daughter|Limelight|Prosto+One|Permanent+Marker|Vast+Shadow" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/style.css">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <img src="<?php bloginfo("template_directory"); ?>/img/logo1.png" alt="logo solar charger">
                </div>
                <div class="titulo col-md-10 col-sm-9 col-xs-12">
                    <img src="<?php bloginfo("template_directory"); ?>/img/title.png" alt="titulo">
                </div>
            </div>
        </div>
    </header>
    <div class="menu">
        
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                        </div>

                        <div id="navbar" class="navbar-collapse collapse">
                            <div class="container">
                                <?php wp_nav_menu(['menu_class'=>'nav navbar-nav', 'container'=>'', 'depth'=>0]); ?>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    </div>
    <main>
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 -col-xs-12">
                       <div class="boxbanner">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="<?php bloginfo("template_directory"); ?>/img/fondo_d.jpg" alt="fondo1" style="width:100%;">
                                    <div class="carousel-caption">Cargadores solares para dispositivos móviles
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="<?php bloginfo("template_directory"); ?>/img/fondo_b.jpg" alt="fondo2" style="width:100%;">
                                    <div class="carousel-caption">
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="<?php bloginfo("template_directory"); ?>/img/fondo_c.jpg" alt="fondo3" style="width:100%;">
                                    <div class="carousel-caption">
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="<?php bloginfo("template_directory"); ?>/img/fondo_a.jpg" alt="fondo4" style="width:100%;">
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <h2><strong>SOLAR CHARGER</strong></h2>
                        <h3>Cargadores solares para dispositivos móviles</h3>
                        <div>
                        <?php 
                        the_post();
                        the_content();
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <p>@ 2017 Brenda Salas - Todos los derechos reservados</p>
        <p>www.solarcharger.com</p>
        <p>info@solarcharger.com</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>
