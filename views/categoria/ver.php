<!--SIDEBAR-->
    <section class="sec-sidebar mt-5 mt-lg-0 pt-4 pt-lg-0">
     <div class="container-fluid">
         <div class="row">
             <div class="col-12 col-lg-3 sidebar py-4 ">
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
                <a href="<?=base_url?>usuario/logout" class="btn mt-2 btn-outline-light btn-block">Cerrar sesión</a>
                <?php endif; ?>

                <?php if(isset($_SESSION['admin'])) : ?>    
                <a href="<?=base_url?>categoria/index" class="btn mt-2 btn-outline-light btn-block">Gestionar categorias</a>
                <a href="<?=base_url?>producto/gestion" class="btn mt-2 btn-outline-light btn-block">Gestionar productos</a>
                <a href="<?=base_url?>pedido/gestion" class="btn mt-2 mb-4 btn-outline-light btn-block">Gestionar pedidos</a>
                <?php endif; ?>

                <a href="<?=base_url?>SobreNosotros/index" class="btn btn-success btn-block mt-5">¿Quieres saber más de nosotros?</a>
                <a href="<?=base_url?>Contacto/index" class="btn btn-success btn-block mt-2">Contáctanos ahora mismo</a>
             </div>
             <!--FIN SIDEBAR-->

              <!--CONTENIDO PRINCIPAL-->
               <div class="col-12 col-lg-9 caja-principal">
                <?php if(isset($categoria)) : ?>
                   <h1 class="text-center mt-4 p-2 mb-4 titulo">   
                    Categoría de <?=$categoria->nombre?>                
                   </h1>

                    <?php if($productos->num_rows == 0) : ?>
                       <h1 class="text-center mt-4 p-2 mb-4 titulo">   
                         No hay productos en la categoria <?=$categoria->nombre?>                 
                        </h1>
                        <?php else: ?>
                             <div class="row mb-3 pt-3">
                          <?php while($product = $productos->fetch_object()) : ?>
                           <div class="col-12 col-lg-4 col-producto my-3 d-flex flex-column justify-content-center align-items-center">
                        <?php if($product->imagen != null): ?>
                           <a href="<?=base_url?>producto/ver&id=<?=$product->id?>">
                             <img src="<?=base_url?>uploads/images/<?=$product->imagen?>" class="img-fluid img-producto" width="135">
                           </a>
                        <?php else: ?>
                          <a href="<?=base_url?>producto/ver&id=<?=$product->id?>">
                             <img src="<?=base_url?>assets/img-camisa-2.png" class="img-fluid img-producto" width="135">
                           </a>
                        <?php endif; ?>
                        <p class="desc-producto my-1"><?= $product->nombre ?></p>
                        <p class="my-1"><strong><?= $product->precio ?>$</strong></p>
                        <a href="<?=base_url?>carrito/add&id=<?=$product->id?>" class="btn boton-enviar btn-block mt-1 mb-1">Comprar</a>
                    </div>
                <?php endwhile; ?>

                </div>
                     <?php endif; ?> 

                   <?php else: ?>
                    <h1 class="text-center mt-4 p-2 mb-4 titulo">   
                    La Categoría no existe                 
                   </h1>
                <?php endif; ?>   
               
              </div>
             <!--FIN CONTENIDO PRINCIPAL-->

         </div>
     </div>
     </section>
    <!--FIN SIDEBAR/CONTENIDO PRINCIPAL-->