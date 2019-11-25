<!--SIDEBAR--> 
    <section class="sec-sidebar mt-5 mt-lg-0 pt-4 pt-lg-0">
     <div class="container-fluid">
         <div class="row">
             <div class="col-12 col-lg-3 sidebar py-4">
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

                <button type="submit" class="btn mt-4 mb-2 boton-enviar btn-block">Enviar</button>

                <img src="<?=base_url?>assets/img-logo-toronto.png" class="img-fluid d-block m-auto pt-4" width="195" alt="...">
               </form>

               <a href="<?=base_url?>SobreNosotros/index" class="btn btn-success btn-block mt-5">¿Quieres saber más de nosotros?</a>
                <a href="<?=base_url?>Contacto/index" class="btn btn-success btn-block mt-2">Contáctanos ahora mismo</a>
             </div>
             <!--FIN SIDEBAR-->

              <!--CONTENIDO PRINCIPAL-->
               <div class="col-12 col-lg-9 caja-principal">
                  <h1 class="text-center mt-3 p-2 titulo">
                  <i class="fas ico-registro mt-2 ml-2 fa-sign-in-alt float-left"></i>
                  Registrarse
              </h1>

              <div class="row mb-3 mt-1">
                  <div class="col">
                    <h2 class="titulo-3 text-center">Accede ya a nuestros productos</h2>

                      <?php 
                        if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete') :?>
                            <p class="registro-exitoso my-2">Registro completado correctamente</p>
                        <?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed') :?>
                            <p class="registro-fallido my-2">Registro fallido, Introduce bien los datos</p>
                       <?php endif; ?>
                       <?php Utils::deleteSession('register'); ?>

                     <form action="<?=base_url?>usuario/save" method="POST">
                      <div class="form-group">
                       <label for="name"><i class="fas ico-form mr-2 fa-address-card"></i><strong>Nombre</strong></label>
                       <input type="text" name="nombre" class="form-control" placeholder="Ingresa tu nombre aquí">

                      <?php echo isset($_SESSION['errores']) ? Utils::mostrarError($_SESSION['errores'], 'nombre') : '' ; ?> 

                     </div>

                     <div class="form-group">
                       <label for="apellidos"><i class="fas ico-form mr-2 fa-address-card"></i><strong>Apellidos</strong></label>
                       <input type="text" name="apellidos" class="form-control" placeholder="Ingresa tus apellidos aquí">

                      <?php echo isset($_SESSION['errores']) ? Utils::mostrarError($_SESSION['errores'], 'apellidos') : '' ; ?>

                     </div>

                      <div class="form-group">
                       <label for="email"><i class="fas ico-form mr-2 fa-at"></i><strong>Correo electrónico</strong></label>
                       <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Escribe tu @email aquí">
                       <small id="emailHelp" class="form-text">Nunca compartiremos con nadie tu dirección de correo electrónico</small>

                       <?php echo isset($_SESSION['errores']) ? Utils::mostrarError($_SESSION['errores'], 'email') : '' ; ?>

                     </div>

                     <div class="form-group">
                      <label for="password"><i class="fas ico-form mr-2 fa-lock"></i><strong>Contraseña</strong></label>
                      <input type="password" name="password" class="form-control" placeholder="Escribe tu contraseña aquí">

                    <?php echo isset($_SESSION['errores']) ? Utils::mostrarError($_SESSION['errores'], 'password') : '' ; ?>

                     </div>

                     <?php Utils::borrarErrores('errores'); ?>

                     <button type="submit" class="btn my-1 boton-enviar btn-block">Enviar</button>
                  </div>
              </div>

              </div>
             <!--FIN CONTENIDO PRINCIPAL-->

         </div>
     </div>
     </section>
    <!--FIN SIDEBAR/CONTENIDO PRINCIPAL-->