<?php


require_once("Controllers/Gate.php");



class Roles extends Controllers{

        
    
        public $intIdrol;
        public $nuevo_edit;
        public $nuevaapasar;

        public $pasarvar ="";
        
        //public static function devolvervar2(){
            //var_dump(self::intIdrol);
            //return $this->intIdrol;
        //}

        public function devolvervar(){
            //var_dump($this->nuevo_edit);
            return $this->nuevo_edit;
        }
        
        
        


        

        public function __construct()
        {



            

            //session_start(); 
            if(empty($_SESSION['login']))
            {
                header('Location: '.base_url().'/login');
            }
            

            parent::__construct();

            //$this->pasvarseleccion();
            
        }


        
        
        
        //ABRE PAGINA ES EL METODO EN LA URL
        public function roles()
        {
            //echo "Mensage desde el controlador";
            $data['page_id'] = 3;
            $data['page_tag'] = "Roles";
            $data['page_title'] = "Roles";
            $data['page_name'] = "rol_usuario";
            $data['page_functions_js'] = "functions_roles.js";
            $data['page_invento'] = $this->pasarvar;
            
            //var_dump($data);

            //$viewsroles = new Views($this, "roles" , $data);
            $this->views->getView($this, "roles", $data);
            //$this->views->getView($this, "roles", compact('data'));
            
            //var_dump($data);
            //$this->views->getView($this, "header", $data);
            //$this->views->getView($this, "roles", $data , $datos);
        }
        
        
        /*public function pasvarseleccion()
        {
                //$idrolnuevo = $this->intIdrol;
                
                
                        getRol()
                
                $this->views->getView($this, "roles", compact("idrolnuevo"));

        }*/
        
        //BUSCA TODOS LOS ROLES Y LOS LISTA
        public function getRoles()
        {
           
            $arrData = $this->model->selectRoles(); 

           //dep($arrData);
           for($i=0; $i < count($arrData); $i++)
           {
                if($arrData[$i]['status']==1)
                {
                    $arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';

                }else{
                    $arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
                }

                $arrData[$i]['options'] = 
                '<div class="text-center">
                    <button class="btn btn-secondary btn-sm btnPermisosRol" rl="'.$arrData[$i]['idrol'].'" title="Permisos"><i class="fa fa-key"></i></button>
                    
                    <button class="editar btn btn-primary btn-sm btnEditRol" rl="'.$arrData[$i]['idrol'].'" title="Editar"><i class="fa fa-pencil"></i></button>

                    <button class="eliminar btn btn-danger btn-sm btnDelRol" rl="'.$arrData[$i]['idrol'].'" title="Eliminar"><i class="fa fa-trash"></i></button>
                    
                   
                    
                </div>';


           }

            //dep($arrData[0]['status']);exit;
            
            echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
            die();

        }

        
        //EDITAR = CONSULTA LOS ROLES PARA CARGAR CAMPOS A EDITAR  RUTA =  -var ajaxUrl = base_url+'/Roles/getRol/'+idrol;-
        public function getRol(int $idrol) //EDITAR
        {
            //$this->nuevo_edit = $idrol;

                       
            $this->intIdrol = intval(strClean($idrol));
            //var_dump($this->intIdrol);
            if($this->intIdrol > 0)
            {
                $arrData = $this->model->selectRol($this->intIdrol);
                //var_dump($arrData);
                //$this->nuevaapasar = $arrData;
                if(empty($arrData))
                {
                    $arrResponse = array('status' => false, 'msg' => 'Datos No Encontrados.' );
                }else{
                    
                    $arrResponse = array('status' => true, 'data' => $arrData );
                    //$data['pasarvar'] = $arrResponse['data'];
                    $this->pasarvar = $arrResponse['data'];
                    //$pasarvar = 'pasada';
                    //dep($arrResponse);
                    //dep($pasarvar);
                    //$this->nuevo_edit = $arrData;
                    //dep($this->nuevo_edit);
                    //$this->views->getView($this,"modalRoles", $datos);
                    //$this->views->getView($this, "roles", $data);
                    //$this->views->getPasavar($this, "roles", compact($data));
                    
                }
                
                
                
            }
            
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
            die();    
            //$this->views->getView($this, "roles", $datos);
        }



        public function getRolBusca()
        {

            $arrData = $this->model->busnomRol(); 
            //dep($arrData);
            echo json_encode($arrData, JSON_UNESCAPED_UNICODE);


        }

        public function getRolBuscaNom($nombrerol)
        {

            $strNombrerol = $nombrerol;
            //dep($strNombrerol);
            $arrData = $this->model->busnomRoldevid($strNombrerol); 
            //dep($arrData);
            echo json_encode($arrData, JSON_UNESCAPED_UNICODE);


        }



