<?php

    
    class Registrarse extends Controllers{

        public function __construct()
        {

           

            //session_start();
            if(empty($_SESSION['login']))
            {
                //header('Location: '.base_url().'/login');
                //header('Location: '.base_url().'/dashboard');
                
               
                //$_SESSION['userData'] = $arrData;
                $_SESSION['userData']['nombre'] = 'Invitado';
                $_SESSION['userData']['nombrerol'] = 'Usuario Invitado';
            }

            parent::__construct();
            
        }



        public function registrarse()
        {
            //echo "Mensage desde el controlador";
            $data['page_id'] = 6;
            $data['page_tag'] = "Registrarse";
            $data['page_title'] = "Pagina De Registro";
            $data['page_name'] = "Registro";
            $data['page_functions_js'] = "functions_ppalusuarios.js";
            $data['page_content'] = "contacto :Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non eum, magni harum repudiandae ipsa vel nisi dolor, rerum aliquam aliquid ipsam. Incidunt consequatur, nulla cum ex eveniet vel saepe excepturi.";

            $this->views->getView($this, "registrarse", $data);
            //$viewsregistrarse  = new Views($this, "registrarse", $data);
        }



        public function getRegistros()
        {
            //$this->views->getView($this, "registro");

            $arrData = $this->model->selectUsuarios();
            //dep($arrData);
            echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
            die();
        }    

        
        public function setUsuario()
        {
           

            
            //dep($_POST);
           
            $usuario = $_POST['nombreregfor'];
            $correo = $_POST['correoregfor'];
            $clave = $_POST['claveregfor'];
            $clave2 = $_POST['claveregfor2'];
            $telefono = $_POST['telefonoregfor'];

                        
            $request_usuario = $this->model->insertUsuario($usuario, $correo, $clave, $clave2, $telefono); 
            
            //dep($request_usuario); // id=297
            if($request_usuario > 0)
            {
            
                $arrResponse = array('status' => true, 'msg' => 'Datos Guardados Y LOGIN Activado');

                

                $arrData = $this->model->getUsuarioreg($request_usuario);

                //dep($arrData); //trae todos los datos del usuario
                
                //session_start();

                $_SESSION['idUser'] =  $arrData[0]['idpersona'];
                $_SESSION['login'] =  true;

                $arrData = $this->model->sessionLoginReg($_SESSION['idUser']);
                $_SESSION['userData'] = $arrData;

               
                //dep($arrData);
                // $arrResponse = array('status' => true, 'msg' => 'Iniciaste sesion');


            
            }else if($request_usuario == 'exist'){

                $arrResponse = array('status' => false, 'msg' => '¡Atencion el correo de Usuario Ya EXISTE.!');    

            }else if($request_usuario == 'contra'){

                $arrResponse = array('status' => false, 'msg' => 'Las Contraseñas no COINCIDEN.' );
            
            }else{
                
                $arrResponse = array('status' => false, 'msg' => 'No es prosible almacenar los Datos.' );

            }
            

            //echo json_encode('Correcto:<br>Usuario: '.$usuario.'<br>'.$correo);
            echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
            die();

        }


////////////////////////////////////////////////////////////////////////ojo inglogin////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



        public function ingLogin()
        {

            //session_start();

            //dep($_POST);

            $correolog = $_POST['correologfor'];
            $clavelog = $_POST['clavelogfor'];

            //var_dump($correolog);
            //var_dump($clavelog);
            $request_login = $this->model->insertLogin($correolog, $clavelog); 

            //var_dump($request_login);
            //dep($request_login); //trae un solo usuario con toda la data                   
            
            

            // if (isset($_SESSION['usuario']))
            if ($request_login > 0)
            {
            
                $arrData = $request_login;
                if ($arrData['status'] == 1)
                {

                    //session_start();

                     $_SESSION['idUser'] =  $arrData['idpersona'];
                     $_SESSION['login'] =  true;

                     $arrData = $this->model->sessionLoginReg($_SESSION['idUser']);
                     $_SESSION['userData'] = $arrData;
                     //dep($arrData);
                     
                     
                     $arrResponse = array('status' => true, 'msg' => 'Muy bien Iniciaste Sesion...');

                }else{

                    $arrResponse = array('status' => false, 'msg' => 'El usuario esta inactivo =(');

                }

                
            
            }else if($request_login == 'nocontra'){

                $arrResponse = array('status' => false, 'msg' => '¡Atencion La contraseña no coincide..o NO es.. !');    

            }else if($request_login == 'nocorreo'){

                $arrResponse = array('status' => false, 'msg' => 'El Correo de USUARIO No existe' );
            
            }else{
                
                $arrResponse = array('status' => false, 'msg' => 'No es prosible almacenar los Datos. LOGIN' );

            }
            

            //echo json_encode('Correcto:<br>Usuario: '.$usuario.'<br>'.$correo);
            echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
            die();


        }

        public function cerrarSesion(){


            // Inicializar la sesión.
            // Si está usando session_name("algo"), ¡no lo olvide ahora!
            session_start();

            // Destruir todas las variables de sesión.
            $_SESSION = array();

            // Si se desea destruir la sesión completamente, borre también la cookie de sesión.
            // Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000,
                    $params["path"], $params["domain"],
                    $params["secure"], $params["httponly"]
                );
            }

            // Finalmente, destruir la sesión.
            session_destroy();

            header('Location: http://localhost/doctoreeedevelop');
        }



    }





?>