<?php 
    
    headerAdmin($data); 
    getModal('modalUsuarios', $data);

?>



    <main class="app-content">
      <div class="app-title">
        <div>
            <h1><i class="fa fa-users"></i>  
                <?php echo $data['page_title']; ?>
                <button 
                  class="btn btn-primary" 
                  type="button" 
                  onclick="openModal();"
                  >
                  <i class="fa fa-user-plus"></i>
                    Nuevo
                </button>
            </h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/usuarios"><?php echo $data['page_title']; ?></a></li>
        </ul>
      </div>
      <!-- <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">Usuarios</div>
          </div>
        </div>
      </div> -->

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="tableUser">
                  <thead>
                    <tr>
                      
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Telefono</th>
                      <th>Correo</th>
                      <th>Contraseña</th>
                      <th>Datacreated</th>
                      <th>Rolid</th>
                      <th>Status</th>
                      <th>Opciones</th>
                      
                      


                    </tr>
                  </thead>
                  <tbody class="tbody">
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    


<?php footerAdmin($data); ?>    