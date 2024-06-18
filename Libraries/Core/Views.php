<?php

    class Views{

        
        
        
        /*function __construct($controller, $view, $data="")
        {

            $controller = get_class($controller);

            if ($controller == "Home")
            {
                $view = "Views/" .$view.".php";
                
                
                
            }else{
                $view = "Views/" . $controller."/".$view.".php";
                        
            }
            
                require_once($view);
                
        }*/
         
        
        
        function getView($controller, $view, $data="") 
        {
        
            
            $controller = get_class($controller);
            
            if ($controller == "Home")
            {
                $view = "Views/" .$view.".php";              
                
            }else{
                $view = "Views/" . $controller."/".$view.".php";
                        
            }
            
            require_once($view);
                
        }
            
        
        
        //function getPasarvar($controller, $views, $key="", $value=""){
        /*function getPasarvar($data=[]){ 
            //var_dump($variablepasada);
            //var_dump($data);
            
        }*/
        
        
        
    }
    
    //$pasarvar = new Home();
    //$variablepasada = $pasarvar->getbusca1Img(3);
    //var_dump($_POST);
    
    