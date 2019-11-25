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

                <a href="<?=base_url?>pedido/mis_pedidos" class="btn mt-2 btn-outline-light btn-block">Mis pedidos</a>
                <a href="<?=base_url?>usuario/logout" class="btn btn-outline-light btn-block">Cerrar sesión</a>
                <?php endif; ?>

                <?php if(isset($_SESSION['admin'])) : ?>    
                <a href="<?=base_url?>categoria/index" class="btn btn-outline-light btn-block">Gestionar categorias</a>
                <a href="<?=base_url?>producto/gestion" class="btn mt-1 btn-outline-light btn-block">Gestionar productos</a>
                <a href="<?=base_url?>pedido/gestion" class="btn btn-outline-light btn-block">Gestionar pedidos</a>
                <?php endif; ?>

                <a href="<?=base_url?>SobreNosotros/index" class="btn btn-success btn-block mt-5">¿Quieres saber más de nosotros?</a>
                <a href="<?=base_url?>Contacto/index" class="btn btn-success btn-block mt-2">Contáctanos ahora mismo</a>

                <img src="<?=base_url?>assets/img-lowr.png" class="img-fluid fixed-bottom m-auto d-none d-lg-block" width="145">
             </div>
             <!--FIN SIDEBAR-->

              <!--CONTENIDO PRINCIPAL-->
               <div class="col-12 col-lg-9 caja-principal">
                   <h1 class="text-center mt-4 p-2 mb-4 titulo">
                    <img src="<?=base_url?>assets/img-sweter-1.png" class="img-fluid mr-4 d-none d-lg-inline-block" width="100">
                    Productos de la tienda
                    <img src="<?=base_url?>assets/img-sweter-3.png" class="img-fluid ml-4 d-none d-lg-inline-block" width="100">
                  </h1>

                 <?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'): ?>
                    <p class="categoria-exito my-3">El producto se ha creado correctamente</p>
                 <?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] != 'complete'): ?> 
                    <p class="categoria-fallida my-3">El producto no se ha creado correctamente</p>
                 <?php endif; ?>
                 <?php Utils::deleteSession('producto'); ?>

                 <?php if(isset($_SESSION['edit']) && $_SESSION['edit'] == 'complete'): ?>
                    <p class="categoria-exito my-3">El producto se ha editado correctamente</p>
                 <?php elseif(isset($_SESSION['edit']) && $_SESSION['edit'] != 'complete'): ?> 
                    <p class="categoria-fallida my-3">El producto no se ha editado correctamente</p>
                 <?php endif; ?>
                 <?php Utils::deleteSession('edit'); ?>

                 <?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>
                    <p class="categoria-exito my-3">El producto se ha eliminado correctamente</p>
                 <?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] != 'complete'): ?> 
                    <p class="categoria-fallida my-3">El producto no se ha eliminado correctamente</p>
                 <?php endif; ?>
                 <?php Utils::deleteSession('delete'); ?>
                 
               <div class="row ml-2 mr-2 p-1 mb-4">
                <!--<div class="col-12 col-md-4 bg-light d-flex justify-content-center align-items-center">
                   <img src="<?=base_url?>assets/img-camisa-12-new.png" class="img-fluid my-1" width="180">
                </div>-->

                <div class="col bg-light">
                 <div class="table-responsive">
                 <table class="table table-borderless table-hover">
                  <thead>
                   <tr>
                   <th scope="col" class="th text-center">ID</th>
                   <th scope="col" class="th text-center">Nombre</th>
                   <th scope="col" class="th text-center">Precio</th>
                   <th scope="col" class="th text-center">Descripción</th>
                   <th scope="col" class="th text-center">Stock</th>
                   <th scope="col" class="th text-center">Acciones</th>
                   </tr>
                  </thead>

                  <tbody>
                  <?php while($pro = $productos->fetch_object()) : ?>  
                   <tr>
                   <th scope="row" class="text-center"><?=$pro->id;?></th>
                   <td class="text-center"><a href="<?=base_url?>" class="enlace-td"><?=$pro->nombre;?></a></td>
                   <td class="text-center enlace-td"><?=$pro->precio;?></td>
                   <td class="text-center enlace-td"><?=$pro->descripcion;?></td>
                   <td class="text-center enlace-td"><?=$pro->stock;?></td>
                   <td class="text-center">
                    <a href="<?=base_url?>producto/editar&id=<?=$pro->id?>" class="mr-1 enlace-editar">Editar</a>
                    <a href="<?=base_url?>producto/eliminar&id=<?=$pro->id?>" class="ml-1 enlace-borrar">Eliminar</a>  
                  </td>
                   </tr>
                  <?php endwhile; ?> 
    
                  </tbody>
                </table>
               </div>

                <a href="<?=base_url?>producto/crear" class="btn boton-enviar my-3 btn-block">Crear un producto nuevo</a>

                </div>

             </div>
                
              </div>
             <!--FIN CONTENIDO PRINCIPAL-->

         </div>
     </div>
     </section>
    <!--FIN SIDEBAR/CONTENIDO PRINCIPAL-->