<?php   
  
    //require_once("Helpers/Helpers.php");
    //require_once("Controllers/Roles.php");
    //require_once("Models/RolesModel.php");

    //var_dump($data);
    
    headerAdmin($data); 
    getModal('modalRoles', $data);


    /*$vardoble = new Roles();
    $nuevavar = $vardoble->devolvervar(); 
    var_dump($nuevavar);*/

    //var_dump($_POST);
    
    //dep($data);
    //var_dump($arrResponse)
    
    //dep($datos);
    //var_dump($datos);
    //print_r($pasarvar);
    //print_r($data["pasarvar"]);
    //print_r($datos["pasavar"]);
    //var_dump($datos['pasarvar'])
    //var_dump($pasarvar["nombrerol"]);
    //var_dump($data["pasarvar"]["data"]["nombrerol"]);
    //var_dump($data["nombrerol"]);
    /*foreach($data["pasarvar"] as $item)
    {
      echo "{$item['nombre']}";
    }*/

?>


 
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i>  <?php echo $data['page_title']; ?>
            <button class="btn btn-primary" type="button" onclick="openModal();"><i class="fa fa-plus-circle" aria-hidden="true"></i>Nuevo</button>

            <button class="btn btn-info">Aumentar</button>
          </h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?php echo BASE_URL(); ?>/roles"><?php echo $data['page_title']; ?></a></li> 
        </ul>
      </div>
       <div class="row">
        <div class="col-md-12">
          <!-- <div class="tile">
            <div class="tile-body">Roles de Usuario</div>
          </div> -->
        </div>
      </div> 
     
    
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="tableRoles">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Descripcion</th>
                      <th>Status</th>
                      <th>Acciones</th>                     
                     
                    </tr>
                  </thead>
                  <tbody>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>




    </main> 
    


<?php footerAdmin($data); ?>     