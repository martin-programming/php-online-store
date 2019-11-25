              <!--CONTENIDO PRINCIPAL-->
              <div class="container">
               <div class="row"> 
               <div class="col caja-principal my-3">
                <?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete') : ?>
                  <h1 class="text-center mt-2 p-2 mb-3 titulo">
                    Tu pedido se ha procesado correctamente
                  </h1>

                  <p class="my-3 ml-3 mr-3 p-3 bg-light shadow-lg"><strong> Hemos recibido y guardado tu pedido con éxito, una vez que hagas la transferencia bancaria a la cuenta 00786547906734ADD te seran enviados tus productos de los Toronto Raptors.</strong></p>

                  <?php if(isset($pedido)) : ?>
                   <article class="my-3 ml-3 mr-3 p-3 bg-light shadow-lg article-1">
                     <h1 class="text-center titulo-3">Datos del pedido</h1>
                     <p>
                      <strong>Número de pedido: <?= $pedido->id ?></strong>
                    </p> 
                    <p>
                      <strong>Total a pagar: <?= $pedido->coste ?> $</strong>
                    </p>
                   </article>

                   <?php while ($producto = $productos->fetch_object()): ?>
                   <article class="my-3 ml-3 mr-3 p-3 bg-light shadow-lg article-1">
                     <h1 class="text-center titulo-3">Productos</h1>

                     <div class="table-responsive-md">
                       <table class="table table-borderless table-hover">
                        <thead>
                         <tr>
                         <th scope="col" class="th text-center">Imagen</th>
                         <th scope="col" class="th text-center">Nombre</th>
                         <th scope="col" class="th text-center">Precio</th>
                         <th scope="col" class="th text-center">Unidades</th>
                         </tr>
                        </thead>
            
                        <tbody>  
                         <tr>
                         <td class="text-center">
                         <?php if($producto->imagen != null): ?>
                           <a href="<?=base_url?>producto/ver&id=<?=$producto->id?>">
                             <img src="<?=base_url?>uploads/images/<?=$producto->imagen?>" class="img-fluid img-carrito" width="100">
                           </a>
                         <?php else: ?>
                          <a href="<?=base_url?>producto/ver&id=<?=$producto->id?>">
                             <img src="<?=base_url?>assets/img-camisa-2.png" class="img-fluid img-carrito" width="100">
                           </a>
                         <?php endif; ?>
                         </td>

                         <td class="text-center"><a href="<?= base_url ?>producto/ver&id=<?=$producto->id?>" class="enlace-td"><?=$producto->nombre?></a>
                         </td>

                         <td class="text-center td">
                             <?=$producto->precio?>
                         </td>

                         <td class="text-center td">
                             <?=$producto->unidades?>
                         </td>
                         </tr> 
                      </tbody>
                     </table>
                    </div>
                   </article>
                   <?php endwhile; ?>

                  <?php endif; ?>
               
               <?php elseif($_SESSION['pedido'] != 'complete') : ?>
                 <h1 class="text-center mt-4 p-2 mb-4 titulo">
                    Tu pedido no se ha podido procesar correctamente
                  </h1>

                  <p class="my-5 ml-3 mr-3"><strong>Vuelvelo a intentar <a href="<?=base_url?>pedido/hacer"></a>Hacer el pedido de nuevo.</strong></p>
               <?php endif; ?> 
              </div>
             <!--FIN CONTENIDO PRINCIPAL-->

         </div>
     </div>
     </section>
    <!--FIN SIDEBAR/CONTENIDO PRINCIPAL-->