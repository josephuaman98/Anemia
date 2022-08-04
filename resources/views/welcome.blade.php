<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>PLANTILLA | PS CARAPONGO</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  <div id="preloader"></div>

  <!--==========================
  Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="img/logo.png" alt="ProOnliPc">
        </div>

        <h1>Bienvenidos al P.S V.R Carapongo</h1>
        <h2>Brindamos : <span class="rotating">Atencion que brindamos con calidad</span></h2>
        <div class="actions">
          <a href="#about" class="btn-get-started">Empezar</a>
          <a href="#services" class="btn-services">Nuestros Servicios</a>
          <a href="{{ route('login') }}" class="btn-success">Login</a>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Sección de encabezado
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>
        <!-- Descomenta abajo si prefieres usar una imagen de texto -->
        <!--<h1><a href="#hero">Encabezado 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Inicio</a></li>
          <li><a href="#about">Sobre Nosotros</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#portfolio">Portafolio</a></li>
          <li><a href="#testimonials">Mision-Vision</a></li>
 
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

  <!--==========================
  About Section
  ============================-->
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Sobre Nosotros</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Con una formación sólida en las mejores instituciones  del Perú  y con gran vocación de servicio, nuestros profesionales de la salud están para ayudarlo.</p>
        </div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
      <div class="row">
        <div class="col-md-6 col-md-push-6 about-content">
          <h2 class="about-title">Nuestra Institucion </h2>
          <p class="about-text">
            A unos kilómetros de Lima, en el distrito de Lurigancho-Chosica, exactamente en la Urb. de San Antonio de Carapongo, encontramos al Puesto de Salud  Virgen del Rosario Carapongo,
          </p>
          <p class="about-text">
            contando con recursos humanos responsables, honrados, respetuosos sensibles con vocación de servicio y respeto, con participación de la comunidad y alianzas estratégicas con los diferentes organizaciones e instituciones para mejorar la salud de la población.
          </p>
          <p class="about-text">
            Teniendo como trayectoria ya más de 28 años el Puesto de Salud  Virgen del Rosario Carapongo ha fijado como una de sus principales preocupaciones, la de lograr que la comunidad caraponguilla reciban una muy buena atención
          </p>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Services Section
  ============================-->
  <section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Nuestros Servicios</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Brindamos el mejor servicio de atención especializada</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-desktop"></i></div>
          <h4 class="service-title"><a href="">Medicina General</a></h4>
          <p class="service-description"> La atención médica es imprescindible para la prevención, detección, tratamiento y seguimiento de las enfermedades crónicas estabilizadas, responsabilizándose del paciente en su conjunto</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
          <h4 class="service-title"><a href="">Obstetricia</a></h4>
          <p class="service-description">Con formación especial en la salud de la mujer y el embarazo. las obstetras se especializan tanto en el cuidado de las mujeres durante el embarazo, en la planificacion Familiar</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
          <h4 class="service-title"><a href="">Enfermeria</a></h4>
          <p class="service-description">Evaluar el crecimiento y desarrollo del niño corroborando que se está realizando de manera normal con las diferentes etapas del ciclo vital.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-photo"></i></div>
          <h4 class="service-title"><a href="">Psicología</a></h4>
          <p class="service-description">La terapia psicológica se centra en la evaluación, diagnóstico, tratamiento, prevención de recaídas y seguimiento de los trastornos o problemas psicológicos (depresión, ansiedad, obsesiones, personalidad, problemas de pareja, etc.)</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-road"></i></div>
          <h4 class="service-title"><a href="">Odontología</a></h4>
          <p class="service-description"> Se encarga de la prevención, el diagnóstico y el tratamiento de las enfermedades bucales como son: caries, enfermedades periodontales y maloclusiones y con el objetivo de conservar y/o rehabilitar el sistema estomatognático </p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-shopping-bag"></i></div>
          <h4 class="service-title"><a href="">Laboratorio</a></h4>
          <p class="service-description"> Lugar donde los profesionales y técnicos en análisis clínicos, analizan muestras biológicas humanas que contribuyen al estudio, prevención, diagnóstico y tratamiento de las enfermedades.</p>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Porfolio Section
  ============================-->
  <section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Portafolio</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Los servicios que se atiende en el Puesto de Salud Virgen de Rosario Carapongo</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-1.jpg);" href="">
            <div class="details">
              <h4>Medicina</h4>
              <span>Prevención, detección, tratamiento y seguimiento de las enfermedades</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-2.jpg);" href="">
            <div class="details">
              <h4>Obstetricia</h4>
              <span>Control Gestante, Planificacion Familiar</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-3.jpg);" href="">
            <div class="details">
              <h4>Enfermeria</h4>
              <span>Cred,Inmunizaciones</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-4.jpg);" href="">
            <div class="details">
              <h4>Psicología</h4>
              <span>Salud Mental</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-5.jpg);" href="">
            <div class="details">
              <h4>Odontología</h4>
              <span>Salud Bucal</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-6.jpg);" href="">
            <div class="details">
              <h4>Laboratorio</h4>
              <span>Se obtienen y se analizan diferentes muestras biológicas.</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-7.jpg);" href="">
            <div class="details">
              <h4>Farmacia</h4>
              <span>Adquirir, custodiar y conservar los medicamentos</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-8.jpg);" href="">
            <div class="details">
              <h4>SIS</h4>
              <span>Es un seguro de salud dirigido para todos los peruanos y extranjeros residentes en el Perú</span>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
  Testimonials Section
  ============================-->
  <section id="testimonials">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Metas</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Nuestra Mision y Vision del Puesto de Salud CARAPONGO</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="img/client-1.jpg" alt=""></div>
            <h4>Mision</h4>
            <span>Carapongo</span>
          </div>
        </div>
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> Somos una organizacion que brinda atención integral de salud a la persona familia y comunidad. contamos con recursos humanos responsables, honrados, respetuosos sensibles con vocación de servicio y respeto, con participación de la comunidad y alianzas estratégicas con los diferentes organizaciones e instituciones para mejorar la salud de la población. <small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> Reducir la mortalidad materna y neonatal con énfasis en la población más vulnerable y Disminuir la prevalencia de malnutrición y anemia en niños menores de 5 años en la población en pobreza y extrema pobreza <small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="img/client-2.jpg" alt=""></div>
            <h4>Vision</h4>
            <span>Carapongo</span>
          </div>
        </div>
      </div>

    </div>
  </section>

  
  <!--==========================
  Footer
============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Puesto de Salud Virgen del Rosario Carapongo</strong>. All Rights Reserved
          </div>
          <div class="credits">
        
            Templates by PS Carapongo
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>


</body>

</html>
