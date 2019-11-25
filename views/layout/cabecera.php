<?php
ob_start();
?>

<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://localhost/proyecto-2-poo/css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url?>css/estilos.css">
    <link rel="icon" href="http://localhost/proyecto-2-poo/assets/img-logo-toronto.png">
    <!--fuentes de google-->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Lobster|Roboto+Slab|Alegreya|Prompt|Roboto+Condensed|Open+Sans" rel="stylesheet">
    <!--fin fuentes-->
    <!--iconos-->
    <script defer src="https://use.fontawesome.com/releases/v5.6.3/js/all.js" integrity="sha384-EIHISlAOj4zgYieurP0SdoiBYfGJKkgWedPHH4jCzpCXLmzVsw1ouK59MuUtP4a1" crossorigin="anonymous"></script>
    <!--fin iconos-->
     <!-- SCROOLL REVEAL JS LIBRARY CDN -->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <!--FIN SCROOLL REVEAL JS LIBRARY CDN -->
    <title>Tienda NBA | Toronto Raptors</title>
</head>
<body>


    <!--MENU-->
     <nav class="navbar navbar-expand-lg fixed-top">
     <a class="navbar-brand mr-1" href="http://localhost/proyecto-2-poo/"><i class="ico-menu fas fa-home"></i></a>
     <?php if(isset($_SESSION['identity']) || isset($_SESSION['admin'])) : ?>
     <a class="navbar-brand ml-2" href="<?=base_url?>carrito/index"><i class="ico-menu fas fa-shopping-cart"></i></a>
     <a class="navbar-brand ml-1" href="<?=base_url?>usuario/logout"><i class="fas ico-menu fa-sign-out-alt"></i></a>
   <?php endif; ?>

   <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav m-auto text-center">

       <?php $categorias = Utils::showCategorias(); ?>

       <?php while($cat = $categorias->fetch_object()) : ?>
       <li class="nav-item">
        <a class="nav-link" href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a>
         </li>
        <?php endwhile; ?> 

         <li class="nav-item">
          <a class="nav-link" href="<?=base_url?>SobreNosotros/index">Sobre nosotros</a>
         </li>

         <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
         </li>
         
        </ul>
        <a href="https://www.facebook.com" target="_blank" rel="noopener" class="navbar-brand">
            <i class="ico-menu fab fa-facebook-square"></i>
        </a>
        <a href="https://www.youtube.com" target="_blank" rel="noopener" class="navbar-brand">
            <i class="ico-menu fab fa-youtube"></i>
        </a>
       </div>
      </nav>    
    <!--FIN MENU-->


    <!--SLIDER CABECERA-->
     <header class="mt-5 py-4 cabecera d-none d-md-block">
         <!--slideshow-->
<div class="container-fluid">  
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner"> 
    <!--1 slide-->
    <div class="carousel-item active"  data-interval="3000">
      <div class="row">

   <div class="col-12 col-md-3 d-flex justify-content-center align-items-center">
      <img src="http://localhost/proyecto-2-poo/assets/img-camisa-12-new.png" class="img-fluid d-block my-2 my-md-none" width="135" alt="...">
       <div class="carousel-caption d-none d-md-block">
      <p></p>
     </div>
     </div>

     <div class="col-12 col-md-3 d-flex justify-content-center align-items-center">
      <img src="http://localhost/proyecto-2-poo/assets/img-sweter-new-5.png" class="img-fluid d-block my-2 my-md-none" width="110" alt="...">
       <div class="carousel-caption d-none d-md-block">
      <p></p>
     </div>
     </div>

     <div class="col-12 col-md-3 d-flex justify-content-center align-items-center">
    <img src="http://localhost/proyecto-2-poo/assets/img-camisa-5.png" class="img-fluid d-block my-2 my-md-none" width="141" alt="...">
       <div class="carousel-caption d-none d-md-block">
      <p></p>
     </div>
     </div>

     <div class="col-12 col-md-3 d-flex justify-content-center align-items-center">
      <img src="http://localhost/proyecto-2-poo/assets/img-camisa-13.png" class="img-fluid d-block my-2 my-md-none" width="135" alt="...">
       <div class="carousel-caption d-none d-md-block">
      <p></p>
     </div>
     </div>
     

   </div>
 </div>
 <!--fin 1 slide-->

 <!--1.1 slide-->
 <div class="carousel-item"  data-interval="3000">
      <div class="row">

        <div class="col-12 col-md-3 d-flex justify-content-center align-items-center">
      <img src="http://localhost/proyecto-2-poo/assets/img-sweter-2.png" class="img-fluid d-block my-2 my-md-none" width="135" alt="...">
       <div class="carousel-caption d-none d-md-block">
      <p></p>
     </div>
     </div>
       
        <div class="col-12 col-md-3 d-flex justify-content-center align-items-center">
      <img src="http://localhost/proyecto-2-poo/assets/img-sweter-1.png" class="img-fluid d-block my-2 my-md-none" width="135" alt="...">
       <div class="carousel-caption d-none d-md-block">
      <p></p>
     </div>
     </div>

     <div class="col-12 col-md-3 d-flex justify-content-center align-items-center">
      <img src="http://localhost/proyecto-2-poo/assets/img-accesorio-1.png" class="img-fluid d-block my-2 my-md-none" width="170" alt="...">
       <div class="carousel-caption d-none d-md-block">
      <p></p>
     </div>
     </div>

     <div class="col-12 col-md-3 d-flex justify-content-center align-items-center">
      <img src="http://localhost/proyecto-2-poo/assets/img-sweter-3.png" class="img-fluid d-block my-2 my-md-none" width="135" alt="...">
       <div class="carousel-caption d-none d-md-block">
      <p></p>
     </div>
     </div>

 </div>
