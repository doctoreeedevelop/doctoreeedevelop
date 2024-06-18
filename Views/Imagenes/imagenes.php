<?php //header_ppal($data) ?>
    
    
    <h1><?php echo $data['page_title']; ?></h1>





<div class="container">
    <div class="row">
        <div class="col-12">

            <form action="" method="POST" enctype="multipart/form-data" id="formImg">


            <?php 
            
               /* if(isset($_REQUEST['guardar']))
               {
                   if(isset($_FILES['foto']['name']))
                   {
                        $tipoArchivo = $_FILES['foto']['type'];
                        $nombreArchivo = $_FILES['foto']['name'];
                        $tamanoArchivo = $_FILES['foto']['size'];
                        $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
                        $binariosImagen = fread($imagenSubida,$tamanoArchivo); 
                        //$binariosImagen = mysqli_scape_string();

                        
                    }
                }
                */
                ?>
        
                <div class="for-mgroup">
                    <input type="file" class="form-control-file" name="imagen" id="img">
                    <img class="img-thumbnail"src="" alt="" id="imgPrevia">
                    <div class="form-gropu">
                        <label for="comentario">Comentario</label> 
                        <textarea id="comentario" name="comentario" class="form-control" cols="30" rows="10"></textarea>
                    
                    </div>
                </div>

                <button id="guardar" type="submit" class="btn btn-primary" name="guardar">Enviar</button>
        
            </form>
         </div>

    </div>
    <h4 class="text-center">Publicaciones</h4>
    <div class="row" id="resultado">
    
    </div>
</div> 


<?php footer_ppal($data) ?>