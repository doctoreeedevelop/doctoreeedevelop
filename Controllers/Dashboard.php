<?php

    class Dashboard extends Controllers{

        public function __construct()
        {
                
            parent::__construct();

            // session_start();
            // if(empty($_SESSION['login']))
            // {
            //     //header('Location: '.base_url().'/login');
            //     //header('Location: '.base_url().'/dashboard');
                
               
            //     //$_SESSION['userData'] = $arrData;
            //     $_SESSION['userData']['nombre'] = 'Invitado';
            //     $_SESSION['userData']['nombrerol'] = 'Usuario Invitado';
            // }
            
        }

        public function dashboard()
        {
            //echo "Mensage desde el controlador";
            $data['page_id'] = 2;
            $data['page_tag'] = "Panel de Control Principal";
            $data['page_title'] = "Panel de Control Principal";
            $data['page_name'] = "dashboard";
            $data['page_functions_js'] = "functions_dashboard.js";

            

            $this->views->getView($this, "dashboard", $data);
            //$viewsdashboard  = new Views($this, "dashboard", $data);
        }


        
        //BUSCA TODOS LOS USUARIOS SOLO LECTURA EN EL DASHBOARD        
        public function getUsuariosDash()
        {
            $arrData = $this->model->selectUsuariosDash();
            //dep($arrData);

            for ($i=0; $i < count($arrData); $i++)
            {
                if($arrData[$i]['status']==1)
                {
                    $arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';

                }else{
                    $arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
                }

                //  $arrData[$i]['options'] = '<div class="text-center">
                
                // <button class="permiso btn btn-secondary btn-sm btnPermisoUser" rl="'.$arrData[$i]['idpersona'].'" title="Permisos"><i class="fa fa-key"></i>
                // </button>
                    
                // <button class="editar btn btn-primary btn-sm btnEditUser" rl="'.$arrData[$i]['idpersona'].'" title="Editar"><i class="fa fa-pencil"></i></button>

                // <button class="eliminar btn btn-danger btn-sm btnDelUser" rl="'.$arrData[$i]['idpersona'].'" title="Eliminar"><i class="fa fa-trash"></i></button>
                
                // </div>';

            }

            echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
            die();
        }


         //PERFIL DE USUARIO
         public function perfil()
         {
             //echo "Mensage desde el controlador";
             $data['page_id'] = 3;
             $data['page_tag'] = "Perfil";
             $data['page_title'] = "Perfil De Usuario";
             $data['page_name'] = "perfil";
             $data['page_functions_js'] = "functions_dashboard.js";
            
 
             $this->views->getView($this, "perfil", $data);
         }
 
        
      
    }




