<?php

    require_once("Config/Config.php");
    require_once("Helpers/Helpers.php");
    //require_once("Autenticacion/Autenticacion.php");


    require_once("Controllers/Router.php");

    
    //$url = !empty ($_GET['url']) ? $_GET['url'] : 'home/home'; //antes
    $route =  isset ($_GET['url']) ? $_GET['url'] : 'home/home';


    $doctoreee = new Router($route);
    
    
    //$arrUrl = explode("/", $url); //antes
    $arrUrl = explode("/", $route);

    //echo $url;

    $controller = $arrUrl[0]; 
    $method = $arrUrl[0];
    $params = "";

    //echo $controller;
    //exit();

    if (!empty($arrUrl[1]))
    {
        if ($arrUrl[1] != "")
        {
            $method = $arrUrl[1];
        }
    }

    //print_r($arrUrl);

    

    if (!empty($arrUrl[2]))
    {
        if ($arrUrl[2] != "")
        {
            for ($i=2; $i < count($arrUrl); $i++)
            {
                $params .= $arrUrl[$i]. ',';

            }

            $params = trim($params,',');
            //echo $params;
        }
    }    

    //echo "controlador: ". $controller. '-metodo:'.$method;


   require_once("Libraries/Core/Autoload.php");

   require_once("Libraries/Core/Load.php");


    // echo "<br>";
    // echo "controlador: ". $controller;
    // echo "<br>";
    // echo "metodo: ". $method;
    // echo "<br>";
    // echo "parametros: ". $params;





?>