<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bienestar Social</title>

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="css/nivo-lightbox.css" rel="stylesheet" />
  <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
  <link href="color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

  <section id="intro" class="home-slide text-light">

    <!-- Carousel -->
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
          <div class="item active">
            <img src="img/4.jpg" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                              <span>Bienestar social</span>
                            </h2>
                            <br>
                            <h3>
                              <span>Verifique si se encuantra obserbado , para la compra de ficha</span>
                            </h3>
                            <br>
                            <div class="">
                                 <a class="btn btn-theme btn-sm btn-min-block" href="#publicar" data-toggle="modal">Publicar</a><a class="btn btn-theme btn-sm btn-min-block" href="#works">Verificar</a></div>
                        </div>
                    </div><!-- /header-text -->
          </div>
          <div class="item">
            <img src="img/4.jpg" alt="Second slide">
            <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Bienestar social</span>
                            </h2>
                            <br>
                            <h3>
                              <span>Verifique si se encuantra obserbado , para la compra de ficha</span>
                            </h3>
                            <br>
                            <div class="">
                                 <a class="btn btn-theme btn-sm btn-min-block" href="#publicar" data-toggle="modal">Publicar</a><a class="btn btn-theme btn-sm btn-min-block" href="#works">Verificar</a></div>
                        </div>
                    </div><!-- /header-text -->
          </div>
          <div class="item">
            <img src="img/4.jpg" alt="Third slide">
            <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Bienestar social</span>
                            </h2>
                            <br>
                            <h3>
                              <span>Verifique si se encuantra obserbado , para la compra de ficha</span>
                            </h3>
                            <br>
                            <div class="">
                                 <a class="btn btn-theme btn-sm btn-min-block" href="#publicar" data-toggle="modal">Publicar</a><a class="btn btn-theme btn-sm btn-min-block" href="#works">Verificar</a></div>
                        </div>
                    </div><!-- /header-text -->
          </div>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div><!-- /carousel -->

  </section>
  <!-- /Section: intro -->





















    <!-- Navigation -->
    <div id="navigation">
        <nav class="navbar navbar-custom" role="navigation">
                              <div class="container">
                                    <div class="row">
                                          <div class="col-md-2">
                                                   <div class="site-logo">
                                                            <a href="index.html" class="brand">Bienestar social</a>
                                                    </div>
                                          </div>


                                          <div class="col-md-10">

                                                      <!-- Brand and toggle get grouped for better mobile display -->
                                          <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                                <i class="fa fa-bars"></i>
                                                </button>
                                          </div>
                                                      <!-- Collect the nav links, forms, and other content for toggling -->
                                                      <div class="collapse navbar-collapse" id="menu">
                                                            <ul class="nav navbar-nav navbar-right">
                                                                  <li class="active"><a href="#intro">Home</a></li>
                                                                  <li><a href="#about">Mision Vision</a></li>
                                   <li><a href="#publicar" data-toggle="modal">Publicar</a></li>
                                                                  <li><a href="#works">Verificar</a></li>

                                                                  <li><a href="#contact">Contactos</a></li>
                                                            </ul>
                                                      </div>
                                                      <!-- /.Navbar-collapse -->

                                          </div>
                                    </div>
                              </div>
                              <!-- /.container -->
                        </nav>
    </div>
    <!-- /Navigation -->







  <div class="modal fade" id="publicar" >
   <div class="modal-dialog" >
    <div class="modal-content" style="z-index: 10000;">
      <div class="modal-header">
        <button type="button" data-dismiss="modal" class="close" aria-hidden="true">&times;</button><br>
      </div>

      <div class="modal-body">

      <h2 class="h-bold">Login y password</h2>
          <div class="divider-header"></div>
        <form action="login" method="post" id="contact-form" class="wow bounceInUp" data-wow-offset="10" data-wow-delay="0.2s" >
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="row marginbot-20">
              
              <div class="col-md-12">
                <input type="text" class="form-control input-lg" name="username" placeholder="Enter email" required="required" />
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                    <input type="password" class="form-control input-lg" name="password" placeholder="Subject" required="required" name="password" />
                </div>
                
                <button type="submit" class="btn btn-skin btn-lg btn-block" id="btnContactUs">
                  Ingresar</button>
              </div>
            </div>
            </form>
      </div>
    </div>
    </div>
  </div>












  <!-- Section: about -->
    <section id="about" class="home-section color-dark bg-white">
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
          <div class="section-heading text-center">
          <h2 class="h-bold">Mision</h2>
          <div class="divider-header"></div>
          <p>Obtener el desarrollo personal social y material de la comunidad Universitaria que integra la Universidad Nacional “Siglo XX”.</p>
          </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.8s">
          <div class="section-heading text-center">
          <h2 class="h-bold">Vision</h2>
          <div class="divider-header"></div>
          <p>Brindar a la comunidad universitaria un conjunto de servicios que complementan la formación académica.</p>
          </div>
          </div>
        </div>
      </div>

    </div>
