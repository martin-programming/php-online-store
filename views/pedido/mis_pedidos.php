<!--CONTENIDO PRINCIPAL-->
              <div class="container pt-5 pt-md-0">
               <div class="row"> 
               <div class="col caja-principal my-4">
                <?php if(isset($gestion)) : ?>
                    <h1 class="text-center mt-2 p-2 mb-3 titulo">
                      Gestionar pedidos
                    </h1>
                  <?php else : ?>
                     <h1 class="text-center mt-2 p-2 mb-3 titulo">
                      Tus pedidos
                     </h1>
                  <?php endif; ?>

                   <div class="table-responsive-md">
                       <table class="table table-borderless table-hover">
                        <thead>
                         <tr>
                         <th scope="col" class="th text-center">N° pedido</th>
                         <th scope="col" class="th text-center">Precio</th>
                         <th scope="col" class="th text-center">Fecha</th>
                         <th scope="col" class="th text-center">Estado</th>
                         </tr>
                        </thead>

                        <?php while($ped = $pedidos->fetch_object()) : ?>

                        <tbody>  
                         <tr>
                         <td class="text-center">
                          <a href="<?= base_url ?>pedido/detalle&id=<?=$ped->id?>" class="enlace-td"><?=$ped->id?></a>
                         </td>

                         <td class="text-center td">
                             <?=$ped->coste?> $
                         </td>

                         <td class="text-center td">
                             <?=$ped->fecha?>
                         </td>

                         <td class="text-center td">
                             <?= Utils::showStatus($ped->esatado) ?>
                         </td>

                         </tr>    
                      </tbody>
                      <?php endwhile; ?>
                     </table>
                    </div>

               </div> 
             <!--FIN CONTENIDO PRINCIPAL-->

         </div>
     </div>
     </section>
    <!--FIN SIDEBAR/CONTENIDO PRINCIPAL-->