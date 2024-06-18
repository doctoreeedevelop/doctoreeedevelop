<?php



class Usuarios extends Controllers{

        public function __construct()
        {
            
            //session_start(); 
            if(empty($_SESSION['login']))
            {
                header('Location: '.base_url().'/login');
            }
            
            
            parent::__construct();
            
        }


        
        //MUESTRA LA VISTA DE USUARIOS
        public function Usuarios()
        {
             //echo "Mensage desde el controlador";
             $data['page_id'] = 3;
             $data['page_tag'] = "Usuarios";
             $data['page_title'] = "Usuarios <small>DoctoreeeDevelop</small>";
             $data['page_name'] = "usuarios";
             $data['page_functions_js'] = "functions_usuarios.js";
            

             $this->views->getView($this, "usuarios", $data);
             
    
        }   


        //BUSCA TODOS LOS USUARIOS
        public function getUsuarios()
        {
            $arrData = $this->model->selectUsuarios();
            //dep($arrData);

            for ($i=0; $i < count($arrData); $i++)
            {
                if($arrData[$i]['status']==1)
                {
                    $arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';

                }else{
                    $arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
                }

                 $arrData[$i]['options'] = '<div class="text-center">
                
                <button class="permiso btn btn-secondary btn-sm btnPermisoUser" rl="'.$arrData[$i]['idpersona'].'" title="Permisos"><i class="fa fa-key"></i>
                </button>
                    
                <button class="editar btn btn-primary btn-sm btnEditUser" rl="'.$arrData[$i]['idpersona'].'" title="Editar"><i class="fa fa-pencil"></i></button>

                <button class="eliminar btn btn-danger btn-sm btnDelUser" rl="'.$arrData[$i]['idpersona'].'" title="Eliminar"><i class="fa fa-trash"></i></button>
                
                </div>';

            }

            echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
            die();
        }



        
        
        
        //BUSCA SOLO UN USUARIO        
        public function getUser(int $iduser)
        {
            $intIduser = intval(strClean($iduser));
            
            if($intIduser > 0)
            {
                $arrData = $this->model->selectUser($intIduser);
                
                if(empty($arrData))
                {
                    $arrResponse = array('status' => false, 'msg' => 'Datos No Encontrados.' );
                }else{
                    $arrResponse = array('status' => true, 'data' => $arrData);
                }
                echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
            }
            die();    
        }



        //CREA O ACTUALIZA UN USUARIO EN EL FORMULARIO
        public function setUsuario()
        {           

            //dep($_POST);

            $intIduser = intval($_POST['idUsuario']);           
            $usuario =      $_POST['nombreuser'];
            $correo =       $_POST['correouser'];
            $clave =        $_POST['claveuser'];
            $clave2 =       $_POST['claveuser2'];
            $telefono =     $_POST['telefonouser'];
            $listrolid =    $_POST['selnomrol'];   //26
            $liststatus =   $_POST['listStatus'];

            //ojo set usuario
                        
            //$request_usuario = $this->model->insertUsuario($usuario, $correo, $clave, $clave2, $telefono, $listrolid, $liststatus);
            
            if($intIduser == 0)
            {
                //CREAR
                $request_user = $this->model->insertUsuario($usuario, $correo, $clave, $clave2, $telefono, $listrolid, $liststatus);
                $option = 1;
            
            }else{
                
                //ACTUALIZAR
                $request_user = $this->model->updateUser($intIduser, $usuario, $correo, $clave, $clave2, $telefono, $listrolid, $liststatus);
                $option = 2;
                //dep($request_user);

            }

            //var_dump($request_user);

            if($request_user > 0)
            {
                
                if($option == 1)
                {
                    $arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
                }else{
                    $arrResponse = array('status' => true, 'msg' => 'Datos Actualizados Correctamente');
                } 


                // $arrResponse = array('status' => true, 'msg' => 'Datos Guardados');
            
            }else if($request_user == 'exist'){

                $arrResponse = array('status' => false, 'msg' => '¡Atencion el correo de Usuario Ya EXISTE.!');    

            }else if($request_user == 'contra'){

                $arrResponse = array('status' => false, 'msg' => 'Las Contraseñas no COINCIDEN.' );
            
            }else{
                
                $arrResponse = array('status' => false, 'msg' => 'No es prosible almacenar los Datos.' );

            }
            

            //echo json_encode('Correcto:<br>Usuario: '.$usuario.'<br>'.$correo);
            echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
            die();

        }



        //ELIMINAR UN USUARIO 
        public function delUser($iduser)
        {
            
                $intIdrol = $iduser;
                //dep($intIdrol);
            
            if($intIdrol)
            {
                //$intIdrol = intval($_POST['idrol']);
                //dep($intIdrol);

                $requestDelete = $this->model->deleteRol($intIdrol);
                if($requestDelete == 'ok')
                {
                    $arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el Usuario');
               
                }else{
                    $arrResponse = array('status' => false, 'msg' => 'Error al eliminar el Usuario.');
                }
                echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
            }
            die();
        }



        public function havePermission($perm)
        {
            //echo json_encode("prueba", JSON_UNESCAPED_UNICODE);

            $intPerm = $perm;
            

            $requestpermisos = $this->model->permisos_rol($intPerm);

            
            
            return $requestpermisos;
            
            //echo json_encode($requestpermisos, JSON_UNESCAPED_UNICODE);


        }



       





}        