<?php

    class Imagenes extends Controllers{


        public function __construct()
        {

            parent::__construct();

          
            
        }



        public function imagenes()
        {
            //echo "Mensage desde el controlador";
            $data['page_id'] = 3;
            $data['page_tag'] = "Imagenes";
            $data['page_title'] = "Imagenes";
            $data['page_name'] = "img_principal";
            $data['page_functions_js'] = "functions_ppalimagenes.js";
            
            $this->views->getView($this, "imagenes", $data);
            print_r($data);
            
            
        }



        //INSERTAR IMAGENES EN BASE DE DATOS SECCION 4
        publiC function setimagsec4()
        {
            var_dump($_POST);
            
            
            if(isset($_POST)){
                
                $img = $_FILES['imagen'];
                $nombre = $img['name'];
                //print_r($nombre);
                $nombreTemp = $img['tmp_name'];
                $comentario = $_POST['comentario'];
                print_r($comentario);
                $destino = "img/".$nombre;


                $request_img = $this->model->insertImg($nombre, $comentario);
                if($request_img)
                {
                    move_uploaded_file($nombreTemp, $destino);
                }

            }

        } 

    }    