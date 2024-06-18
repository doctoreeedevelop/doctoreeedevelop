<?php


class DashboardModel extends Mysql {

  
    public function __construct()
    {
      parent::__construct();
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

}  