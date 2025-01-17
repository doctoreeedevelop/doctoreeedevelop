<?php


class RolesModel extends Mysql{



    public $intIdrol;
    public $strRol;
    public $nombrestrRol;
    public $strDescripcion;
    public $intStatus;
    
    
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

    
    public function selectRol(int $idrol)
    {
        //BUSCAR ROLE
        $this->intIdrol = $idrol;
        $sql = "SELECT * FROM rol WHERE idrol = $this->intIdrol";
        $request = $this->select($sql);
        return $request;
    }



    //BUSCA TODOS LOS DATOS Y LLENA EL SELECT DE NOMBRE ROL 
    public function busnomRol()
    {
        $sql = "SELECT * FROM rol" ;
        $request = $this->select_all($sql);
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





    public function insertRol(string $rol, string $descripcion, int $status)
    {
        $return = "";
        $this->strRol = $rol;
        $this->strDescripcion = $descripcion;
        $this->intStatus = $status;

        $sql = "SELECT * FROM rol WHERE nombrerol = '{$this->strRol}'";
        $request = $this->select_all($sql);

        if(empty($request))
        {
            $query_insert = "INSERT INTO rol(nombrerol,descripcion,status) VALUES (?,?,?)";
            $arrData = array($this->strRol, $this->strDescripcion, $this->intStatus);
            $request_insert = $this->insert($query_insert, $arrData);
            $return = $request_insert;
        
        }else{
            $return = "exist";
        }

        return $return;

    }



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

}



?>