        //NUEVO ROL O ACTUALIZA UN ROL  - BTN ACTUALIZAR -
        public function setRol()
        {
            //$this->nuevo_edit = intval($_POST['tipoForm']);
            $this->intIdrol = intval($_POST['idRol']);
            //var_dump($this->intIdrol);
            if($this->intIdrol == 0)
            {
                //NUEVO ROL
                $autorizacion = new Gate();
                $request = $autorizacion->permisoRol('crearRol', 3); //MANDA EL PERMISO A GATE QUE TIENE EJM 6
                //dep($request);
                
                if (!$request)
                {
                    //echo 'no autorizado';
                    $arrResponse = array('status' => false, 'msg' => ' =(  NO estas Autorizado para Crear Nuevo Rol');
                    echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
                    die();

                }    

            }else{
                
                //EDITAR ROL
                $autorizacion = new Gate();
                $request = $autorizacion->permisoRol('actualizarRol', 4); //MANDA EL PERMISO A GATE QUE TIENE EJM 6
                //dep($request);
                
                if (!$request)
                {
                    //echo 'no autorizado';
                    $arrResponse = array('status' => false, 'msg' => ' =(  NO estas Autorizado para Actualizar los Roles');
                    echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
                    die();

                }    

            }



            // $autorizacion = new Gate();
            // $autorizacion->permisoRol('nuevoRol', 3); //MANDA EL PERMISO QUE TIENE ES 6


            //dep($_POST);

            $this->intIdrol = strClean($_POST['idRol']);
            $strRol = strClean($_POST['txtNombre']);
            $strDescripcion = strClean($_POST['txtDescripcion']);
            $intStatus = intval($_POST['listStatus']);
            $arrPermisos = $_POST['permission'];

            //$arrPermisos = implode(',', $arrPermisosnew );

            //dep($arrPermisos);
            
            //$request_rol = $this->model->insertRol($strRol, $strDescripcion, $intStatus);

            if($this->intIdrol == 0)
            {
                //NUEVO       YA ACTUALIZAR BTN GUARDAR PASO 2
                $request_rol = $this->model->insertRol($strRol, $strDescripcion, $intStatus, $arrPermisos);
                $this->option = 1;
            
            }else{
                
                //ACTUALIZAR     YA ACTUALIZAR BTN ACTUALIZAR PASO 2
                $request_rol = $this->model->updateRol($this->intIdrol, $strRol, $strDescripcion, $intStatus);
                $this->option = 2;

            }



            if($request_rol > 0)
            {

                if($this->option == 1)
                {
                    $arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
                }else{
                    $arrResponse = array('status' => true, 'msg' => 'Datos Actualizados Correctamente');
                }      
                
                //$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
            
            }else if($request_rol == 'exist')
            {
                $arrResponse = array('status' => false, 'msg' => '¡Atencion el Rol Ya Existe!.');
            
            }else{

                $arrResponse = array('status' => false, 'msg' => 'No es posible almacenar los datos.');
            }

            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
            die();

        }


        
        //ELIMINAR UN ROL AUNQUE EN REALIDAD SE HACE UN UPDATE
        public function delRol()
        {
            
            //Gate::authorize('haveacess', 'role.create');//ORIGINAL

            //Gate::authorize('haveaccess', 9);


            //authorize('haveacess', '9');

            //Gato::authorize('haveacess', '9');
            //$eliminar = "elimina";
            $autorizacion = new Gate();
            $request = $autorizacion->permisoRol('eliminarRol', 5); //MANDA EL PERMISO A GATE QUE TIENE EJM 9
            //dep($request);
            
            if (!$request)
            {
                //echo 'no autorizado';
                $arrResponse = array('status' => false, 'msg' => ' =(  NO estas Autorizado para ELIMINAR');
                echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
                die();

            }
            
            
            //dep($eliminar);
            //echo $autorizacion->permisoRol();
            
            //$autorizacion->permisoRol();


            
            if($_POST)
            {
                $intIdrol = intval($_POST['idrol']);
                $requestDelete = $this->model->deleteRol($intIdrol);
                if($requestDelete == 'ok')
                {
                    $arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el rol');

                }else if( $requestDelete == 'exist' )
                {
                    $arrResponse = array('status' => false, 'msg' => 'No es posible eliminar un rol asociado al usuario.');
                }else{
                    $arrResponse = array('status' => false, 'msg' => 'Error al eliminar el rol.');
                }
                echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
            }
            die();
        }



        //BUSCAR PERMISOS PARA LOS ROLES
        public function getBuscaPermrol()
        {
            
            //$intIdrol = $idrol;
            $arrData = $this->model->selectpermrol(); 
            //dep($arrData); //tengo todos los permisos que concuerdan con los criterios de busqueda

            return $arrData;
            //echo json_encode($arrData, JSON_UNESCAPED_UNICODE);

            
        }
        
        
       

    }
?>
