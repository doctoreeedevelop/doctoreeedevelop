//alert('functions_home.js');

const app = new Vue({

    el: '#app',
    data: {
        titulo: 'Agregue Tareas de Recordatorio',
        tareas: [],
        nuevaTarea: '',
    },
    methods: {
        agregarTarea: function(){
            /* console.log('diste click', this.nuevaTarea ); */
            this.tareas.push({
                 nombre: this.nuevaTarea,
                 estado: false   
            });
            console.log(this.tareas);
            this.nuevaTarea = '';
            localStorage.setItem('gym-vue', JSON.stringify(this.tareas));

        },
        editarTarea: function(index){
            //console.log('editar ', index);
            this.tareas[index].estado = true;
            localStorage.setItem('gym-vue', JSON.stringify(this.tareas));
        },
        eliminar: function(index){
            //console.log(index);
            this.tareas.splice(index, 1);
            localStorage.setItem('gym-vue', JSON.stringify(this.tareas));
        }
    },
    created: function(){
        let datosDB = JSON.parse(localStorage.getItem('gym-vue'));
        console.log(datosDB);
        if(datosDB === null){
            this.tareas = [];
        }else{
            this.tareas = datosDB;
        }

    }





});

//window.addEventListener('load', function()
document.addEventListener('DOMContentLoaded', function()
{
    
    //const btnimg = document.getElementById('btnimg1');

    const btnimg = document.querySelectorAll('.btnimg')
    const modal1 = document.querySelectorAll('.js-modal1')
    const btnimg1 = document.getElementById('modal1img');
    const btncierramdl1 = document.getElementById('js-hide-modal1');
    
    const mandaidimg = document.getElementById('mandaidimg');
    
    //console.log(btnimg);
    
    btnimg.forEach( function(btnimg)
    {        
        //btnimg.addEventListener('click' , async function()
        btnimg.addEventListener('click' , function(e)
        {
            e.preventDefault();
            btnimg1.classList.add('contenido');

            //var contenido = document.querySelector('.contenido');
            //console.log(contenido);
            
            //console.log("click");
            var idimgdos = this.getAttribute("rl");
            //var idimg = 12;
            idimg = parseInt(idimgdos);
            //console.log(typeof(idimg));


           
                    
                /*var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                var ajaxUrl = base_url+'/Home/getbusca1Img/';
                var strData = "idimg="+idimg;

                //console.log(strData);

                request.open("POST",ajaxUrl, true);
                request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                request.send(strData);
                request.onreadystatechange = function()
                {

                    //console.log(request);
                    if(request.readyState == 4 && request.status == 200)
                    {
                       
                       //console.log(request.responseText);
                       var objData = JSON.parse(request.responseText);
                    
                       //console.log(objData);
                    } 
                }*/



        /*const formnewData = new FormData();
        const json = JSON.stringify(idimg)
        formnewData.append('someData', json);

    
        //MANDA LOS DATOS RECIVIDOS OTRA VEZ AL JSON BACKEND
        try{  
              
            let response = await fetch(base_url+'/Home/getbusca1Img/',
            //let response = await fetch(base_url+'/Views/home',
            {       
                method: 'POST',
                body: formnewData
            });
            
            let data = await response.text();
            console.log(data);
            //console.log(typeof(datanew));
            console.log(data[0]['arrData1Img']);
            /*fetch(base_url+'/Home/getbusca1Img/')
            .then(res => res.json())
            .then(data=>{
                console.log(data)
            });*/
        
        /*}catch(error){

        }*/
        
        
                    
                          var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                          var ajaxUrl = base_url+'/Home/getbusca1Img/';
                          var strData = "idimg="+idimg;
                          request.open("POST",ajaxUrl,true);
                          request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                          request.send(strData);
                          request.onreadystatechange = function()
                          {

                             //console.log(request);
                              if(request.readyState == 4 && request.status == 200)
                              {
                                 
                                 //console.log(request.responseText);
                                 var objData = JSON.parse(request.responseText);
                                 //console.log(Object.keys(objData));
                                 //console.log(objData);
                                 


                                //let imagenes = Object.keys(objData);
                                //console.log(imagenes);



                                const contenido = document.getElementById('contenido');
                                const contenidodos = document.getElementById('contenidodos');
                                console.log(contenido.firstElementChild);
                                //console.log(contenidodos);
                                console.log(contenido.dataset.thumb)

                                //contenido.forEach(function(contenido){

                                //for(imagen of imagenes){
                                    //console.log(imagen);
                                    
                                    contenido.innerHTML = `
                                    
                                    
                                    <div class="item-slick3" data-thumb="images/1.jpg"></div>
                                   
                                            <div class="wrap-pic-w pos-relative">
                                                <img src="http://localhost/doctoreeedevelop/Assets/paginappal/images/${objData.nombreimg}" alt="IMG-PRODUCT">
                                                
                                                <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" 
                                                href="http://localhost/doctoreeedevelop/Assets/paginappal/images/${objData.nombreimg}">
                                                <i class="fa fa-expand"></i>
                                                </a>
                                            </div>
                                                
                                 
                                                
                                                
                                                
                                                
                                                `
                                
                                                
                               contenido.firstElementChild.setAttribute("data-thumb", "/images/1.jpg");    
                               //console.log(contenidodos);
                               //console.log(contenido.getAttribute("data-thumb"));    
                                
                                
                                //}    
                                    
                                //});


                                    /*<div class="item-slick3" data-thumb="http://localhost/doctoreeedevelop/Assets/paginappal/images/${objData.img1}">
										<div class="wrap-pic-w pos-relative">
											<img src="http://localhost/doctoreeedevelop/Assets/paginappal/images/${objData.img1}" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>*/




                                 
                                 if(objData.nombreimg)
                                 {
                                    
                                        //swal("Eliminar", objData.msg , "success");
                                      //tableRoles.api().ajax.reload(function()
                                      //{
                                           //fntEditRol();
                                           //fntDelRol();

                                      //});
                                 }else{

                                   //swal("Atencion!", objData.msg , "error");    

                                 }
                              } 
                          }

                   












            
            
            //contenido.innerHTML = `
            
            //<div id="imgsecmod1"  class="item-slick3" data-thumb="http://localhost/doctoreeedevelop/Assets/paginappal/images/1.jpg" data-lineas="1">								 
									
                //<div class="wrap-pic-w pos-relative">
                    
                    //<!-- IMAGEN PRINCIPAL DE MODAL SECCION 4 -->
                    //<img id="imgppalmodal" src="http://localhost/doctoreeedevelop/Assets/paginappal/images/1.jpg" alt="IMG-PRODUCT"> 

                    //<!-- IMAGEN AMPLIADA -->
                    //<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" 
                       // href="http://localhost/doctoreeedevelop/Assets/paginappal/images/1.jpg">
                        //<i class="fa fa-expand"></i>
                    //</a> 
                //</div>
            //</div>
            
            
            //`
            


            btnimg1.classList.add('show-modal1')


        });

        

        


        btncierramdl1.addEventListener('click' , function()
        {
        
            btnimg1.classList.remove('show-modal1')
        });





    });   
    
    /*btnimg.forEach(function(btnimg)
    {        
        btncierramdl1.addEventListener('click' , function()
        {
        
            btnimg1.classList.remove('show-modal1')
        });
    });*/
    
        //console.log(Array.from(btnimg));



    /*btnimg.addEventListener('click', function(){
        console.log("click");
    });*/




});