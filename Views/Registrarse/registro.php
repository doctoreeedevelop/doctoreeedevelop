

<?php header_ppal($data) ?>


<div class="mensageloginimp">
                      
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              
                <form id="formUsuario" name="formUsuario">  
                            
                            <h3><span class="fas fa-id-card" aria-hidden="true"></span>Registro De Usuariooooooo</h3>
                            

                            <input type="text" class="form-control" name="nombreregfor" placeholder="nombre">       
                            <input type="text" class="form-control" name="correoregfor" placeholder="correo">       
                            <input type="password" class="form-control" name="claveregfor" placeholder="Contraseña">       
                            <input type="text" class="form-control" name="telefonoregfor" placeholder="Movil">
                            <!-- <select type="text" class="form-control" name="tipo_usuarioregfor" placeholder="Tipo de usuario"> -->
                                            
                            <button type="submit" name="btn-login" value="ingresarregfor" ><span class="fas fa-sign-in-alt" aria-hidden="true"></span>Ingresar</button>
                          
                </form>
              
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>





                       
                            
                        <a href="http://localhost/odontologia/wp-content/themes/odontologia/vistas/basedatos.php"><span class="fas fa-reply-all" aria-hidden="true"></span>Regresar</a>
                    
 </div>


<?php footer_ppal($data) ?>