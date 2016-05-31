<!--==============Logo & Menu Bar=================-->
<style type="text/css">
#logo{
  color:#FFFFFF !important;
  font-size: 45px;
}

</style>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="<?php if($_GET["pag"]=='' || $_GET["pag"]=='home'){echo "active";} ?>">
                <a href="index.php?pag=home">Sobre o Curso</a>
            </li>
            <li class="<?php if($_GET["pag"]=='horarios'){echo "active";} ?>">
                <a href="index.php?pag=horarios">Horários 2016</a>
            </li>

            <li class="dropdown <?php if($_GET["pag"]=='documentos'){echo "active";} ?>">
                <a href="index.php?pag=documentos" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Documentos</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Grade Curricular</a></li>
                    <li><a href="#">Editais</a></li>
                    <li><a href="#">TCCs</a></li>
                </ul>
            </li>

            <li class="dropdown <?php if($_GET["pag"]=='tcc'){echo "active";} ?>">
                <a href="index.php?pag=tcc" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Docentes</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Docentes</a></li>
                    <li><a href="#">Colegiado</a></li>
                </ul>
            </li>

            <li class="dropdown <?php if($_GET["pag"]=='publicacoes'){echo "active";} ?>">
                <a href="index.php?pag=publicacoes" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Infraestrutura</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Salas</a></li>
                    <li><a href="#">Laboratórios</a></li>
                    <li><a href="#">Campus</a></li>
                </ul>
            </li>

            <li class="dropdown <?php if($_GET["pag"]=='publicacoes'){echo "active";} ?>">
                <a href="index.php?pag=publicacoes" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Publicações</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Artigos</a></li>
                    <li><a href="#">Apresentações</a></li>
                    <li><a href="#">Periódicos</a></li>
                </ul>
            </li>

            <li class="<?php if($_GET["pag"]=='noticias'){echo "active";} ?>">
                <a href="index.php?pag=noticias">Notícias</a>
            </li>
            <li class="<?php if($_GET["pag"]=='eventos'){echo "active";} ?>">
                <a href="index.php?pag=eventos">Eventos</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
</nav>
