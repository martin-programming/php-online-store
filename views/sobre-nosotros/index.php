<!--SIDEBAR-->
    <section class="sec-sidebar mt-5 mt-lg-0 pt-4 pt-lg-0">
     <div class="container-fluid">
         <div class="row">
             <div class="col-12 col-lg-3 sidebar py-4">
                <?php if(!isset($_SESSION['identity'])) : ?>
                <h2 class="titulo-2 text-center">Entrar a la web</h2>

            <?php if(isset($_SESSION['error_login'])) : ?>
                <p class="login-fallido my-1">Identificación Incorrecta!</p>
              <?php endif; ?>
              <?php Utils::borrarErrores('error_login'); ?>

                <form action="<?=base_url?>usuario/login" method="POST">
                 <div class="form-group">
                  <label for="email"><i class="fas mr-1 fa-at fa-1x"></i>Correo electrónico</label>
                  <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Escribe tu @email...">
                 <small id="emailHelp" class="form-text">Nunca compartiremos con nadie tu dirección de correo electrónico</small>
                </div>

                <div class="form-group">
                 <label for="password"><i class="fas mr-1 fa-lock fa-1x"></i>Contraseña</label>
                 <input type="password" name="password" class="form-control" placeholder="Escribe tu contraseña...">
                </div>

                <button type="submit" class="btn mt-3 mb-2 boton-enviar btn-block">Enviar</button>

                <img src="<?=base_url?>assets/img-logo-toronto.png" class="img-fluid d-block m-auto pt-1" width="170" alt="...">

                <a href="<?=base_url?>usuario/registro" class="btn mt-2 btn-outline-light btn-block">Regístrate aquí</a>
               </form>
               <?php else: ?>
                <h2 class="titulo-bienvenida text-center">Bienvenido</h2>

                <h2 class="titulo-2 text-center"><?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></h2>
                <?php endif; ?>

                <?php if(isset($_SESSION['identity'])) : ?>
                <div class="d-flex flex-column justify-content-center align-items-center"> 
                <p class="text-justify text-white mt-2">Ya eres miembro de nuestra comunidad <br>¿Qué esperas para empezar a comprar?</p>

                <img src="<?=base_url?>assets/img-logo-toronto.png" class="img-fluid py-4" width="210">
                </div> 

                <a href="<?=base_url?>pedido/mis_pedidos" class="btn mt-2 mb-2 btn-outline-light btn-block">Mis pedidos</a>
                <a href="<?=base_url?>usuario/logout" class="btn btn-outline-light btn-block">Cerrar sesión</a>
                <?php endif; ?>

                <?php if(isset($_SESSION['admin'])) : ?>    
                <a href="<?=base_url?>categoria/index" class="btn btn-outline-light btn-block">Gestionar categorias</a>
                <a href="<?=base_url?>producto/gestion" class="btn mt-1 btn-outline-light btn-block">Gestionar productos</a>
                <a href="<?=base_url?>pedido/gestion" class="btn btn-outline-light btn-block">Gestionar pedidos</a>
                <?php endif; ?>

                <a href="<?=base_url?>Contacto/index" class="btn btn-success btn-block mt-4">Contáctanos ahora mismo</a>
             </div>
             <!--FIN SIDEBAR-->

              <!--CONTENIDO PRINCIPAL-->
               <div class="col-12 col-lg-9 caja-principal">
                   <h1 class="text-center mt-4 p-2 mb-4 titulo">
                    <i class="fas ico-sobre-nosotros float-left ml-2 d-block fa-truck"></i>
                    Acerca de nosotros
                    <i class="fas ico-sobre-nosotros float-right mr-2 fa-store-alt"></i>
                  </h1>

                  <section class="ml-4 mr-4 mb-4 bg-light shadow">
                    <div class="row p-2">
                      <div class="col text-justify">
                        <h2 class="text-center titulo-sobre-nosotros">Historia</h2>
                        
                        <p class="p-1 ml-2 mr-2">Somos una afiliación del equipo de Basketball Canadiense <a href="https://www.nba.com/raptors/?splash=off" class="enlace" target="_blank" rel="noopener">Toronto Raptors</a>
                         de la liga de baloncesto profesional 
                          <a href="https://www.nba.com" class="enlace" target="_blank" rel="noopener">NBA</a> y contamos con más de 12 años de experinecia en la venta de productos deportivos, <strong> oficiales y originales.</strong></p>

                          <p class="p-1 ml-2 mr-2">Fuimos fundados en el año 2007 como parte de una iniciativa de  expansión global de los <a href="https://www.nba.com/raptors/?splash=off" class="enlace" target="_blank" rel="noopener">Toronto Raptors</a>. Actualmente operamos en toda Latinoamérica, con sedes en ciudades como <strong>Bogota-Colombia, Buenos aires-Argentina y Ciudad de México-México.</strong></p>  
                          
                          <h2 class="text-center titulo-sobre-nosotros">¿Cómo puedes empezar a comprar?</h2>

                          <p class="p-1 ml-2 mr-2"><strong>Es muy sencillo y muy rápido,</strong> tan solo tienes que <a href="<?=base_url?>usuario/registro" class="enlace">Registrarte</a> para obtener tu cuenta y ya podrás empezar a sumar los productos que más te gusten a tu carrito de compras.<strong> Para comprar nuestros productos solamente necesitas una tarjeta de crédito,</strong>  
                            <a href="#" class="enlace" target="_blank" rel="noopener">VISA,</a> 
                            <a href="#" class="enlace" target="_blank" rel="noopener">American Express</a>
                            o
                            <a href="#" class="enlace" target="_blank" rel="noopener">Discover</a> 
                          </p> 

                          <p class="ml-2 mr-2"><strong>Si nos desea contactar síentase en libertad de hacerlo <a href="<?=base_url?>contacto/index" class="enlace" data-toggle="tooltip" title="Haga click si quiere ir a la sección de contacto">0426-246-37-45</a></strong></p>                      

                      </div>
                    </div>
                  </section>
           
              </div>
             <!--FIN CONTENIDO PRINCIPAL-->

         </div>
     </div>
     </section>
    <!--FIN SIDEBAR/CONTENIDO PRINCIPAL-->