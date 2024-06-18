<?php 

  require_once("Controllers/Roles.php");
  require_once("Controllers/Autenticacion.php");

  class Gate {
      
    
    //public $intperm;
    //public $haveaccess;
    
    public $strPermiso;
    public $intIdperm; //ID DEL PERMISO QUE SE UNDIO EN EL ROL EJM 9
    public $struserAut;
    public $intidAut;


    public $permisobd;

    
    public function __construct()
    {

          
          
          
          //$this->permisoRol($permiso);

    }    

    public function permisoRol(string $permiso, int $idperm)  //ACA LLEGA EL PERMISO DE CADA UNO DE LOS METODOS EJM 9
    {
        
      $this->strPermiso = $permiso;  // pasa este 'eliminarRol'
      $this->intIdperm = $idperm;   //MANADAR ESTE A havePermission de Usuarios 9
      
        //$this->permiso = $permiso;
        //echo json_encode($this->strPermiso);


        //echo json_encode($this->intIdperm);
        //dep($this->intIdperm);

        $mandaridAut = new Autenticacion();
        $request = $mandaridAut->define($this->intIdperm);

        //var_dump($request);
        //dep($request);
        //dep($request[0]['rolid']);
        //$this->define($this->intIdperm);
        
        //return  ;

        $userLogeado = new Autenticacion();
        $userAut = $userLogeado->userAut; //USUARIO LOGUAEADO        2
        $rolAut = $userLogeado->rolAut;  //ROL DEL USUARIO LOGUEADO   2

        //dep($userAut); //2
        //dep($rolAut);  //2
        //settype($rolAut, int);
        // foreach($request as $item)
        // {
        //   if($item[0]['rolid'] = $rolAut){
        //     echo 'yes';
        //     //true;
        //     echo $item['rolid'];
        //   }else{
        //     echo 'no';
        //     //false;
        //   }
        // }

        //dep($request[0]['rolid']);

        for ( $i=0; $i<count($request); $i++)
        {
          
          
            if($request[$i]['rolid'] == $rolAut)
            {
                
                //echo 'yes';
                //$respuesta = true;
                if($request[$i]['permisosid'] == $this->intIdperm)
                {
                       //echo '!!!!!!SIII Autorizado...';
                       $respuesta = true;
                       return $respuesta; 
                
                }else{
                      //echo  'NO autorizado 2 ';
                      $respuesta = false;
                }
              
            }else{
                
                //echo 'NO autorizado 1';
                $respuesta = false;
            
            }
        }

        return $respuesta;
        






    }

    // public function define($idAut)
    // {
    //     //$this->struserAut = $userAut;
    //     $this->intidAut = $idAut;

    //     //$mandaridAut = new Autenticacion();
    //     //$mandaridAut->define($this->intidAut);

    //     //echo json_encode($this->struserAut);
    //     //echo json_encode($this->intidAut);
    //     //dep($this->intidAut);

    // }

    // public function nuevadefine($permisobd)
    // {
    //       $this->$permisobd = $permisobd;
      
    //       var_dump($this->$permisobd);
    //       //dep($permisobd);
    //       //echo json_encode($permisobd);
    // }

    



    ///////////////////////////////////////////////////////////////////////////////
    // public function __construct(string $haveaccess, int $permisos)
    // {

    //    $this->haveaccess = $haveaccess;
    //    $this->permisos = $permisos;
       
       
    //    $this->authorize('haveaccess', intperm);
    //    $this->getvariable();

    // }






    // public static function define() 
    // {
    //   //dep($haveaccess);
    // }

    
    //public static $authorize = 6 ;

    // public static function authorize( $haveaccess , $perm)
    // {
        
    //   self::$intperm = $perm; 
    //   dep($haveaccess);
    //     //dep($perm);

    // }

    // public function getvariable(){
    //  echo self::$intperm;

    // }   

  }
  
  //Gate::authorize('haveaccess', 'role.create'); //ERSTE ES EL LLAMADO DE LA FUNCION