<?php

    class Mysql extends Conexion {

        private $conexion;
        private $strquery;
        private $arrValues;
        private $nomroles;
        private $arrPermisos;

        public function __construct()
        {
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
            $this->nomroles = array();
        }

        
        //insertar  un registro
        public function insertdostablas(string $query, array $arrValues)
         {



            // $query_insert = "INSERT INTO permisos_rol(rolid, permisosid) VALUES (?,?)";
            // $arrData = array($this->intIdrol, $this->arrPermisos);
            // $request_insert = $this->insert($query_insert, $arrData);
            // $return = $request_insert;


            //$query_insertdos = "INSERT INTO permisos_rol(permisosid) VALUES (:ccaa)";


            //$nueva = [2,3];

            $this->strquery = $query;
            // $this->arrValues = json_encode($arrValues[1]);
            $this->arrValues = $arrValues;
                   //json_encode($this->arrValues);
                   
            //dep($this->arrValues[0]);//233 devuelve id
            //dep($this->arrValues[1]);//2 3 4 devuelve id
            
            $totalcheks = $this->arrValues[1];  //2 3 4 devuelve id
            
            
            //$nueva = json_encode($this->arrValues[1]);//2 3 4 devuelve id
            //dep($nueva);


            //dep($this->arrPermisos); //Array 2 3 4
            
            //dep($this->arrValues); //manda los dos arrays el mumero de id=196 y los chequets = 2 3 4
            //dep($this->arrValues[1]); //2 3 4 en array
            //dep($this->arrValues[1][0]); //2 array un solo dato
            //dep($this->arrValues[1][1]); //3 array un solo dato
            
            //dep($this->arrValues[1]); // array 2 3 4 OJO ESTE ES SIIIIIIIIIIIIIIIIII
            //dep($this->arrValues[1][1]); // array 2 ojo solo imprime un valor
            
            //$query_insert = "INSERT INTO permisos_rol(rolid, permisosid) VALUES (:rol, :per)";



                //dep($this->arrValues[1][$i]); //recorre todos los dados 
                //$this->arrValues = json_encode($arrValues[1]);
                //dep($this->arrValues);
                
                
                for($i=0; $i < count($totalcheks); $i++)
                {
                    $insert = $this->conexion->prepare($query);
                    $params = array(":rol" => $this->arrValues[0], ":per" => $this->arrValues[1][$i]);
                    //dep($params);
                    $resInsert = $insert->execute($params);
                    //dep($resInsert);//1
                }   

            

            // for($i=0; $i < 3; $i++)
            // {
            //     //dep($this->arrValues[1][$i]); //recorre todos los dados 
            //     $this->arrValues = json_encode($arrValues[1]);
            //     //dep($this->arrValues);
            //     $insert = $this->conexion->prepare($query_insertdos);
            //     $params=array(":ccaa"=>$arrValues[1]);
            //     $resInsert = $insert->execute($this->arrValues);

            // }          
            
            if($resInsert)
            {
                 $lastInsert = $this->conexion->lastInsertId();
            }else{
                $lastInsert = 0;
            }
           
            return $lastInsert; 


         }


         

         public function insertdos(string $query, array $arrValues)
         {

            $this->strquery = $query;
            $this->arrValues = $arrValues;
            $this->arrValuesnew = json_encode($this->arrValues[1]);
            dep($this->arrValuesnew);  //2,3,4
            
            $insert = $this->conexion->prepare($this->strquery);
            $resInsert = $insert->execute($this->arrValuesnew);

            if($resInsert)
            {
                $lastInsert = $this->conexion->lastInsertId();
            }else{
                $lastInsert = 0;
            }
           
            return $lastInsert; 


         }



         public function insert(string $query, array $arrValues)
         {

            $this->strquery = $query;
            $this->arrValues = $arrValues;

            
            $insert = $this->conexion->prepare($this->strquery);
            $resInsert = $insert->execute($this->arrValues);
            if($resInsert)
            {
                $lastInsert = $this->conexion->lastInsertId();
            }else{
                $lastInsert = 0;
            }
           
            return $lastInsert; 


         }


        //BUSCAR UN SOLO REGISTRO 
        public function select(string $query)
        {

                $this->strquery = $query;
                $result = $this->conexion->prepare($this->strquery);
                $result->execute();
                $data = $result->fetch(PDO::FETCH_ASSOC);
                //var_dump($data);
                return $data;

        }


         
        //BUSCAR TODOS LOS REGISTROS
        public function select_all(string $query)
        {
             
            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $result->execute();
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
            return $data;
            
             
        }
        

        
         //Busacer Un Registro consulta
         public function selectbusca(string $query)
         {



                $this->strquery = $query;
                $result = $this->conexion->prepare($this->strquery);
                $result->execute();
                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                //return $data;
                for($i=0; $i < count($data); $i++)
                {
                    $this->nomroles[$i] = '<div><option value="'.$data[$i]['idrol'].'">"'.$data[$i]['nombrerol'].'"</option></div>';
                }
                return $this->nomroles;
                
                
        }
                
                
                
                
                // while ($row = $result->fetch(PDO::FETCH_ASSOC));
                // {
                //     //echo "<option value='".$row['idrol']."'>".$row['nombrerol']."</option>";
                //     $this->nomroles = $row;
                // }
                // dep($this->nomroles);
                // return $this->nomroles;

                // for($i=0; $i < count($arrData); $i++)

                // $arrData[$i]['options'] = 
                // '<div class="text-center">
                //     <button class="btn btn-secondary btn-sm btnPermisosRol" rl="'.$arrData[$i]['idrol'].'" title="Permisos"><i class="fa fa-key"></i></button>
                    
                //     <button class="editar btn btn-primary btn-sm btnEditRol" rl="'.$arrData[$i]['idrol'].'" title="Editar"><i class="fa fa-pencil"></i></button>

                //     <button class="eliminar btn btn-danger btn-sm btnDelRol" rl="'.$arrData[$i]['idrol'].'" title="Eliminar"><i class="fa fa-trash"></i></button>
                    
                   
                    
                // </div>';

         

         
         
         
        



         //ACTUALIZAR LOS REGISTROS
         public function update (string $query, array $arrValues)
         {

            $this->strquery = $query;
            $this->arrValues = $arrValues; 
            //dep($arrValues);
            
            $update = $this->conexion->prepare($this->strquery);
            $resExecute = $update->execute($this->arrValues);
            return $resExecute; 

         }




         //ELIMINAR UN REGISTRO
         public function delete(string  $query)
         {

                $this->strquery = $query;               
                $result = $this->conexion->prepare($this->strquery);
                $del = $result->execute();
                return $del;
                
         }


    }



?>