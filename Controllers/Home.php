<?php

    class Home extends Controllers{


        public $intIdimg;
        public $arrData1Img;
        public $data;
        public $datos;
        
        

        public function __construct()
        {
            parent::__construct();
            //$this->getbuscaImgtds(); //BUSCA Y CARGA LAS IMAGENES DE LA SECCION 4
            //$arrData1Img = $this->getbusca1Img(); 
            
            //$this->model = new HomeModel();
            //$this->getbusca1Img();
        }
        
        public function home()
        {
            
            //var_dump($_POST);
            //$data['posicion']= $_POST;
            //$data['arrData1Img'] = $this->getbusca1Img(); 

            //$arrData1Img = $this->getbusca1Img(); 

            //print_r($data['arrData1Img']);
            //var_dump($data['arrData1Img']);


            //$data = [

                //1 => $data['page_id'],
                //'Home' => 'page_tag',
                //'Pagina Principal' => 'page_title',
                //$data['page_name'] => "home",
                /* $data['page_content'] = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non eum, magni harum repudiandae ipsa vel nisi dolor, rerum aliquam aliquid ipsam. Incidunt consequatur, nulla cum ex eveniet vel saepe excepturi."; */
                //$data['page_functions_js'] => "functions_home.js",
                //'arrData1Img' => $arrData1Img


            //];


            //$data['page_otra'] = 5;
            //echo "Mensage desde el controlador";
            $data['page_id'] = 1;
            $data['page_tag'] = "Home";
            $data['page_title'] = "Pagina Principal";
            $data['page_name'] = "home";
            // $data['page_content'] = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non eum, magni harum repudiandae ipsa vel nisi dolor, rerum aliquam aliquid ipsam. Incidunt consequatur, nulla cum ex eveniet vel saepe excepturi."; */
            $data['page_functions_js'] = "functions_home.js";

            //$data['arrData1Img'] = 123;
            //$datos['page'] = "home.js";
            //dep($data);
            //$usuarios = 1515151515;
            //$this->views->getView($this, "home", compact('data'));
            //$this->views->getView($this, "home",  array(
                //"usuarios" => $this->arrData1Img,
                //"data"     => $data
            //));
            //dep($data);
            $this->views->getView($this, "home", $data);
            //$viewspasar = new Views($this, "home", $data);
            //$viewspasar = new Views($this, "home", compact("data"));

           

        }

        
        //metodos de prueba

        // public function datos($params)
        // {
        //     echo "datos recibido: ".$params;
        // }

        // public function carrito($params)
        // {
        //     $carrito = $this->model->getCarrito($params);
        //     echo $carrito;
        // }


        public function insertar()
        {
            $data = $this->model->setUser("Fernandos", 25);
            $data = $this->model->setUser("Alex", 15);
            print_r($data);
        }    

        
        public function verusuario($id)
        {
            $data = $this->model->getUser($id);
            print_r($data);
        }    

        
        public function actualizar()
        {
            $data = $this->model->updateUser(1,"Roberto",20);
            print_r($data);
        }

        
        public function verusuarios()
        {
            $data = $this->model->getUsers();
            print_r($data);
        }

        
        public function eliminarusuario($id)
        {
            $data = $this->model->delUser($id);
            print_r($data);
        }

        //FUNCION BUSCA INSERTAR IMAGENES
        public function setImg()
        {}

        //BUSCA TODAS LAS IMAGENES QUE MUESTRA EL HOME EN LA SECCION CUATRO
        public function getbuscaImgtds()
        {

            $arrData = $this->model->selectImagenes(); 
            //$data  = array($this->data, $arrData);
            //print_r($arrData);
            //$this->views->getView($this, "home", $arrData);
            return $arrData;

        }


        //FUNCION BUSCA 1 SOLA IMAGEN SECCION 4    
        public function getbusca1Img()
        {
            
            //dep($idimg);
            if($_POST)
            {
                //var_dump($_POST);
                //var_dump($_POST['idimg']);
                //var_dump($_POST['someData']);
                //dep($_POST);

                $intIdimg = intval($_POST['idimg']);
                //echo $intIdimg;
                
                
                
            //}


            //dep($intIdimg);


            //$this->intIdimg = $idimg;
            //var_dump($intIdimg);

            $arrData1Img = $this->model->select1Img($intIdimg);
            //var_dump($arrData1Img);
            //dep($arrData1Img);
        
            
            //$data = $arrData1Img;

            //$arrData1Img = $this->model->select1Img($this->intIdimg);
            //var_dump($arrData1Img);
            //print_r($arrData1Img); 

            //$datos = $this->arrData1Img;
            //$data = $this->arrData1Img;
            //$data['pasarvar'] = $idimg;

            //array_push( $data, $data['page_tag'] = "Home", $data['idimg'] = $intIdimg );
            //array_push( $data , $arrData1Img );
            //array_push( $data , "holaaaaaaaaaaaaaaa");


            //$data['pasarvarnew'] = $this->intIdimg;
            //$this->data['pasarvarnew'] = "nueva";

            //$data = [

                //'idimg'    => $idimg,
                //'imagenes' => $this->arrData1Img
                //'$arrData1Img' => $arrData1Img
            //];

            //$usuarios = 5;

            //array_push($data , $data['arrData1Img']); 

            //$this->views->getPasavar($this, "home", $datos); 
            
            //return $this->views->getView($this, "imgmodals", array(
                //"usuarios" => $this->arrData1Img,
                //));
                //return $arrData1Img->views->getView($this, "home", $data);
                //return $arrData1Img;
                //session_start();
                //ob_start();
                //$_SESSION['pasarvarnew'] = $idimg; 
                
           
            //$this->views->getView($this, "home", $data);
            //$this->views->getView($this, "home", $arrData1Img); 
            //$this->views->getView($this, "home", compact("arrData1Img", "key" ));
            //$this->views->getPasarvar($this, "home", compact("arrData1Img", "idimg" ));
            //$this->views->getPasavar($this, "home", $data, $idimg);
            //$this->views->getPasarvar( $arrData1Img );
            
            //echo json_encode($this->arrData1Img, JSON_UNESCAPED_UNICODE);
            //echo json_encode($idimg, JSON_UNESCAPED_UNICODE);
            //$viewsnueva = new Views($idimg);     

            //$ensayo = array("pablo", "lina");    

            //$this->views = new Views();

            //$data['arrData1Img'] = $arrData1Img;
            //array_push($data , $data['arrData1Img']); 

            //$data = [
                //'arrData1Img' => $arrData1Img

            //];

            //$viewshome = new Views($this, "home" , compact("arrData1Img"));
            //$viewshome = new Views($this, "home", $data );
            //$viewshome = new Views($this, "home", $arrData1Img );

            //echo $arrData1Img;


            //$datos = json_decode(file_get_contents("http://localhost/doctoreeedevelop/home/getbusca1Img/"), true);
            //print_r($datos);
        

            //$home = $this->home();    

            echo json_encode($arrData1Img, JSON_UNESCAPED_UNICODE);
            //return $arrData1Img;

            }else{
                //$arrData1Img = 1;
            }
            
        

        }


        public function pasarvariable(int $int){

           //var_dump($_POST);



        }
        
        
        




        //FUNCION BUSCA IMAGENES
        public function getbusimgsec4($idimg) {

            $this->intIdimg = intval(strClean($idimg));

            if($this->intIdimg > 0)
            {
                
                $arrDataimg = $this->model->selectImg($this->intIdimg);
                //var_dump($arrData);
                //$this->nuevaapasar = $arrData;
                if(empty($arrDataimg))
                {
                    $arrResponseimg = array('status' => false, 'msg' => 'Imagen No Encontrada.' );
                }else{
                    
                    $arrResponseimg = array('status' => true, 'data' => $arrDataimg );
                    //$data['pasarvar'] = $arrResponse['data'];
                    $this->pasarvar = $arrResponseimg ['data'];
                    //$pasarvar = 'pasada';
                    //dep($arrResponse);
                    //dep($pasarvar);
                    //$this->nuevo_edit = $arrData;
                    //dep($this->nuevo_edit);
                    //$this->views->getView($this,"modalRoles", $datos);
                    //$this->views->getView($this, "roles", $data);
                    //$this->views->getPasavar($this, "roles", compact($data));
                    
                }
                
                
                
            }

            echo json_encode($arrResponseimg, JSON_UNESCAPED_UNICODE);
            die();

        }

       



    }


    



?>