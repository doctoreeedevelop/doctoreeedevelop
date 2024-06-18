<?php

class Login extends Controllers{

    public function __construct()
    {
        
        //session_start();
        
        if(isset($_SESSION['login']))
        {
            header('Location: '.base_url().'/dashboard');
        }

        parent::__construct();
        
    }

    public function login()
    {
        //echo "Mensage desde el controlador";
        $data['page_id'] = 1;
        $data['page_tag'] = "Login";
        $data['page_title'] = "Pagina Login";
        $data['page_name'] = "login";
        $data['page_functions_js'] = "functions_login.js";

        $this->views->getView($this, "login", $data);
        //$viewlogin = new views($this, "login", $data);
    }


    
    //LOGIN DE USUARIO POR PAGINA DE ADMIN
    public function loginUser()
    {
        //var_dump($_POST);
        //dep($_POST);
        
        if($_POST)
        {
            if(empty($_POST['txtEmail']) || empty($_POST['txtPassword']))
            {
                $arrResponse = array('status' => false, 'msg' => 'Error de datos Vacios');
            
            }else{

                // $strUsuario = strtolower(strClean($_POST['txtEmail']));
                // $strPassword = hash("SHA256", $_POST['txtPassword']);
                // $requestUser = $this->model->loginUser($strUsuario, $strPassword);
                // dep($requestUser);


                $strUsuario = $_POST['txtEmail'];
                $strPassword = $_POST['txtPassword'];
                //$Passencrip = password_hash($strPassword, PASSWORD_DEFAULT);

                //dep($strUsuario);
                $requestUser = $this->model->loginUser($strUsuario, $strPassword);
                //dep($requestUser);
                //var_dump($requestUser);

                if ($requestUser == 'noexiste')
                {
                    $arrResponse = array('status' => false, 'msg' => 'El Correo No existe');
                
                }else if ($requestUser == 'nocoincide')
                {
                    $arrResponse = array('status' => false, 'msg' => 'El correo no coincide con la contraseña... es incorrecta');
                }else{
                    
                    $arrData = $requestUser;
                    //dep($arrData);
                    if ($arrData['status'] == 1)
                    {

                        $_SESSION['idUser'] =  $arrData['idpersona'];
                        $_SESSION['login'] =  true;

                        $arrData = $this->model->sessionLogin($_SESSION['idUser']);
                        $_SESSION['userData'] = $arrData;
                        //dep($arrData);
                        $arrResponse = array('status' => true, 'msg' => 'Iniciaste sesion');

                    }else{

                       
                        $arrResponse = array('status' => false, 'msg' => 'El usuario esta inactivo =(');

                    }

                    
                }


            }

            //var_dump($arrResponse);
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);

        }

        die();
    }

}