 <!--CONTENIDO PRINCIPAL-->
              <div class="container">
               <div class="row"> 
               <div class="col caja-principal my-3">

                  <h1 class="text-center mt-2 p-2 mb-3 titulo">
                      Datos de tus pedidos
                  </h1>

                  <?php if(isset($pedido)) : ?>

                  	<article class="my-3 ml-3 mr-3 p-3 bg-light shadow-lg article-1">
                     <h1 class="text-center titulo-3">Datos del envío</h1>
                     <p>
                      <strong>Provicia: <?= $pedido->provincia ?></strong>
                    </p> 
                    <p>
                      <strong>Ciudad: <?= $pedido->localidad ?></strong>
                    </p>
                    <p>
                      <strong>Dirección: <?= $pedido->direccion ?></strong>
                    </p>
                   </article>

                   <article class="my-3 ml-3 mr-3 p-3 bg-light shadow-lg article-1">
                     <h1 class="text-center titulo-3">Datos del pedido</h1>
                     <p>
                      <strong>Estado del pedido: <?= Utils::showStatus($pedido->esatado) ?></strong>
                     </p>
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

                   <?php if(isset($_SESSION['admin'])) :  ?>

                    <?php endif; ?>
                    <article class="my-3 ml-3 mr-3 p-3 bg-light shadow-lg article-1">
                       <h1 class="text-center titulo-3">
                           Cambiar el estado de los pedidos
                       </h1>

                       <form action="<?=base_url?>pedido/estado" method="POST">
                         <div class="form-group">
                          <input type="hidden" name="pedido_id" value="<?=$pedido->id?>">
                           <select name="estado" class="form-control">
                             <option value="confirm" <?=$pedido->esatado == 'confirm' ? 'selected' :''?>>
                               Pendiente
                             </option>

                             <option value="preparation" <?=$pedido->esatado == 'preparation' ? 'selected' :''?>>
                               En preparación
                             </option>

                             <option value="ready" <?=$pedido->esatado == 'ready' ? 'selected' :''?>>
                               Preparado para enviar
                             </option>

                             <option value="sended" <?=$pedido->esatado == 'sended' ? 'selected' :''?>>
                               Enviado
                             </option>
                           </select>
                         </div>

                         <button type="submit" class="btn boton-enviar btn-block">Cambiar estado</button>

                       </form>

                     </article>
                  <?php endif; ?>


               </div>
              </div>
             </div>	