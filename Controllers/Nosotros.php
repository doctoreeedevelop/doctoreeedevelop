<?php

    class Nosotros extends Controllers{

        public function __construct()
        {
            parent::__construct();
            
        }

        public function nosotros()
        {
            //echo "Mensage desde el controlador";
            $data['page_id'] = 3;
            $data['page_tag'] = "Nosotros";
            $data['page_title'] = "Pagina De Nosotros";
            $data['page_name'] = "Nosotros";
            $data['page_content'] = "contacto :Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non eum, magni harum repudiandae ipsa vel nisi dolor, rerum aliquam aliquid ipsam. Incidunt consequatur, nulla cum ex eveniet vel saepe excepturi.";

            $this->views->getView($this, "nosotros", $data);
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


        // public function insertar()
        // {
        //     $data = $this->model->setUser("Fernandos", 25);
        //     $data = $this->model->setUser("Alex", 15);
        //     print_r($data);
        // }    

        
        // public function verusuario($id)
        // {
        //     $data = $this->model->getUser($id);
        //     print_r($data);
        // }    

        
        // public function actualizar()
        // {
        //     $data = $this->model->updateUser(1,"Roberto",20);
        //     print_r($data);
        // }

        
        // public function verusuarios()
        // {
        //     $data = $this->model->getUsers();
        //     print_r($data);
        // }

        
        // public function eliminarusuario($id)
        // {
        //     $data = $this->model->delUser($id);
        //     print_r($data);
        // }




    }





?>