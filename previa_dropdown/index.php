
<?php  include"header.php";?>

<head>
    <!--===================FLEX SLIDER STARTS=======================-->

  <link rel="stylesheet" href="css/flexslider.css" />
  <script src="js/jquery-1.9.0.min.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
    $(window).load(function() {
       $('.flexslider').flexslider({
          animation: "slide",
      useCSS: Modernizr.touch
        });
    });
  </script>

  <!--===================FLEX SLIDER ENDS=======================-->
  </head>
<body>

<?php  include"menu.php";?>

<?php
  if ($_GET["pag"]=='' || $_GET["pag"]=='home') {
    include"pags/home.php";
  }
  if ($_GET["pag"]=='sobre') {
    include"pags/sobre.php";
  }
  if ($_GET["pag"]=='cases') {
    include"pags/cases.php";
  }
  if ($_GET["pag"]=='planos') {
    include"pags/planos.php";
  }
  if ($_GET["pag"]=='docentes') {
    include"pags/docentes.php";
  }
  if ($_GET["pag"]=='eventos') {
    include"pags/eventos.php";
  }
  if ($_GET["pag"]=='envcont') {
    include"pags/envcont.php";
  }
  if ($_GET["pag"]=='infraestrutura') {
    include"pags/infraestrutura.php";
  }
  if ($_GET["pag"]=='posgrad') {
    include"pags/pos_graduacao.php";
  }

  if ($_GET["pag"]=='pesquisa') {
    include"pags/pesquisa.php";
  }
  if ($_GET["pag"]=='parcerias') {
    include"pags/parc.php";
  }

  // Páginas e subpáginas de Extensão
  if($_GET["pag"] == 'extensao') include "pags/extensao.php";

  /*// Páginas e subpáginas de Pesquisa
  if ($_GET["pag"] == 'pesquisa') include"pags/pesquisa/index.php";
  else if ($_GET["pag"] == 'parcerias') include "pags/pesquisa/parcerias.php";


  */
 ?>


<?php  include"footer.php";?>
