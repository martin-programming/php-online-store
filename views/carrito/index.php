              <!--CONTENIDO PRINCIPAL-->
              <div class="container">
               <div class="row"> 
               <div class="col caja-principal">
                  <h1 class="text-center mt-4 p-2 mb-3 titulo">
                    Carrito de la compra
                  </h1>

                  <?php if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1): ?>

                   <div class="row">
                    <div class="col bg-light my-3 ml-4 mr-4 shadow-lg">
                      <div class="table-responsive-md">
                       <table class="table table-borderless">
                        <thead>
                         <tr>
                         <th scope="col" class="th text-center">Imagen</th>
                         <th scope="col" class="th text-center">Nombre</th>
                         <th scope="col" class="th text-center">Precio</th>
                         <th scope="col" class="th text-center">Unidades</th>
                         <th scope="col" class="th text-center">Eliminar</th>
                         </tr>
                        </thead>

                        <?php 
                           foreach($carrito as $indice => $elemento): 
                           $producto = $elemento['producto'];
                        ?>

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
                             <?=$elemento['unidades']?><br>
                             <a href="<?=base_url?>carrito/up&index=<?=$indice?>" class="mr-2 enlace-up">+</a>
                             <a href="<?=base_url?>carrito/down&index=<?=$indice?>" class="ml-2 enlace-down">-</a>
                         </td>

                         <td class="text-center">
                         <a href="<?=base_url?>carrito/remove&index=<?=$indice?>" class="ml-1 enlace-borrar">Quitar del carrito</a>  
                         </td>
                         </tr> 
    
                      </tbody>
                      <?php endforeach; ?>
                     </table>
                    </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col bg-light my-4 ml-4 mr-4 p-2 shadow">
                        <?php $stats = Utils::statsCarrito(); ?>

                      <div class="table-responsive text-center">
                       <table class="table table-borderless">
                        <thead>
                         <tr>
                         <th scope="col" class="th">Total de productos </th>
                         <th scope="col" class="th">Total de la compra</th>
                         <th scope="col" class="th"></th>
                         <th scope="col" class="th"></th>
                         </tr>
                       </thead>

                        <td class="td">
                             <?=$stats['count']?>
                         </td>

                         <td class="td">
                             <?=$stats['total']?> $
                         </td>

                         <td class="td">
                             <a href="<?=base_url?>carrito/delete_all" class="btn btn-danger btn-block">Vaciar el carrito</a>
                         </td>

                         <td class="td">
                             <a href="<?=base_url?>pedido/hacer" class="btn boton-enviar btn-block">Hacer el pedido</a>
                         </td>

                      </table>
                     </div>
                    </div>

                    </div>

                  <?php else: ?>
                    <p class="my-4 p-3 ml-3 mr-3 text-center titulo-3 lead bg-light shadow-lg">Tu carrito esta vacío, añade algun producto.</p>
                  <?php endif; ?>

              </div>
             <!--FIN CONTENIDO PRINCIPAL-->

         </div>
     </div>
     </section>
    <!--FIN SIDEBAR/CONTENIDO PRINCIPAL-->