<?php


class RolesModel extends Mysql{



    public $intIdrol;
    public $strRol;
    public $nombrestrRol;
    public $strDescripcion;
    public $intStatus;
    public $arrPermisos;
    public $items;


    public $permisos_rol;
    
    function __construct()
    {
        //echo "Mensaje del modelo Home ";

        parent::__construct(); 
    }

    public function selectRoles()
    {
        //extrae los roles
        $sql = "SELECT * FROM rol WHERE status !=0";
        $request = $this->select_all($sql);
        return $request;
    }

    
    //BUSCA LOS CAMPOS PARA MOSTRAR EN ACTUALIZAR CARGA EL MODAL CON LOS CAMPOS 
    // public function selectRol(int $idrol)  //FUNCTION ORIGINAL POR SI ALGO
    // {
    //        //BUSCAR ROLE
    //      $this->intIdrol = $idrol;
    //      $sql = "SELECT * FROM rol WHERE idrol = $this->intIdrol";
    //      $request = $this->select($sql);
    //      return $request;
    // }


    
    //BUSCA LOS CAMPOS PARA MOSTRAR EN ACTUALIZAR CARGA EL MODAL CON LOS CAMPOS Y LOS PERMISOS OJO 
    public function selectRol(int $idrol)
    {
         //BUSCAR ROLE REGISTROS NORMALES 
         $this->intIdrol = $idrol;
         $sql = "SELECT * FROM rol WHERE idrol = '$this->intIdrol'";
         $request = $this->select($sql);
         //dep($request);
         //return $request;

         if ($request)
         {

            //BUSCA LOS PERMISOS PARA MOSTRAR EN EDITAR MOSTRAR EN MODAL PASO 1
            //OJO MANDA LOS DATOS POR INSTANCIA Y NO POR RETURN
            $sql = "SELECT * FROM permisos_rol WHERE rolid = '$this->intIdrol'"; 
            $requestdos = $this->select_all($sql);
            //dep($requestdos);

            $permisos_rol = [];

            foreach($requestdos as $permisos)
            {
                //dep($permisos);
                $permisos_rol[] = $permisos['permisosid'];
            }

            //dep($this->permisos_rol);
            //echo json_encode($this->permisos_rol);
            //return $this->permisos_rol;
            //$this->permisos_rol = array('data' => $request, 'permcons' => $permisos_rol);
            return array('data' => $request, 'permcons' => $permisos_rol);


            
         }

        

    }


    //BUSCA TODOS LOS DATOS Y LLENA EL SELECT DE NOMBRE ROL 
    public function busnomRol()
    {
        $sql = "SELECT * FROM rol" ;
        
        
        $request = $this->selectbusca($sql);
        return $request;
    }



    //BUSCA NOMBRE Y DEVUELVE EL ID DEL ROL
    public function busnomRoldevid(string $strNombrerol)
    {
        $this->nombrestrRol = $strNombrerol;
        $sql = "SELECT * FROM rol WHERE nombrerol = $this->nombrestrRol" ;
        $request = $this->select_all($sql);
        //dep($request);
        return $request;
    }




