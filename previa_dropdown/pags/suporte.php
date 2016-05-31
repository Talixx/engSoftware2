<!--==============Content Area=================-->

<div class="container"> 
  
  <!--============== Features Layout ==============-->
  
  <div class="row FeatLayout">
  <h1>Docentes</h1>
  
  <p class="lead">Professores Efetivos</p>
 <h4><div class="list-group">
 <a href="#" class="list-group-item list-group-item-success">Adriano Sanick Padilha (Coordenador de Estágios)</a>
 
 <a href="#" class="list-group-item list-group-item-success">Andressa Seben (Colaboradora)</a>
 
 <a href="#" class="list-group-item list-group-item-success">Braulio Adriano de Mello</a>
 
 <a href="#" class="list-group-item list-group-item-success">Claunir Pavan</a>

 <a href="#" class="list-group-item list-group-item-success">Denio Duarte</a>
 
 <a href="#" class="list-group-item list-group-item-success">Emilio Wuergues (Coordenador Adjunto)</a>
 
 <a href="index.php?pag=suporte&m=07" class="list-group-item list-group-item-success">Graziela Simone Tonin</a>
  <div>
  <div>
  <?php
    if (isset($_GET["pag"])){
      if(isset($_GET["m"])){
        if($_GET["pag"] == 'suporte' && $_GET["m"]=='07') {
          include"pags/sup/07.php";
        }
      }
    }
  ?>
 </div>
<div>
 <a href="#" class="list-group-item list-group-item-success">Guilherme Dal Bianco</a>
 
 <a href="#" class="list-group-item list-group-item-success">José Carlos Bins Filho</a>
 
 <a href="#" class="list-group-item list-group-item-success">Leandro Miranda Zatesko</a>
 
 <a href="#" class="list-group-item list-group-item-success">Marco Aurélio Spohn (Coordenador)</a>

</div>

   

