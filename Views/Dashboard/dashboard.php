<?php headerAdmin($data); ?>



    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"> </i><?php echo $data['page_title']; ?></h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            

            <div class="container">
                  
              <div class="infouser">

               
                   
                    
                <?php  if ($_SESSION['userData']['nombrerol'] == 'Usuario Invitado'){ ?>
                    
                      <div class="tile-body">Bienvenido... Registrate para disfrutar nuestro contenido protegido y de promos. 

                      <div class="app-sidebar__user"><img class="app-sidebar__user-avatarlittle" src="<?= BASE_URL(); ?>/images/avatar1.png" alt="User Image">&nbsp &nbsp &nbsp &nbsp
                      
                      <div class="text-secondary"> 
                      <?php //echo ($_SESSION['userData']['nombre']); ?>
                      <?php echo ($_SESSION['userData']['nombrerol']); ?>
                      </div>
                    
                    </div>
                      
                 

                      
                      </div>

                      <a class="btn btn-primary btn-sm" href="http://localhost/doctoreeedevelop/login">Login</a>
                      <a class="btn btn-primary btn-sm" onclick="openModal();">Registrarse</a>


                    
                <?php } else { ?>

                      <div class="app-sidebar__user text-secondary"><img class="app-sidebar__user-avatarlittle" src="<?= BASE_URL(); ?>/images/avatar1.png" alt="User Image">&nbsp &nbsp
                      

                        <?php echo ($_SESSION['userData']['nombre']).'&nbsp &nbsp'; ?>
                              <br>&nbsp &nbsp
                        <?php echo ($_SESSION['userData']['nombrerol']).'&nbsp &nbsp'; 
                            
                        } ?>
                 
                    </div>
                 


              </div>
          </div>
            

            <div class="row">
            
              <div class="col-md-12 mt-3">
              <h3>Listado de Usuarios</h3>
                <div class="tile">
                  <div class="tile-body">
                    <div class="table-responsive">
                      <table class="table table-hover table-bordered" id="tableUserdash">
                        <thead>
                          <tr>
                            
                            <th>ID</th>
                            <th>Nombres</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Datacreated</th>
                            <th>Rolid</th>
                            <th>Status</th>
                            
                          </tr>
                        </thead>
                        <tbody class="tbodydash">
                        
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </main>
    


<?php footerAdmin($data); ?>    