<?php header_ppal($data) ?>
    
    
    <!-- <h1><?php //echo $data['page_title']; ?></h1> -->

    
    <!-- Button trigger modal -->

     
    

    <!-- LOGIN  --><!-- LOGIN  --><!-- LOGIN  --><!-- LOGIN  --><!-- LOGIN  --><!-- LOGIN  --><!-- LOGIN  -->
    
    <div class="mensageloginimp">
   
                    <?php //dep($_SESSION['userData']); ?> <!-- NO BORRAR ESTE TRAE LOS DATOS DEL USUARIO EN LA SESION -->

        <div class="modalext"> 

            <button type="button" class="btn btn-primary btnformu stext-101" data-bs-toggle="modal" data-bs-target="#loginusuario">
                Iniciar Sesion
            </button>

                <!-- Modal -->
                <div class="modal fade" id="loginusuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesion</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <form  id="formLogin" name="formLogin" class="forlogint">  
                                                    
                                    <h3><span class="fas fa-id-card" aria-hidden="true"></span>Iniciar Sesion</h3> 
                                    
                                    <input type="text" class="form-control" id="correologfor" name="correologfor" 
                                           placeholder="Correo Electronico"
                                    >       
                                    
                                    <input type="password" class="form-control" id="clavelogfor" name="clavelogfor" 
                                            placeholder="Contraseña"
                                    >       
                                    
                                    <!-- <button type="submit" name="btn-login" value="ingresar" ><span class="fas fa-sign-in-alt" aria-hidden="true"></span>Ingresar</button> -->
                                    
                                    <!-- <a href="<?php //echo BASE_URL(); ?>/registrarse/registro "   value="Registrarse" >Registrarse</a> -->

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>

                                </form>
                                
                            </div>
                        </div>
                    </div>
                 </div> <!--  fin del modal --> 
        </div>


        <!-- FIN LOGIN --><!-- FIN LOGIN --><!-- FIN LOGIN --><!-- FIN LOGIN --><!-- FIN LOGIN --><!-- FIN LOGIN -->

        
        <!-- registrase --><!-- registrase --><!-- registrase -->
        <!-- registrase --><!-- registrase --><!-- registrase -->

        <div class="modalext"> 


                 <button type="button" class="btn btn-primary btnformu stext-101 " data-bs-toggle="modal"                   data-bs-target="#modalregisusuario">
                        Registro de Usuario
                 </button>


                 <!-- Modal -->
                <div class="modal fade" id="modalregisusuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header text-center ">
                            <h5 class="modal-title text-center" id="exampleModalLabel">Registro de Usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                       
                            <form id="regisformUsuario" name="regisformUsuario">  
                            
                                <!-- <h3><span class="fas fa-id-card" aria-hidden="true"></span>Registro De Usuario</h3> -->
                                

                                <input type="text" class="form-control" id="nombreregfor" name="nombreregfor" placeholder="nombre">       
                                <input type="text" class="form-control" id="correoregfor" name="correoregfor" placeholder="correo">       
                                <input type="password" class="form-control" id="claveregfor" name="claveregfor" placeholder="Contraseña">
                                <input type="password" class="form-control" id="claveregfor2" name="claveregfor2" placeholder="Verifica Contraseña">       
                                <input type="text" class="form-control" id="telefonoregfor" name="telefonoregfor" placeholder="Movil">
                                <!-- <select type="text" class="form-control" name="tipo_usuarioregfor" placeholder="Tipo de usuario"> -->
                                                
                                <!-- <button type="submit" name="btn-login" value="ingresarregfor" ><span class="fas fa-sign-in-alt" aria-hidden="true"></span>Ingresar</button> -->
                            
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </form>
                            
                        </div>
                        </div>
                    </div>
                 </div> <!--  fin del modal -->
        </div>

    
        


    </div>


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->

<?php footer_ppal($data) ?>