<?php

    class HomeModel extends Mysql{


        public $intIdimg;

        function __construct()
        {
            //echo "Mensaje del modelo Home ";

            parent::__construct(); 
        }

        
       
       //datos de prueba
       
        // public function getCarrito($params)
        // {
        //     return "Datos del carrito No. ".$params;
           
        // }

        public function setUser(string $nombre, int $edad)
        {
         
            $query_insert = "INSERT INTO usuario(nombre, edad) VALUES(?,?)";
            $arrData = array($nombre, $edad);
            $request_insert = $this->insert($query_insert, $arrData);
            return $request_insert;

        }



        public function getUser($id)
        {
            $sql = "SELECT * FROM usuario WHERE id = $id ";
            $request = $this->select($sql);
            return $request;
        }



        public function updateUser(int $id, string $nombre, int $edad)
        {
            $sql = "UPDATE usuario SET nombre = ?, edad = ? WHERE id = $id";
            $arrData = array($nombre, $edad);
            $request = $this->update($sql, $arrData);
            return $request;
        }

        
        
        public function getUsers()
        {
            $sql = "SELECT * FROM usuario ";
            $request = $this->select_all($sql);
            return $request;
        }

        
        
        public function delUser($id)
        {
            $sql = "DELETE FROM usuario WHERE id = $id ";
            $request = $this->delete($sql);
            return $request;
        }


        //ESTA NO SE EN QUE LA UTILICE PENDIENTE X REVISAR
        public function selectImg(int $idimg)
        {

            $this->intIdimg = $idimg;
            $sql = "SELECT * FROM imgsec4 WHERE idimg = '$this->intIdimg'";
            $request = $this->select($sql);
            //dep($request);
            //return $request;

        }


        //BUSCA TODAS LAS IMAGENES QUE SE MUESTRAN EN LA SECCION 4
        public function selectImagenes()
        {
            $sql = "SELECT * FROM imgsec4";
            $request = $this->select_all($sql);
            return $request;
        }

        //SELECCIONA SOLO UNA IMAGEN X ID SECCION 4
        public function select1Img(int $idimg)
        {
            
            $this->intIdimg = $idimg;
            //dep($this->intIdimg);

            $sql = "SELECT  nombreimg, img1, img2, img3 FROM imgsec4 WHERE idimg = '$this->intIdimg'";
            $request = $this->select($sql);
            //dep($request);
            return $request;

        }


    


    }

?>