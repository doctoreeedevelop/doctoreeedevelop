

<!-- Modal -->
<div class="modal fade" id="modalFormUsuarios" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
       <form id="formadminUser" name="formadminUser">
                
                <input type="hidden" id="idUsuario" name="idUsuario" value="">

                <input type="hidden" id="idRol" name="idRol" value=""> 
                
                <!-- <input id="idUsuario" name="idUsuario" value="">  -->
                
                
                
                
                
                <div class="form-group">
                  <label for="nombreuser" class="control-label">Nombre</label>
                  <input class="form-control" id="nombreuser" name="nombreuser" type="text" placeholder="Nombre">
                </div>

                <div class="form-group">
                  <label for="correouser" class="control-label">Correo</label>
                  <input class="form-control" id="correouser" name="correouser" type="text" placeholder="Correo">
                </div>
              
                <div class="form-group" id="claveuseroculto1">
                  <label for="claveuser" class="control-label">Contraseña</label>
                  <input class="form-control" id="claveuser" name="claveuser" type="password" placeholder="Contraseña">
                </div>
              
                <div class="form-group" id="claveuseroculto2">
                  <label for="claveuser2" class="control-label">Verificar Contraseña</label>
                  <input class="form-control" id="claveuser2" name="claveuser2" type="password" placeholder="Verifica Contraseña">
                </div>
              
                <div class="form-group">
                  <label for="telefonouser" class="control-label">Telefono</label>
                  <input class="form-control" id="telefonouser" name="telefonouser" type="num" placeholder="Telefono">
                </div>

                <!-- <div class="form-group">
                  <label for="telefonouser" class="control-label">Telefono</label>
                  <input class="form-control" id="invento" name="invento" type="text" placeholder="Telefono">
                </div> -->

                   
                <!-- <div class="form-group">
                  <label for="listRolid">Rol de Usuario</label>
                  <select class="form-control" id="listRolid" name="listRolid">                        
                        
                  </select>
                </div>  -->

                <!-- <div class="form-group">
                  <label for="listRolid">Rol de Usuario</label> -->
                  <!-- <input class="form-control" id="listRolid" name="listRolid">    -->
                        
                 
                <!-- </div> -->


                <!-- <ul id="daysList" name="daysList"></ul>  -->


                <!-- <select id="daysSelect" name="daysSelect"></select> -->
                
                <!-- <select id="selectidrol" name="selectidrol"> -->
                    
                </select>
                
                <div class="form-group">
                    <h6>Nombre del Rol</h6>
                    
                    <!-- <select name="txtHint" id="txtHint" class="col-4 form-control" onclick="muestraselect(this.value)"> -->
                    <!-- <select name="select" id="select" class="col-4 form-control" onclick="muestraselect(this.value)" > -->
                    <select name="selnomrol" id="selnomrol" class="col-4 form-control">
                            

                    </select>
                    <!-- <br>
                    <h3>Id del Rol</h3>
                    <div id="div">
                      <select name="select" id="select" class="col-4 form-control">
                          <option value="">Seleccione</option>
                      </select>
                    </div>           -->
                </div>






                <div class="form-group">
                  <label for="listStatus">Estado</label>
                  <select class="form-control" id="listStatus" name="listStatus">
                        
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                        
                  </select>
                </div>
                                       
                  
                <div class="tile-footer">
                  <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                </div>
               
        </form>

          




      </div>
    
    </div>
  </div>
</div>