    //INSERTAR UN ROL          
    public function insertRol(string $rol, string $descripcion, int $status, array $permisos)
    {
        
        $return = "";
        $this->strRol = $rol;
        $this->strDescripcion = $descripcion;
        $this->intStatus = $status;
        $this->arrPermisos = $permisos;  //array de permisos


        //$ensayo = implode(',', $this->arrPermisos );

        //dep(settype($arrrPermisos));
        //dep($ensayo);


        // $permisos_role=[];
        // for($i=0; $i<count($this->arrPermisos); $i++)
        // {
        //     $permisos_role[] = $this->arrPermisos[$i];
        // }

        //dep($permisos_role);
     
        //dep($this->arrPermisos); //array de permisos

        // $permisos_role=[];

        // foreach($this->arrPermisos as $items )
        // {
        //     //dep($items); 
        //     if(is_array($this->arrPermisos)){
        //        $ensayo[] = implode(',', $this->arrPermisos );
        //     }
            
        // }


        // $ensayo = [2,3,4];
        // dep($ensayo);

        //dep($permisos_role);
        //print_r($permisos_role);


        //ACA BUSCA X EL NOMBRE QUE EL ROL NO EXISTA
        $sql = "SELECT * FROM rol WHERE nombrerol = '{$this->strRol}'";
        $request = $this->select_all($sql);
        //dep($request);//array vacio 

        if(empty($request))
        {
            
            //INSERCION EN LA TABLA DE ROLES 
            $query_insert = "INSERT INTO rol(nombrerol,descripcion,status) VALUES (?,?,?)";
            $arrData = array($this->strRol, $this->strDescripcion, $this->intStatus);
            $request_insert = $this->insert($query_insert, $arrData);
            //dep($request_insert); //retorna el numero de idrol solamente
            //$return = $request_insert;

            $this->intIdrol = $request_insert;

            //dep($this->intIdrol); //retorna el numero de idrol solamente
            //$ensayo = [2,3,4];

            if($request_insert)
            {
                   
                   //INSERCION EN LA TABLA MEDIA PERM_ROLES 
                   $query_insert = "INSERT INTO permisos_rol(rolid, permisosid) VALUES (:rol, :per)";
                   $arrData = array($this->intIdrol, $this->arrPermisos);
                   $request_insert = $this->insertdostablas($query_insert, $arrData);
                   $return = $request_insert;


                //             OJO CONSULTA BUENA
                //    $query_insert = "INSERT INTO permisos_rol(rolid,permisosid) VALUES (?,?)";
                //    $arrData = array($this->intIdrol, $ensayo);
                //    $request_insert = $this->insert($query_insert, $arrData);
                //    $return = $request_insert;

            }

        }else{
            $return = "exist";
        }

        return $return;

    }



    //ACTUALIZAR UN ROL
    public function updateRol(int $idrol, string $rol, string $descripcion, int $status)
    {
        $this->intIdrol = $idrol;
        $this->strRol = $rol;
        $this->strDescripcion = $descripcion;
        $this->intStatus = $status;

        $sql = "SELECT * FROM rol WHERE nombrerol = '$this->strRol' AND idrol != $this->intIdrol";
        $request = $this->select_all($sql);

        

        if(empty($request))
        {
            
            $sql = "UPDATE rol SET nombrerol = ?, descripcion = ?, status = ? WHERE idrol = $this->intIdrol";
            $arrData = array ($this->strRol, $this->strDescripcion, $this->intStatus);
            $request = $this->update($sql, $arrData);

        }else{
            $request = "exist";
        }

        return $request;

    }


    
    //ELIMINA UN ROL
    public function deleteRol(int $idrol)
    {
        
        $this->intIdrol = $idrol;
        $sql = "SELECT * FROM persona WHERE rolid = $this->intIdrol";
        $request = $this->select_all($sql);
        if(empty($request))
        {
            $sql = "UPDATE rol SET status = ? WHERE idrol = $this->intIdrol";
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
    


    //BUSCA PERMISOS PARA LOS ROLES
    public function selectpermrol()
    {
       
       //$this->intIdrol = $idrol;
       //dep($this->intIdrol); //26

    //    $sql ="SELECT    p.idmodulo,
    //                     p.nombre,
    //                     p.descripcion,
                        
    //                     r.idrol,
    //                     r.nombrerol
                        
    //             FROM permisos p
    //             INNER JOIN rol r
    //             ON  p.rolid = r.idrol
    //             WHERE p.rolid = $this->intIdrol
    //         ";

        $sql = "SELECT * FROM permisos ";

        $request = $this->select_all($sql);
        //dep($request);
        return $request;

    }
}



?>