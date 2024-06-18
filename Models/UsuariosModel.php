<?php


    class UsuariosModel extends Mysql {

        public function __construct()
        {
            parent::__construct();
        }


            public $intIduser;
            public $strUsuario; 
            public $strCorreo; 
            public $strClave;
            public $strClave2;
            public $intTelefono;
            public $intRolid;
            public $intStatus;
            public $intPermisos;
        
            public $contrasena;


            public $intRol;



            public $tonken ;
            public $datacreated;


        //BUSCA TODOS LOS REGISTROS
        public function selectUsuarios()
        {
            
            $sql = "SELECT  idpersona,nombre,telefono,email_user,password,datacreated,rolid,status
                    FROM    persona 
                    WHERE   status !=0";  

            $request = $this->select_all($sql);
            //dep($request);
            return $request;
            

        }

        //BUSCA TODOS LOS REGISTROS SOLO LECTURA PARA EL DASHBOARD
        public function selectUsuariosDash()
        {
             
            $sql = "SELECT  idpersona,nombre,telefono,email_user,datacreated,rolid,status
                    FROM    persona 
                    WHERE   status !=0";  
 
            $request = $this->select_all($sql);
            return $request;
 
        }


        
        //BUSCA UN SOLO REGISTRO
        public function selectUser(int $iduser)
        {
            
            $this->intIduser = $iduser;
            $sql = "SELECT * FROM persona WHERE idpersona = '$this->intIduser'";
            $request = $this->select($sql);
            return $request;
        }


        
        //INSERTA LOS USUARIOS
        public function insertUsuario(string $usuario, string $correo, string $clave, string $clave2, int $telefono, int $listrolid, int $liststatus)
        {
           
            $return = "";
            $this->strUsuario = $usuario;
            $this->strCorreo = $correo;
            $this->strClave = $clave;
            $this->strClave2 = $clave2;                      
            $this->intTelefono = $telefono;
            $this->intRolid = $listrolid;
            $this->intStatus = $liststatus;
            
            
            //$this->rolid = 34; //ingresa rolid directo como es por la pagina ppal

            

            
            $sql = "SELECT * FROM persona WHERE email_user = '{$this->strCorreo}'";
            $request = $this->select_all($sql);



            $this->contrasena = password_hash($this->strClave, PASSWORD_DEFAULT);
            if (password_verify($this->strClave2, $this->contrasena))
            {           
            
                if(empty($request))
                {

                    $query_insert = "INSERT INTO persona(nombre, telefono, email_user, password, rolid, status) VALUES (?,?,?,?,?,?)";
                    $arrData = array($this->strUsuario, $this->intTelefono ,$this->strCorreo, $this->contrasena, $this->intRolid, $this->intStatus);
                    $request_insert = $this->insert($query_insert, $arrData);
                    $return = $request_insert;

                }else{
                    $return = "exist";
                }
            }else{
                    $return = "contra";
            }
            return $return; 
        }



        //ACTUALIZA LOS USUARIOS        
        public function updateUser( int $intIduser, string $usuario, string $correo, string $clave, string $clave2, int $telefono, int $listrolid, int $liststatus)
        {
            


            $this->intIduser = $intIduser;
            $this->strUsuario = $usuario; 
            $this->strCorreo =  $correo;
            $this->strClave = $clave;
            $this->strClave2 = $clave2;
            $this->intTelefono = $telefono; 
            $this->intRolid = $listrolid; //26
            $this->intStatus = $liststatus;

            $this->tonken = 0;
            $this->datacreated = 0;

            //dep($this->intStatus);


            //$sql = "SELECT * FROM persona WHERE idpersona = '$this->intIduser";
            //$sql = "SELECT * FROM rol WHERE nombrerol = '$this->strRol' AND idrol != $this->intIdrol";
            //$sql = "SELECT * FROM persona WHERE rolid = '$this->rolid' AND idpersona != $this->intIduser";

            $sql = "SELECT * FROM persona WHERE idpersona = '$this->intIduser'";
            $request = $this->select($sql);
            
            //dep($request);
            


            if($request)
            {
                
                // $sql = "UPDATE persona SET nombre = ?, telefono = ?, email_user = ?, password = ?, tonken =?, datacreated=?, rolid = ?, status = ?, WHERE idpersona = $this->intIduser";
                // $arrData = array ($this->strUsuario, $this->intTelefono, $this->strCorreo, $this->strClave, $this->tonken, $this->datacreated, $this->intRolid, $this->intStatus);
                
                // //dep($arrData); 
                // $request = $this->update($sql, $arrData);

               //dep($request);

               //$sql = "UPDATE persona SET nombre = ?, telefono = ?, email_user = ?, password = ?, tonken =?, datacreated=?, rolid 
               //= ?, status = ?, WHERE idpersona = $this->intIduser";

            //    $sql = "UPDATE persona SET nombre = ? WHERE idpersona = $this->intIduser";
            //    $arrData = array ($this->strUsuario, $this->intTelefono, $this->strCorreo, $this->strClave, $this->tonken, $this->datacreated, $this->intRolid, $this->intStatus);
               
               $sql = " UPDATE persona 
                        SET nombre = ?, telefono = ?, email_user= ?, rolid = ?, status = ? 
                        WHERE idpersona ='$this->intIduser'
                      ";
               
               $arrData = array ($this->strUsuario, $this->intTelefono, $this->strCorreo, $this->intRolid, $this->intStatus); 



               //dep($arrData); 
               $request = $this->update($sql, $arrData);









            }else{
                $request = "exist";
            }

            return $request;

        }


        //ELIMINA LOS USUARIOS        
        public function deleteRol(int $iduser)
        {
            
            $this->intIduser = $iduser;
            //$sql = "SELECT * FROM persona WHERE rolid = $this->intIdrol";
            //$request = $this->select_all($sql);
            if(isset($this->intIduser))
            {
                //dep($this->intIduser);
                $sql = "UPDATE persona SET status = ? WHERE idpersona = '$this->intIduser'";
                $arrData = array(0);
                $request = $this->update($sql,$arrData);
                
                if($request)
                {
                    $request = 'ok';
                }else{
                    $request = 'error';
                }
            }else{
                $request = 'exist';
            }
            return $request;
        }


        
        //BUSCA UN ROL Y LE BUSCA LOS PERMISOS ASOCIADOS
        public function permisos_rol(int $perm) //ejm 5 eliminar
        {
           
            $this->intPerm = $perm;
            $sql  = "SELECT * FROM permisos_rol WHERE permisosid = '$this->intPerm'";

            $request = $this->select_all($sql);
            return $request;
        }









    }