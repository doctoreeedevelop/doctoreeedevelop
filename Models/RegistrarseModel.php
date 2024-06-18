<?php

    //session_start();


    class RegistrarseModel extends Mysql{

        
        
        public $intIdusuario;
        
        //registro variables insertUsuario
        public $usuario;
        public $correo;
        public $clave;
        public $clave2;
        public $telefono;
        public $rolid;


        
        public $contrasena;

        //login
        public $correolog;
        public $clavelog;
        
        function __construct()
        {
            //echo "Mensaje del modelo Home ";

            parent::__construct(); 
        }

        public function selectUsuarios()
        {
            //Busca Usarios
            $sql = "SELECT * FROM persona";
            $request = $this->select_all($sql);
            return $request;

        }


        
        //INSERTAR NUEVO USUARIO
        public function insertUsuario(string $usuario, string $correo, string $clave, string $clave2, string $telefono )
        {
           
               
            
            $return = "";
            $this->usuario = $usuario;
            $this->correo = $correo;
            $this->clave = $clave;
            $this->clave2 = $clave2;                      
            $this->telefono = $telefono;
            $this->rolid = 3;
            $this->status = 1;

            
            $sql = "SELECT * FROM persona WHERE email_user = '{$this->correo}'";
            $request = $this->select_all($sql);
            //dep($request); //mio todos los datos del form
            

            $this->contrasena = password_hash($this->clave, PASSWORD_DEFAULT);
            //$this->contrasena = hash("SHA256", $this->clave);
            if (password_verify($clave2, $this->contrasena))
            {           
            
                if(empty($request))
                {

                    $query_insert = "INSERT INTO persona (nombre, telefono, email_user, password, rolid, status) VALUES (?,?,?,?,?,?)";
                    $arrData = array($this->usuario, $this->telefono ,$this->correo, $this->contrasena,  $this->rolid, $this->status);
                    $request_insert = $this->insert($query_insert, $arrData);
                    
                    
                    $return = $request_insert;
                    //dep($request_insert);

                }else{
                    $return = "exist";
                }
            }else{
                     $return = "contra";
            }
            return $return; 
        }


        //LOGIN RECIBE PASSWORD Y CORREO PARA PROCESAR         
        public function insertLogin(string $correolog, string $clavelog)
        {

            $return = '';
            $this->correolog = $correolog;
            $this->clavelog = $clavelog;

            //var_dump($this->correolog);
            //var_dump($this->clavelog);
            
            $sql = "SELECT * FROM persona WHERE email_user = '{$this->correolog}'";
            $request = $this->select($sql);

            
            //dep($request);//recibe todos los datos del usuario 
            //dep($request['password']);
            //var_dump($request);
            
            if (empty($request))
            {
                $return = "nocorreo"; //nose encontro el correo usuario
                return $return; 
                die();
                      
            }

            if(password_verify($this->clavelog, $request['password']))
            {
                
                 //echo json_encode('si son iguales');
                //$_SESSION['usuario'] = $this->correolog;
                //return $_SESSION['usuario'];
                //return true;
                //return $_SESSION['usuario'];

                return $request;

            }else{
                
                $return = "nocontra";   //las contraseñas no coinciden
                return $return;
                die();

            }
            return $return;

           
        }



        //BUSCA UN SOLO USUARIO  
        public function getUsuarioreg($request_usuario)
        {
            $this->intIdusuario = $request_usuario;
            $sql = "SELECT * FROM persona WHERE idpersona = '{$this->intIdusuario}'";
            $request = $this->select_all($sql);
            //dep($request);// retorna todos los datos
            return $request;
            

        }


        
        //BUSCA USUARIO Y CREA VARIABLES DE SESION CON CONSULTA EN DOS TABLAS
        public function sessionLoginReg(int $iduser)
        {

            $this->intIdUsuario = $iduser;

            //BUSCAR ROLE

            $sql = "SELECT   p.idpersona,
                             p.nombre,
                             p.telefono,
                             p.email_user,
                             r.idrol,
                             r.nombrerol,
                             p.status
                     FROM persona p
                     INNER JOIN rol r
                     ON p.rolid = r.idrol
                     WHERE p.idpersona = $this->intIdUsuario";

            //$sql = "SELECT * FROM persona";

            $request = $this->select($sql);
            //dep($request);
            return $request;
        
        }


        // public function cerrarSesion(){


        //     // Inicializar la sesión.
        //     // Si está usando session_name("algo"), ¡no lo olvide ahora!
        //     session_start();

        //     // Destruir todas las variables de sesión.
        //     $_SESSION = array();

        //     // Si se desea destruir la sesión completamente, borre también la cookie de sesión.
        //     // Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
        //     if (ini_get("session.use_cookies")) {
        //         $params = session_get_cookie_params();
        //         setcookie(session_name(), '', time() - 42000,
        //             $params["path"], $params["domain"],
        //             $params["secure"], $params["httponly"]
        //         );
        //     }

        //     // Finalmente, destruir la sesión.
        //     session_destroy();
        // }


    }