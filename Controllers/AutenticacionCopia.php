<?php 

require_once('Controllers/UserRegister.php');


//class Autenticacion extends UserRegister{
  class Autenticacion {





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

    dep($variable->objUsuario['idpersona']);

    $userAut  = $variable->objUsuario['idpersona']; //ID USUARIO AUTENTICADO
    $rolAut  = $variable->objUsuario['rolid']; //ID USUARIO AUTENTICADO
    
    



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
  }
  



}