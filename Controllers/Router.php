<?php



class Router {

  public $route;

  public function __construct($route)
  {
      if(!isset($_SESSION))
      {
              //session_start();
      
              $_SESSION['ok'] = false;
              $_SESSION['login'] =  false;
      
    


            session_start();
            if(empty($_SESSION['login']))
            {
                 //header('Location: '.base_url().'/login');
                 //header('Location: '.base_url().'/dashboard');
                
               
                 //$_SESSION['userData'] = $arrData;
                 $_SESSION['userData']['nombre'] = 'Usuario';
                 $_SESSION['userData']['nombrerol'] = 'Usuario Invitado';
            }

      }

    
  }





}