<div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.8s">
    <div class="container">


        <div class="row">

      <div class="col-md-6">

          
          
          <img src="img/4.jpg" alt="" class="img-responsive" />
           </div>
            <div class="col-md-6">
            <h2 class="h-bold">Objetivo de la institucion</h2>
            <p>Administrar en forma eficiente y adecuada la elaboración y manejo de la información.  </p>
            </div>
        </div>
    </div>
</div>


  </section>
  <!-- /Section: about -->


  


  <!-- Section: works -->
    <section id="works" class="home-section color-dark text-center bg-white">
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
          <div class="section-heading text-center">
          <h2 class="h-bold">Verificacion</h2>
          <div class="divider-header"></div>
          <p>Lista de publicaciones de los comensales observados</p>
          </div>
          </div>
        </div>
      </div>

    </div>


    <div class="container">
      <div class="row">
                
<div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">


                @foreach($publicacion as $publicar)

                              <div class="panel panel-success">
                                <div class="panel-heading ">fecha de publicacion : {{ $publicar->fechapublicacion }}</div>
                                <div class="panel-body">
                                  <div class="alert alert-danger alert-dismissible">
                                    <h5>Descripcion</h5>
                                    {{ $publicar->descripcion }}
                                  </div>
                                </div>
                                <div class="panel-footer">
                                  <a href="<?= $rutaarchivos.$publicar->ruta; ?>"  target="_blank" class="btn btn-primary btn-xs" >Ver</a>     <a href="descargar_publicacion/<?=  $publicar->id;   ?>" class="btn btn-success btn-xs">Descargar</a>
                                </div>
                              </div>

                 @endforeach


        </div>
                      
                    </div>
            </div>

  </section>
  <!-- /Section: works -->

  <!-- Section: contact -->
    <section id="contact" class="home-section nopadd-bot color-dark bg-gray text-center">
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
          <div class="section-heading text-center">
          <h2 class="h-bold">Contactos y ubicacion</h2>
          <div class="divider-header"></div>
          <p>Se puede observar en el mapa la ubicacion de la Direccion de BienestarSocial y Comedor Universitario</p>
          </div>
          </div>
        </div>
      </div>

    </div>


<div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
    <div class="container">
    <div class="panel panel-success">
      <div class="panel-body">
        <div  >
        <div class="row">
        <div class="col-sm-6">
         <div class="panel panel-info">
           <div class="panel-heading">
             <h6>Direccion Bienestar Social</h6>
           </div>
           <div class="panel-body">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d946.3383873016986!2d-66.5858966684272!3d-18.422249870609683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93fcdfd89ce0d41f%3A0xa0b87ccc25096dba!2sParaninfo+Universidad+Siglo+XX!5e0!3m2!1ses!2sbo!4v1514679566463" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
           </div>
         </div>
        </div>
        <div class="col-sm-6">
         <div class="panel panel-info">
           <div class="panel-heading">
             <h6>Comedor Universitario</h6>
           </div>
           <div class="panel-body">
             <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d946.3311628895233!2d-66.58772326342189!3d-18.423562995261552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sbo!4v1514680887000" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
           </div>
         </div>
        </div>
          </div>   
        </div>
      </div>
      </div>
    </div>
</div>
      


    </div>
  </section>
  <!-- /Section: contact -->


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">

          <div class="text-center">
            <a href="#intro" class="totop"><i class="fa fa-angle-up fa-3x"></i></a>

            <p>Direccion Bienestar social: Paraninfo Universitario Avenida Campero<br />
               Comedor universitario: Avenida Ballivian s/n</p>

                        <!--
                            All links in the footer should remain intact.
                            Licenseing information is available at: http://bootstraptaste.com/license/
                            You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Shuffle
                        -->
          </div>
        </div>
      </div>
    </div>
  </footer>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/nivo-lightbox.min.js"></script>

    <script src="js/custom.js"></script>






</body>

</html>
