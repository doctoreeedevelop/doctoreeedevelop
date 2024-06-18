<?php

    class LoginModel extends Mysql{


        private $intIdUsuario;
        private $strUsuario;
        private $strPassword;
        private $strToken;


        function __construct()
        {
            parent::__construct(); 
        
        }
        

        public function loginUser(string $usuario, string $password)
        {

                
                $this->strUsuario = $usuario;
                $this->strPassword = $password;
                
                // echo $sql = "SELECT idpersona, status FROM persona WHERE
                //        email_user = '$this->strUsuario' and
                //        password =   '$this->strPassword' and
                //        status != 0 ";

                //        exit;
                // $request = $this->select($sql);
                // return $request;

                //dep($this->strUsuario);
                
                $sql = "SELECT * FROM persona WHERE 
                        email_user = '$this->strUsuario'"; //OJO DEBE LLEVAR LAS COMILLAS
                
                //var_dump($sql);
                $request = $this->select($sql);
                
                //var_dump($request);
                
                if(!$request)
                {
                    //dep($request);
                    //echo 'no existe usuario';
                    $request = 'noexiste';
                    return $request;
                    die(); 
                } 
                
                //dep($request);
                //echo 'usuario verificado <br>';

                if (password_verify( $this->strPassword, $request['password'])) 
                {
                    //las contraseñas soniguales
                    //echo 'son iguales las contraseñas';
                    
                    return $request;
                
                }else{
                     //las contraseñas NO soniguales
                     //echo 'no son iguales las contraseñas';
                     $request = 'nocoincide';
                     return $request;
                     die(); 
                }
                
                
                return $request;        

        }


        public function sessionLogin(int $iduser)
        {

            $this->intIdUsuario = $iduser;

            //BUSCAR ROLE

            $sql = "SELECT   p.idpersona,
                             p.nombre,
                             p.telefono,
                             p.email_user,
                             r.idrol,
                             r.nombrerol,
                             p.status
                     FROM persona p
                     INNER JOIN rol r
                     ON p.rolid = r.idrol
                     WHERE p.idpersona = $this->intIdUsuario
                   ";

            //$sql = "SELECT * FROM persona";

            $request = $this->select($sql);
            //dep($request);
            return $request;
        
        }



    }
