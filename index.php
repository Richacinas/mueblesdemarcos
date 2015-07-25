<?php 
define('BASE_URL', 'http://localhost/mueblesdemarcos/');


$target = $_REQUEST['q'];
$target = str_replace('/','',$target);

$string = file_get_contents("carousel.json");
$carousel = json_decode($string, true);

?>


<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="es-es"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7 oldie" lang="es-es"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 oldie" lang="es-es"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es-es"> <!--<![endif]-->
<head>
  <!--<base href="./">-->
  <!--[if IE]><script type="text/javascript">
        // Fix for IE ignoring relative base tags.
        // See http://stackoverflow.com/questions/3926197/html-base-tag-and-local-folder-path-with-internet-explorer
        (function() {
            var baseTag = document.getElementsByTagName('base')[0];
            baseTag.href = baseTag.href;
        })();
    </script><![endif]-->
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta http-equiv="Content-Language" content="es-es">
  <link rel="canonical" href="http://mueblesdemarcos.es/"/>
  
    <!-- SEO -->
    <title>Muebles de Marcos - Muebles a medida económicos</title>
    <meta name="description" content="Carpintero con 20 años de experiencia realiza muebles a medida en la zona sureste de Madrid a un precio económico, se realizan presupuestos sin compromiso y se garantiza un resultado muy profesional.">
  <meta name="Keywords" content="muebles, medida, económico, madrid, arganda, presupuesto">
  <meta name="author" content="mueblesdemarcos">

  <!-- viewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo BASE_URL;?>css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?php echo BASE_URL;?>css/styles.css"/>
    <link rel="stylesheet" href="<?php echo BASE_URL;?>css/responsiveslides.css"/>

</head>

<body>
  <div class="container-fluid">
    <header>
      <div id="specialHeader" class="row">
       <input id="cab_especial_button" type="checkbox" name="cab_especial_button">
       <label for="cab_especial_button"><span>Desplegable Muebles De Marcos</span></label>
       <div class="wrapper header">
        <!--Cabecera.INICIO-->
        <div class="container cab_especial emisiones">
          <div class="cab_box c100">
            <a class="falseH1" href="<?php echo BASE_URL;?>" title="Muebles De Marcos">
              <span>Muebles de Marcos</span>
            </a>
            <ul class="nav principal">
              <li class="l1">
                <a href="<?php echo BASE_URL;?>quienes-somos/" title="Quienes somos">
                  Quienes somos
                </a>
              </li>
              <li class="l2">
                  <a href="<?php echo BASE_URL;?>salon/" title="Salón">Salón</a>
              </li>
              <li class="l3">
                <a href="<?php echo BASE_URL;?>dormitorios/" title="Dormitorios">Dormitorios</a>
              </li>
              <li class="l4">
                <a href="<?php echo BASE_URL;?>banos/" title="Baños">Baños</a>
              </li>
              <li class="l5">
                <a href="<?php echo BASE_URL;?>cocinas/" title="Cocinas">Cocinas</a>
              </li>
              <li class="l6">
                <a href="<?php echo BASE_URL;?>buhardillas/" title="Buhardillas">Buhardillas</a>
              </li>
              <li class="l7">
                <a href="<?php echo BASE_URL;?>estudio/" title="Estudio">Estudio</a>
              </li>
              <li class="l8">
                <a href="<?php echo BASE_URL;?>cubrerradiadores/" title="Cubrerradiadores">Cubrerradiadores</a>
              </li>
              <li class="l9">
                <a href="<?php echo BASE_URL;?>otros-trabajos/" title="Otros Trabajos">Otros Trabajos</a>
              </li>
              <li class="l10">
                <a href="<?php echo BASE_URL;?>ubicación/" title="Ubicación">Ubicación</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      </div>
    </header>
    <main>
      <div class="wrapper">
        <div id="mainContent">
          <?php
          if (array_key_exists( $target , $carousel )) {
              if ($target != 'quienes-somos') { ?>
                  <ul class="rslides">
                  <?php
                  foreach ($carousel[$target] as $key => $element) {
                        echo '<li><img src="'.BASE_URL.'media/images/'.$element['src'].'" alt="'.$element['alt'].'"></li>';
                    }
                  ?>
                  </ul>
            <?php } else { ?>
                  <div class="paragraph">
                      <?php echo $carousel[$target];?>
                  </div>
            <?php }
            }
            ?>
        </div>

        <div id="sideBar">
          
          <div id="sticker">
            <div class="contact-form">
                  <form id="contact" action="/mail.php" method="post">
                                    <input name="form_name" id="form_name" title="Nombre" class="input" type="text" placeholder="Tu nombre" required="" style="color: rgb(161, 161, 161); font-style: italic;" value=""/>
                                    <input name="form_email" id="form_email" title="Email" class="input" type="email" placeholder="Tu email" required="" style="color: rgb(161, 161, 161); font-style: italic;"/>
                                    <textarea name="form_message" id="form_message" title="Mensaje" placeholder="Escribe aquí tu consulta, estaré encantado de contestar lo antes posible!" required="" style="color: rgb(161, 161, 161); font-style: italic;"></textarea>
                                    <input type="submit" value="Enviar" name="submit" class="button"/>
                                    <label class="spam-filter">
                                      <input name="form_spam" type="checkbox" id="spam-check" value="1"/> Debes marcar este checkbox
                                    </label>
                                    <div id="response"></div>
                  </form>
              </div>               
          </div>
        </div>

        <div class="clear"></div>
      </div>
    </main>
    <footer>
      <div class="contacto wrapper">
        <p>Miguel de Marcos <br />
        Vereda del Guijar, 43. <span class="line-breaker">Arganda del Rey, Madrid.<span></p>
        <span class="tlf">
          <div class="escritorio-tel"><i class="fa fa-phone-square"></i>Teléfono: 91 871 21 01 / 622 20 79 89</div>
          <div class="movil-tel">
            <!--a href="tel:+34918712101">91 871 21 01</a-->
            <a href="tel:+34622207989">622 20 79 89</a>
          </div>
        </span>
      </div>
    </footer>
</div>
    <!-- jQuery library (served from Google) -->
    <script type="text/javascript" src="<?php echo BASE_URL;?>scripts/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>scripts/responsiveslides.min.js"></script>
    <script>
      $(function() {
        $(".rslides").responsiveSlides({
          auto: true,             // Boolean: Animate automatically, true or false
          speed: 500,            // Integer: Speed of the transition, in milliseconds
          timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
          nav: true,             // Boolean: Show navigation, true or false
          random: true,          // Boolean: Randomize the order of the slides, true or false
          pause: false,           // Boolean: Pause on hover, true or false
          pauseControls: true,    // Boolean: Pause when hovering controls, true or false
          prevText: "Previous",   // String: Text for the "previous" button
          nextText: "Next",       // String: Text for the "next" button
          maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
        });
      });
    </script>
    <!--script type="text/javascript" src="http://html5form.googlecode.com/svn/trunk/jquery.html5form-min.js"></script-->
    <script type="text/javascript" src="<?php echo BASE_URL;?>scripts/app.js"></script>
  
</body>
</html>