</div>


    <!--fin 1.1 slide-->


    <!--1.2 slide-->
 <div class="carousel-item"  data-interval="3000">
      <div class="row">

        <div class="col-12 col-md-3 d-flex justify-content-center align-items-center">
      <img src="http://localhost/proyecto-2-poo/assets/img-camisa-1.png" class="img-fluid d-block my-2 my-md-none" width="135" alt="...">
       <div class="carousel-caption d-none d-md-block">
      <p></p>
     </div>
     </div>
       
        <div class="col-12 col-md-3 d-flex justify-content-center align-items-center">
      <img src="http://localhost/proyecto-2-poo/assets/img-camisa-8.png" class="img-fluid d-block my-2 my-md-none" width="139" alt="...">
       <div class="carousel-caption d-none d-md-block">
      <p></p>
     </div>
     </div>

     <div class="col-12 col-md-3 d-flex justify-content-center align-items-center">
      <img src="http://localhost/proyecto-2-poo/assets/img-camisa-10.png" class="img-fluid d-block my-2 my-md-none" width="163" alt="...">
       <div class="carousel-caption d-none d-md-block">
      <p></p>
     </div>
     </div>

     <div class="col-12 col-md-3 d-flex justify-content-center align-items-center">
      <img src="http://localhost/proyecto-2-poo/assets/img-camisa-9.png" class="img-fluid d-block my-2 my-md-none" width="169" alt="...">
       <div class="carousel-caption d-none d-md-block">
      <p></p>
     </div>
     </div>

 </div>
</div>
<!--fin 1.2 slide-->


    <!--1.3 slide-->
 <div class="carousel-item"  data-interval="3000">
      <div class="row">

        <div class="col-12 col-md-3 d-flex justify-content-center align-items-center">
      <img src="http://localhost/proyecto-2-poo/assets/img-shor-1.png" class="img-fluid d-block my-2 my-md-none" width="145" alt="...">
       <div class="carousel-caption d-none d-md-block">
      <p></p>
     </div>
     </div>
       
        <div class="col-12 col-md-3 d-flex justify-content-center align-items-center">
      <img src="http://localhost/proyecto-2-poo/assets/img-shor-3.png" class="img-fluid d-block my-2 my-md-none" width="145" alt="...">
       <div class="carousel-caption d-none d-md-block">
      <p></p>
     </div>
     </div>

     <div class="col-12 col-md-3 d-flex justify-content-center align-items-center">
      <img src="http://localhost/proyecto-2-poo/assets/img-shor-5.png" class="img-fluid d-block my-2 my-md-none" width="145" alt="...">
       <div class="carousel-caption d-none d-md-block">
      <p></p>
     </div>
     </div>

     <div class="col-12 col-md-3 d-flex justify-content-center align-items-center">
      <img src="http://localhost/proyecto-2-poo/assets/img-shor-6.png" class="img-fluid d-block my-2 my-md-none" width="135" alt="...">
       <div class="carousel-caption d-none d-md-block">
      <p></p>
     </div>
     </div>

 </div>
</div>


    <!--fin 1.3 slide-->

  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
 </header>
<!--FIN SLIDER CABECERA-->