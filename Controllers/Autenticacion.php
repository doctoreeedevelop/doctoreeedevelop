<?php 

require_once('Controllers/UserRegister.php');
require_once('Controllers/Gate.php');
require_once('Controllers/Usuarios.php');

//class Autenticacion extends UserRegister{
  class Autenticacion {


   public $userAut;
   public $rolAut;


  public function __construct()
  {

      //parent::__construct();
      //session_start(); 
      //$arrData = $_SESSION['userData'];
      //dep($arrData);
      //echo 'hola';
      //echo UserRegister::$userfin;
      //dep($this->userfin);
      //$this->userRegistrado();
      //$this->ensayoimpime();
      //$this->getUserregistrado();
      //echo $request;
      //$pasavar = new UserRegister();
      //echo $pasavar->userfin;
      //dep($pasavar->userfin);
      $this->userRegistrado();
  }


  //PARA QUE NO PARAEZCA ERROR EN EL METODO 
  public function Autenticacion()
  {
    return false;
  }


  public function userRegistrado()
  {
    
    //json_encode( $variable = new UserRegister(), true);

    $variable = new UserRegister();
    //json_encode($variable[0]->'nombre');
    $variable->objUsuario;

    //dep($variable->objUsuario['idpersona']);

    $this->userAut  = $variable->objUsuario['idpersona']; //ID USUARIO AUTENTICADO  197
    $this->rolAut  = $variable->objUsuario['rolid']; //ID USUARIO AUTENTICADO       26 admin
    
    //dep($this->userAut); // 197
    //dep($this->rolAut);  // 26
    
    //Gate::define('haveaccess', function (User $user, $perm){} //ORIGINAL
    //Gate::define('haveaccess',  function ( $userAut , $rolAut, $perm )
    
    // Gate::define('haveaccess',  function ()
    // {
    //   //dep($perm);
    //   var_dump($this->userAut);
    //   dep($this->userAut);
    //   //dep($rolAut);
    //   //return true;
    //   return $user->havePermission($perm); //ORIGINAL OJO
    // });   
   
  //  $definenuevo = new Gate();
  //  $pasarperm = $definenuevo->intIdperm;
  //  dep($pasarperm);   

   //$idtraepermiso = $definenuevo->define($pasarperm);   
   //var_dump($idtraepermiso);
   //$definenuevo->define($rolAut); 
  //  $definenuevo->nuevadefine( function()
  //  {
  //   //$this->userAut;
  //   //dep($this->userAut);
  //   //$usuarionuevo = new Usuarios();
  //   //$permiso = $usuarionuevo->havePermission('permizos');
  //   $permiso = 2;
  //   //dep($permiso);
  //   //var_dump($permiso);
  //   return $permiso;
  //  });   







    //dep($rolAut);
    //dep($variable->objUsuario->array->idpersona);

    //var_dump($variable); 
    
    
    //$json =[];
    //var_dump($pasavar['idpersona']);

    //$WorkingArray = json_decode(json_encode($pasavar),true);
    //dep($WorkingArray);
    
    //$resultado = json_decode($pasavar, true);
    //dep($resultado);
    
    //$json = json_decode($pasavar);
    
    //$arrMedia = $json->data;
    //print_r($arrMedia);
    //print_r($request);
    //var_dump($pasavar);
    
    
    //$datosdos = $pasavar;
    //dep($Autenticacion);
    //$datos = json_decode(UserRegister());
    
    //print_r($datos);
    
    //print_r($pasavar->userfin);
    //dep($this->userfin);
    //echo 'desde Autenticacion';
    
    //echo $pasavar->getidregistrado();
    
    //$arrData = $_SESSION['userData'];
    //Gato::define('haveaccess', function (User $user){
    //return true;

    //});
    //   return $user->havePermission($perm); //ORIGINAL OJO
  }

  public function define($perm)
    {
      $intperm = $perm;
      //dep($perm);
      //echo json_encode($intidperm, JSON_UNESCAPED_UNICODE);
      $user = new Usuarios();
      return $user->havePermission($intperm); 
      //$return = $user->havePermission($intperm); 
      //var_dump($return);
    }
  



}