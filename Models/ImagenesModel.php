<?php


class ImagenesModel extends Mysql{


    public $strNombre;
    public $strComentario;


    function __construct()
    {
        
        parent::__construct(); 
    }

    public function insertImg(string $nombre, string $comentario)
    {
    
        $this->strNombre = $nombre;
        $this->strComentario = $comentario;

        $query_insert = "INSERT INTO imgsec4(nombreimg ,comentario) VALUES (?,?)";
        $arrData = array($this->strNombre, $this->strComentario);
        $request_insert = $this->insert($query_insert, $arrData);
        return $request_insert;

    }


    
    
    
    
}    