<!--==============Content Area=================-->

<div class="container"> 
  
  <!--============== Features Layout ==============-->
  
  <div class="row FeatLayout">
  <h1>Conheça todos os docentes</h1>
 
    <div class="col-md-3"> 
      <dl>
        <h3 class="lead">Geral</h3>
        <dt></dt>
        <dd style="color:gray"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <a href="index.php?pag=suporte&m=boas" style="color:#228B22"><b>Guia inicial, evitando conflitos</b></a></dd>
        <dd style="color:gray"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <a href="index.php?pag=suporte&m=01" style="color:#228B22">Mudar idioma</a></dd>
        <dd style="color:gray"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <a href="index.php?pag=suporte&m=02" style="color:#228B22">Arquivos online/offine</a></dd>
        <dd style="color:gray"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <a href="index.php?pag=suporte&m=03" style="color:#228B22">Criando links públicos</a></dd>
        <dd style="color:gray"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <a href="index.php?pag=suporte&m=04" style="color:#228B22">Conflito de arquivos</a></dd>
      </dl>
    </div>
    <div class="col-md-3">
      <dl>
        <h3 class="lead">Aplicativo Desktop</h3>
        <dt></dt>
        <dd style="color:gray"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <a href="index.php?pag=suporte&m=05" style="color:#228B22">Acessar pastas/arquivos</a></dd>
        <dd style="color:gray"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <a href="index.php?pag=suporte&m=06" style="color:#228B22">Detalhes cliente desktop</a></dd>
        <dd style="color:gray"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <a href="index.php?pag=suporte&m=07" style="color:#228B22">Download e sincronização</a></dd>
        <dd style="color:gray"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <a href="index.php?pag=suporte&m=08" style="color:#228B22">Configuração de Cache</a></dd>
      </dl>
    </div>
    <div class="col-md-3">
      <dl>
        <h3 class="lead">Aplicativo Web</h3>
        <dt></dt>
        <dd style="color:gray"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <a href="index.php?pag=suporte&m=09" style="color:#228B22">Histórico, versões e deletados</a></dd>
        <dd style="color:gray"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <a href="index.php?pag=suporte&m=10" style="color:#228B22">Compartilhando pastas/arquivos</a></dd>
        <dd style="color:gray"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <a href="index.php?pag=suporte&m=11" style="color:#228B22">Como carregar arquivos</a></dd>
        <dd style="color:gray"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <a href="index.php?pag=suporte&m=12" style="color:#228B22">Menu lateral e principal</a></dd>
      </dl>
    </div>
    <div class="col-md-3">
      <dl>
        <h3 class="lead">Empresa</h3>
        <dt></dt>
        <dd style="color:gray"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <a href="#" style="color:#228B22">Configurações da empresa</a></dd>
        <dd style="color:gray"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <a href="#" style="color:#228B22">Criando usuários</a></dd>
        <dd style="color:gray"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <a href="#" style="color:#228B22">Criando shares</a></dd>
        <dd style="color:gray"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <a href="#" style="color:#228B22">Adionando shares para usuários</a></dd>
        <dd style="color:gray"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <a href="#" style="color:#228B22">Administração da empresa</a></dd>
      </dl>
    </div>
  </div>
  
  <!--============== Other Features ==============-->
  
  <div class="row PageHead">
    <hr>
    <?php
      if ($_GET["pag"]=='suporte' && $_GET["m"]=='boas') {
        include"pags/sup/boas.php";
      } 
      if ($_GET["pag"]=='suporte' && $_GET["m"]=='01') {
        include"pags/sup/01.php";
      }
      if ($_GET["pag"]=='suporte' && $_GET["m"]=='02') {
        include"pags/sup/02.php";
      }
      if ($_GET["pag"]=='suporte' && $_GET["m"]=='03') {
        include"pags/sup/03.php";
      }
      if ($_GET["pag"]=='suporte' && $_GET["m"]=='04') {
        include"pags/sup/04.php";
      }
      if ($_GET["pag"]=='suporte' && $_GET["m"]=='05') {
        include"pags/sup/05.php";
      }
      if ($_GET["pag"]=='suporte' && $_GET["m"]=='06') {
        include"pags/sup/06.php";
      }
      if ($_GET["pag"]=='suporte' && $_GET["m"]=='07') {
        include"pags/sup/07.php";
      }
      if ($_GET["pag"]=='suporte' && $_GET["m"]=='08') {
        include"pags/sup/08.php";
      }
      if ($_GET["pag"]=='suporte' && $_GET["m"]=='09') {
        include"pags/sup/09.php";
      }
      if ($_GET["pag"]=='suporte' && $_GET["m"]=='10') {
        include"pags/sup/10.php";
      }
      if ($_GET["pag"]=='suporte' && $_GET["m"]=='11') {
        include"pags/sup/11.php";
      }
      if ($_GET["pag"]=='suporte' && $_GET["m"]=='12') {
        include"pags/sup/12.php";
      }
     ?>
  </div>
</div>
<!--Container Closed--> 