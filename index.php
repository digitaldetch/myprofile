<?php
include_once("inc.aplication_top.php");

if(isset($_GET['seccion']) ) {
  
  switch ($_GET['seccion']) {
    case 'nosotros':
        $titulo = $_GET["seccion"] ." | ". NOMBRE_SITIO;
        $plantilla = _templates_ . 'tpl_' . $_GET["seccion"]. '.php';
      break;
    case 'contactanos':
        $titulo = $_GET["seccion"] ." | ". NOMBRE_SITIO;
        $plantilla = _templates_ . 'tpl_' . $_GET["seccion"]. '.php';
      break;
    case 'servicios':
        $titulo = $_GET["seccion"] ." | ". NOMBRE_SITIO;
        $plantilla = _templates_ . 'tpl_' . $_GET["seccion"]. '.php';
      break;
    case 'transformacion-digital':
        $titulo = $_GET["seccion"] ." | ". NOMBRE_SITIO;
        $plantilla = _templates_ . 'tpl_' . $_GET["seccion"]. '.php';
      break;
    case 'transformacion-negocios':
        $titulo = $_GET["seccion"] ." | ". NOMBRE_SITIO;
        $plantilla = _templates_ . 'tpl_' . $_GET["seccion"]. '.php';
      break;
    case 'clientes':
        $titulo = $_GET["seccion"] ." | ". NOMBRE_SITIO;
        $plantilla = _templates_ . 'tpl_' . $_GET["seccion"]. '.php';
      break;
    
    case 'industrias':
        $titulo = $_GET["seccion"] ." | ". NOMBRE_SITIO;
        $plantilla = _templates_ . 'tpl_' . $_GET["seccion"]. '.php';
      break;
    case 'partners':
        $titulo = $_GET["seccion"] ." | ". NOMBRE_SITIO;
        $plantilla = _templates_ . 'tpl_' . $_GET["seccion"]. '.php';
      break;
    
  }
  
}else{
      $titulo = NOMBRE_SITIO;
      $plantilla = _templates_ . "tpl_home.php";
}

include_once(_templates_includes_ . "inc.header.php");
?>
  </head>
    <body class="body-container">
      <header>
  				 <?php include_once(_templates_includes_ . 'inc.top.php');?>
  		</header>
      <main>
    			  <?php include_once($plantilla); ?>
  		</main>
      <footer class="footer__container">
        <?php include(_templates_includes_ . 'inc.bottom.php'); ?>
  		</footer>
    </body>
</html>
