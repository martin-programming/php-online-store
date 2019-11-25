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
             </div>
             <!--FIN SIDEBAR-->

             <!--CONTENIDO PRINCIPAL-->
               <div class="col-12 col-lg-9 caja-principal border">
                  <h1 class="text-center mt-3 p-2 titulo">
                  <i class="fas ico-registro mt-2 ml-2 fa-sign-in-alt float-left"></i>
                  Crea una nueva Categoría
              </h1>

              <div class="row mb-3 mt-1">
                  <div class="col">
                    <h2 class="titulo-3 text-center mt-2">Ingresa el nombre de la categoría</h2>
                     <form action="<?=base_url?>categoria/save" method="POST">
                      <div class="form-group mt-3">
                       <label for="name"><i class="fas ico-form mr-2 fa-address-card"></i><strong>Nombre</strong></label>
                       <input type="text" name="nombre" class="form-control" placeholder="La categoría se llamará..."required>
                      </div>

                     <button type="submit" class="btn mt-3 mb-2 boton-enviar btn-block">Crear</button>
                  </div>
              </div>

              </div>
             <!--FIN CONTENIDO PRINCIPAL-->

         </div>
     </div>
     </section>
    <!--FIN SIDEBAR/CONTENIDO PRINCIPAL-->