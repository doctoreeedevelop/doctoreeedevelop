<?php

    //retorna la URL del proyecto
    function base_url()
    {
        
        return BASE_URL;
    }
    
    function media()
    {
        return BASE_URL."/Assets";
       
    }

    // funciones template principal
    function header_ppal($data="")
    {
        $view_header = "Views/Template/header_ppal.php";
        require_once($view_header);
    }
    
    function footer_ppal($data="")
    {
        $view_footer = "Views/Template/footer_ppal.php";
        require_once($view_footer);
    }

    
    // funciones template de Administracion    
    function headerAdmin($data="")
    {
        $view_header = "Views/Template/header_admin.php";
        require_once($view_header);
    }
    
    function footerAdmin($data="")
    {
        $view_footer = "Views/Template/footer_admin.php";
        require_once($view_footer);
    }       
    
    //Muestra informacion formateada
    function dep($data)
    {
        
        $format  = print_r('<pre>');
        $format .= print_r($data);
        $format .= print_r('</pre>');
        return $format;

    }

    function getModal(string $nameModal, $data)
    {
        $view_modal= "Views/Template/Modals/{$nameModal}.php";
        require_once $view_modal;
    }

    

    function strClean($strCadena)
    {
          $string = preg_replace(['/\s+/','/^\s|\s$/'],[' ',''], $strCadena);
          $string = trim($string); //elimina espacios en blanco al principio y al final
          $string = stripslashes($string); //elimina las \ invertidas 
          $string = str_ireplace("<script>","",$string);
          $string = str_ireplace("</script>","",$string);
          $string = str_ireplace("<script src>","",$string);
          $string = str_ireplace("<script type=>","",$string);


          return $string;
    }


    //Genera una contraseña de 10 caracteres
    function passGenerator($length = 10)
    {
        $pass = "";
        $longitudPass = $length;
        $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $longitudCadena = strlen($cadena);

        for ($i=1; $i<=$longitudPass; $i++)
        {
            $pos = rand(0,$longitudCadena-1);
            $pass .= substr($cadena,$pos,1);
        }

        return $pass;
    }

    
    
    //Gebera un token de seguridad
    function token()
    {
        $r1 = bin2hex(random_bytes(10));
        $r2 = bin2hex(random_bytes(10));
        $r3 = bin2hex(random_bytes(10));
        $r4 = bin2hex(random_bytes(10));
        $token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
        return $token;
        
    }

    
    
    //Formato para valores monetarios
    function formatmoney($cantidad)
    {
        $cantidad = number_format($cantidad, 2, SPD, SPM);
        return $cantidad;
    }

    

?>