<?php 
      require_once("Controllers/Roles.php");
      require_once("Models/RolesModel.php");
      //require_once("Libraries/Core/Views.php");
?>






<!-- Modal -->
<div class="modal fade" id="modalFormRol" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo Rol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <div class="tile">


      <?php

          //print_r($data);

          //var_dump($_POST);

          //$idllega = ($_POST);
          //var_dump($idllega);
          //$idllega['idrol'];
 
          //$nuevadata = json_decode(file_get_contents("http://localhost/doctoreeedevelop/Roles/getRol/2", true));

          //var_dump($nuevadata);
          
          $pasovar = new Roles(); 
          $permissions = $pasovar->getBuscaPermrol(); //CONSULTA TODOS LOS PERMISOS ojo bueno
          //dep($permissions);
          
          //$nuevados = $pasovar->getRolBusca();
          //var_dump($nuevados);

          
          //$suichemodal = new Roles(); 
          //$rol_busca = $suichemodal->rolesgetRol(2); 
          //dep($rol_busca);
          
          //echo $nuevavar;

          //$permisosarray = new RolesModel();
          //$permisos_rol = $permisosarray->permisos_rol; 
          //var_dump($permisos_rol);
          //dep($permisos_rol);
          
          
          // $vardoble = new Roles();
          // print_r($vardoble->nuevo_edit); 
          // var_dump($vardoble->nuevo_edit);

          //$vardoble = new Roles();
          //$nuevavar = $vardoble->devolvervar2();
          //var_dump($nuevavar);

         //$nueva  = Roles::devolvervar2();
         // var_dump($nueva);


          //$suiche =  $permisosarray->intIdrol;
          
          //var_dump($rol_busca);
         // dep($rol_busca);
          //var_dump($suiche);


          //$nuevoensayo1 = new Roles();
          //$impnueva1 = $nuevoensayo1->getRol(2);
          //var_dump($impnueva1);

          //dep($data);
          //var_dump($data["pasarvar"]["data"]["nombrerol"]);

      ?>
           
            <div class="tile-body">
              <form id="formRol" name="formRol">
                
              
                <input  type="text" id="idRol" name="idRol" value=""> 
              
                <!-- <input type="text" id="tipoForm" name="tipoForm" value=""> -->
                

                
                <div class="form-group">
                  <label class="control-label">Nombre</label>
                  <input class="form-control" id="txtNombre" name="txtNombre" type="text" placeholder="Nombre Del Rol">
                </div>
              
                <div class="form-group">
                  <label class="control-label">Descripcion</label>
                  <textarea class="form-control" id="txtDescripcion" name="txtDescripcion" rows="2" placeholder="Descripcion del Rol"></textarea>
                </div>


                <div class="form-group">
                    <label for="exampleSelect1">Estado</label>
                    <select class="form-control" id="listStatus" name="listStatus">
                      <option value="1">Activo</option>
                      <option value="2">Inactivo</option>
                     
                    </select>
                </div>
                
                <hr>
                



                <!-- CHECKBOX QUE VIENEN DE WEB-SERVICE -->
                <!-- <h5>Listado de Permisos</h5>
                <?php //foreach ($permissions as $permission): ?>

                  <div class="form-check">
                         <input 
                             class="form-check-input" 
                             type="checkbox" 
                             value="<?php //echo $permission['idpermisos']; ?>" 
                             id="permission_<?php //echo $permission['idpermisos'];    ?>"
                             name="permission[]"

                         >
                          
                                                 
                         <label                                 
                                class="form-check-label" 
                                for="permission_<?php //echo $permission['idpermisos']; ?>"
                         >
                                <?php //echo $permission['idpermisos']; ?>&nbsp;&nbsp;&nbsp;
                                -
                                <?php //echo $permission['nombre']; ?>&nbsp;&nbsp;&nbsp;
                                -
                                <em><?php //echo $permission['descripcion']; ?></em>

                         </label>
                  </div>  


                <?php //endforeach ?> -->


                <!-- CHECKBOX QUE VIENEN DE WEB-SERVICE -->
                <h5>Listado de Permisos</h5>
                <?php $permission = []; ?>
                <?php foreach ($permissions as $permission): ?>

                  <div class="form-check">
                         <input 
                             class="form-check-input" 
                             type="checkbox" 
                             value="<?php echo $permission['idpermisos']; ?>" 
                             id="permission_<?php echo $permission['idpermisos'];    ?>"
                             name="permission[]<?php $permission; ?>"


                         <?php 
                               //$permissiondos  =  'permission';
                              //var_dump($permissiondos);


                         //var_dump(explode(',', permission));
                         
                         if ( is_array($permission) && in_array($permission['idpermisos'] , $permission)) { ?>
                                checked
                          <?php } else { 
                            
                            
                            ?>            
                            <h2>false</h2>
                            <?php } ?>            
                         
                          
                                                 
                         <label                                 
                                class="form-check-label" 
                                for="permission_<?php echo $permission['idpermisos']; ?>"
                         >
                                <?php echo $permission['idpermisos']; ?>
                                -
                                <?php echo $permission['nombre']; ?>
                                -
                                <em><?php echo $permission['descripcion']; ?></em>

                         </label>
                  </div>  


                <?php endforeach ?>
                
                
                  
                  <!-- CHECKBOX QUE VIENEN DE JAVASCRIPT
                
                <div class="container" id="contenido" name="contenido">
                    
                </div> -->
                
                
                
                <div class="tile-footer">
                    <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                </div>

    
               
              </form>
            </div>
          </div>




      </div>
    
    </div>
  </div>
</div>
<script src="http://localhost/doctoreeedevelop/Assets/paginappal/js/functions_mdlImagenes.js"></script>