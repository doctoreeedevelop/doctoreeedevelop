<?php

    //ini_set('display_errors', 1);
    //ini_set('display_startup_errors', 1);
    //error_reporting(E_ALL);

    
    //require_once("Libraries/Core/Autoload.php");



    //require_once("../Config/Config.php");
    //require_once("../Libraries/Core/Conexion.php");


    class UserRegister extends Conexion {

  
    
        public $conexion;
        public $objUsuario;

        //public $userfin;
        //public static $userfin;


        public function __construct()
        {
              $this->conexion = new Conexion();
              $this->conexion = $this->conexion->conect();
              $this->getUserregistrado();
              
              
              //session_start(); 
              //$this->getidregistrado();
              
            
        }

        //PARA QUE NO PARAEZCA ERROR EN EL METODO 
        public function UserRegister()
        {
          return false;
        }

       
        // public function UserRegister()
        // {
        //     //echo "Mensage desde el controlador";
        //     $data['page_id'] = 3;
        //     $data['page_tag'] = "Roles";
        //     $data['page_title'] = "Roles";
        //     $data['page_name'] = "rol_usuario";
        //     //$data['page_functions_js'] = "functions_roles.js";
            

        //     //$this->views->getView($this, "roles", $data);
        //     //$this->views->getView($this, "header", $data);
        // }
  
        public function getUserregistrado()
        {

          if (isset($_SESSION['idUser']))
          
          {
            
            $userAutenti = $_SESSION['idUser'];

            //$objUsuario = new stdClass();
            //$listaUsuario = [];

            $sql = "SELECT * FROM persona WHERE idpersona = '$userAutenti'";
            $execute = $this->conexion->query($sql);
            $request = $execute->fetch(PDO::FETCH_ASSOC);
            
            
            
            //dep($request);
            //$this->userfin = $request[0]['idpersona'];      
            //self::$userfin = $request[0]['idpersona'];
            //dep($this->userfin);
            //dep($request[0]['idpersona']);
            //return $request;
            //return $this->userfin;
            //print_r($request);
            
            $this->objUsuario = $request;
            
            
            //echo json_encode($this->objUsuario, JSON_UNESCAPED_UNICODE);
            
          }else{

            $request = false;
            //echo json_encode($request, JSON_UNESCAPED_UNICODE);

          }

        }
        
        
        // public function getidregistrado()
        // {
        //   echo 'desde getidregistrado'; 
        //   dep($this->userfin);  
        //   return $this->userfin;

        // }
        
        
      
      
}

