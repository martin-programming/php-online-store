<?php if(isset($_SESSION['identity'])) : ?>
     <div class="container">
         <div class="row">
              <!--CONTENIDO PRINCIPAL-->
               <div class="col caja-principal">
                  <h1 class="text-center mt-4 p-2 mb-3 titulo">
                    Tu pedido
                  </h1>
                 
                 <div class="row mb-4 mt-1">
                  <div class="col">
                    <h2 class="titulo-3 text-center">Dirección para el envío</h2>
                     <form action="<?=base_url?>pedido/add" method="POST">
                      <div class="form-group">
                       <label for="provincia"><i class="fas ico-form mr-2 fa-map-marked-alt"></i><strong>Provincia|Región</strong></label>
                       <input type="text" name="provincia" class="form-control" placeholder="Ingresa el nombre de tu provincia o región aquí" required>
                     </div>

                     <div class="form-group">
                       <label for="ciudad"><i class="fas ico-form mr-2 fa-city"></i><strong>Ciudad</strong></label>
                       <input type="text" name="localidad" class="form-control" placeholder="Ingresa el nombre de tu ciudad aquí" required>
                     </div>

                     <div class="form-group">
                       <label for="direccion"><i class="fas ico-form mr-2 fa-home"></i><strong>Direccion</strong></label>
                       <input type="text" name="direccion" class="form-control" placeholder="Ingresa tu direccion aquí" required>
                     </div>

                     <button type="submit" class="btn my-1 boton-enviar btn-block">Enviar</button>
                  </div>
                </div>

                 
              </div>
             <!--FIN CONTENIDO PRINCIPAL-->

             <?php else: ?>
             <div class="col caja-principal">
               <h1 class="text-center mt-5 p-2 mb-5 titulo">
                  Necesitas registrarte
               </h1>  

               <p class="my-5 p-5 ml-3 mr-3 text-center"><strong>Para poder hacer pedidos debes primero <a href="<?=base_url?>usuario/registro" class="enlace">registrarte</a> y luego iniciar sesión</strong> </p>             
            </div>
            <?php endif; ?>  

         </div>
     </div>
     </section>
    <!--FIN SIDEBAR/CONTENIDO PRINCIPAL-->
    