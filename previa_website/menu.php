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
      <a class="navbar-brand" href="index.php"><br> <p id='logo'><b>UFFS</b></p></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="<?php if($_GET["pag"]=='' || $_GET["pag"]=='home'){echo "active";} ?>"><a href="index.php?pag=home">HOME</a></li>
        <li class="<?php if($_GET["pag"]=='sobre'){echo "active";} ?>"><a href="index.php?pag=sobre">GRADUAÇÃO</a></li>
        
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">PÓS-GRADUAÇÃO<b class="caret"></b></a>
          <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
            <li class="<?php if($_GET["pag"]=='strictu'){echo "active";} ?>"><a href="index.php?pag=strictu" tabindex="-1">Strictu Sensu</a></li>
            <li class="<?php if($_GET["pag"]=='lato'){echo "active";} ?>"><a href="index.php?pag=lato" tabindex="-1">Lato Sensu</a></li>
            <li class="<?php if($_GET["pag"]=='disciplinas'){echo "active";} ?>"><a href="index.php?pag=disciplinas" tabindex="-1">Disciplinas</a></li>
            <li class="<?php if($_GET["pag"]=='orientadores'){echo "active";} ?>"><a href="index.php?pag=orientadores" tabindex="-1">Orientadores</a></li>
            <li class="<?php if($_GET["pag"]=='editais'){echo "active";} ?>"><a href="index.php?pag=editais" tabindex="-1">Editais</a></li>
            <li class="<?php if($_GET["pag"]=='bolsas'){echo "active";} ?>"><a href="index.php?pag=bolsas" tabindex="-1">Bolsas</a></li>
            <li class="<?php if($_GET["pag"]=='horarios'){echo "active";} ?>"><a href="index.php?pag=horarios" tabindex="-1">Horários</a></li>
            <!--<li class="divider"></li>
            <li><a tabindex="-1" href="#">Link separador</a></li>-->
          </ul>
        </li>
        
        <li class="<?php if($_GET["pag"]=='suporte'){echo "active";} ?>"><a href="index.php?pag=suporte">DOCENTES</a></li>
        <li class="<?php if($_GET["pag"]=='pesquisa'){echo "active";} ?>"><a href="index.php?pag=pesquisa">PESQUISA</a></li>
        <li class="<?php if($_GET["pag"]=='contato'){echo "active";} ?>"><a href="index.php?pag=contato">EXTENSÃO</a></li>
        <li class="<?php if($_GET["pag"]=='infraestrutura'){echo "active";} ?>"><a href="index.php?pag=infraestrutura">INFRAESTRUTURA</a></li>
        <li class="<?php if($_GET["pag"]=='eventos'){echo "active";} ?>"><a href="index.php?pag=eventos">EVENTOS</a></li>
      </ul>
      </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
    
  </div>
</nav>
