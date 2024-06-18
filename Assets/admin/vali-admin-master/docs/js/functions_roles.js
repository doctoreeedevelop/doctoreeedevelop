//alert('function_roles');



var tableRoles;

document.addEventListener('DOMContentLoaded', function()
{
   
    tableRoles = $('#tableRoles').dataTable({

         "aProcessing":true,
         "aServerSide":true,
         "language": {
         "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
         },
         "ajax":{
         "url": " "+base_url+"/Roles/getRoles",
         
         "dataSrc":""
         },
         "columns":[
            
         {"data":"idrol"},
         {"data":"nombrerol"},
         {"data":"descripcion"},
         {"data":"status"},
         {"data":"options"},
         // {"defaultContent": "<button type='button' class='btn btn-info'>editarrr</button>"}
            
         ],
         "resonsieve":"true",
         "bDestroy": true,
         "iDisplayLength": 10,
         "order":[[0,"desc"]]   

        
    });

    
    obtener_data_editar("#tableRoles tbody", tableRoles);   
    obtener_data_eliminar("#tableRoles tbody", tableRoles);   
    

    

    //BTN GUARDAR NUEVO ROL o ACTUALIZAR ESTE SE MANDA CUANDO SE HACE EL SUBMIT = BTNGUARDAR O BTNACTUALIZAR
    var formRol = document.querySelector("#formRol");
    
    
    formRol.onsubmit = function(e)
    {
        e.preventDefault();
        
        var intIdRol = document.querySelector('#idRol').value;
        var strNombre = document.querySelector('#txtNombre').value;
        var strDescripcion = document.querySelector('#txtDescripcion').value;
        var intStatus = document.querySelector('#listStatus').value;
        
        
        //console.log(intIdRol);
        //console.log(strNombre);
        //console.log(strDescripcion);
        //console.log(intStatus);

        

        if(strNombre == '' || strDescripcion == '' || intStatus == '')
        {
            swal("Atencion", "Todos los campos son obligatorios." , "error");
            return false;
        } 

        
    
        //NUEVO ROL O ACTUALIAR
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = base_url+'/Roles/setRol';
        var formData = new FormData(formRol);
        request.open("POST",ajaxUrl, true);
        request.send(formData);
        request.onreadystatechange = function()        
        {
            //console.log(request);

            if(request.readyState == 4 && request.status == 200){
                
                //console.log(request.responseText);
                var objData = JSON.parse(request.responseText);
                
                if(objData.status)
                {
                    $('#modalFormRol').modal("hide");
                    formRol.reset();
                    swal("Roles de Usuario", objData.msg , "success");
                    tableRoles.api().ajax.reload(function()
                    {

                        //fntEditRol();
                        //fntDelRol();
                        //fntPermisos();

                    });

                }else{

                    swal("Error", objData.msg , "error");

                }
            }
        }   
    }    

}); // cierre fin 'DOMContentLoaded' fin fin



//FUNCION EDITAR UN ROL
var obtener_data_editar = function(tbody, tableRoles)
{
        $(tbody).on("click", "button.editar", function(){
            
        //console.log('click');
        //btnEditRol.forEach(function(btnEditRol)
        // {        
        //btnEditRol.addEventListener('click' , function()
        //{

            document.querySelector('#titleModal').innerHTML = "Actualizar Rol";
            document.querySelector('.modal-header').classList.replace("headerRegister", "headerUpdate");
            document.querySelector('#btnActionForm').classList.replace("btn-primary", "btn-info");
            document.querySelector('#btnText').innerHTML= "Actualizar";

            var idrol = this.getAttribute("rl");
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url+'/Roles/getRol/'+idrol;
            request.open("GET", ajaxUrl, true);
            request.send();

            
            request.onreadystatechange = function()
            {
                 
                if(request.readyState == 4 && request.status == 200)
                {
                    console.log(request.responseText);

                    var objData = JSON.parse(request.responseText);
                    console.log(objData);
                    if(objData.status)
                    {
                        
                        document.querySelector("#idRol").value = objData.data.data.idrol;
                        document.querySelector("#txtNombre").value = objData.data.data.nombrerol;
                        document.querySelector("#txtDescripcion").value = objData.data.data.descripcion;
                        //document.querySelector("#tipoForm").value = objData.data.permcons;
                        //nuevavar = objData.data.permcons;
                        nuevavar = idrol;
                        if(objData.data.status == 1)
                        {
                            var optionSelect = '<option value="1" selected class="notBlock">Activo</option>';
                        }else{  
                            var optionSelect = '<option value="2" selected class="notBlock">Inactivo</option>';
                        }
                        
                        var htmlSelect = `${optionSelect}
                                            <option value="1">Activo</option>
                                            <option value="2">Inactivo</option>
                                         `;
                        document.querySelector("#listStatus").innerHTML = htmlSelect;
                        
                        
                        //console.log(nuevavar);
                        /*const formnewData = new FormData();
                        const json = JSON.stringify(nuevavar)
                        formnewData.append('someData', json);

                        
                        //MANDA LOS DATOS RECIVIDOS OTRA VEZ AL JSON BACKEND
                        fetch(base_url+'/Views/Template/Modals/modalRoles.php',        
                        {    
                            method: 'POST',
                            body: formnewData
                        })
                            .then(res => res.json())
                            .then(data => {
                        
                                console.log(data);
                        
                        });*/
                        
                        
                        
                        $('#modalFormRol').modal('show');

                    }else{
                        swal("Error", objData.msg, "error");
                    }
                }
            }

            //$('#modalFormRol').modal('show');
        
       // });
    //});


        });
}



$('#tableRoles').DataTable();

var contenido = document.getElementById("contenido")


//MODAL DE NUEVO ROL UNICAMENTE = BTN NUEVO
function openModal()
{
    
    document.querySelector('#idRol').value = "";
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnText').innerHTML= "Guardar";
    document.querySelector('#titleModal').innerHTML = "Nuevo Rol";
    document.querySelector('#formRol').reset();

    
//      NOTA: YA NO SE HACE POR JAVASCRIIPT SE HACE POR PHP   
//     
//      FETCH SE CREA LOS CHECKBOX DEL ROL PARA LOS PERMISOS
//     fetch(base_url+'/roles/getBuscaPermrol')
//     .then((res) => res.json())
//     .then(data => {
//     //console.log(data[0]);
//     contenido.innerHTML = '';            
//         for(let indice of data)
//         {
//             //console.log(indice);
            
//             contenido.innerHTML += 
//              `            
//                 <div class="form-check">
//                          <input 
//                              class="form-check-input" 
//                              type="checkbox" 
//                              value="${indice.idpermisos}" 
//                              id="permiso_${indice.idpermisos}"
//                              name="permisos[]"
                                                
//                          >                        
//                          <label class="form-check-label" for="permiso_${indice.idpermisos}">
//                              ${indice.nombre}   -   ${indice.descripcion} 
//                          </label>
//                 </div>           
//              `

//         }

//     });
    
     $('#modalFormRol').modal('show');
 }


/*window.addEventListener('load', function(){
    
    fntEditRol();
    fntDelRol();

}, false);*/





/*function fntEditRol()
{
    var btnEditRol = document.querySelectorAll(".btnEditRol");
    btnEditRol.forEach(function(btnEditRol)
    {
        
        btnEditRol.addEventListener('click' , function()
        {

            document.querySelector('#titleModal').innerHTML = "Actualizar Rol";
            document.querySelector('.modal-header').classList.replace("headerRegister", "headerUpdate");
            document.querySelector('#btnActionForm').classList.replace("btn-primary", "btn-info");
            document.querySelector('#btnText').innerHTML= "Actualizar";

            var idrol = this.getAttribute("rl");
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url+'/Roles/getRol/'+idrol;
            request.open("GET", ajaxUrl, true);
            request.send();

            request.onreadystatechange = function()
            {
                 
                if(request.readyState == 4 && request.status == 200)
                {
                    //console.log(request.responseText);

                    var objData = JSON.parse(request.responseText);

                    if(objData.status)
                    {
                        
                        document.querySelector("#idRol").value = objData.data.idrol;
                        document.querySelector("#txtNombre").value = objData.data.nombrerol;
                        document.querySelector("#txtDescripcion").value = objData.data.descripcion;

                        if(objData.data.status == 1)
                        {
                            var optionSelect = '<option value="1" selected class="notBlock">Activo</option>';
                        }else{  
                            var optionSelect = '<option value="2" selected class="notBlock">Inactivo</option>';
                        }
                        
                        var htmlSelect = `${optionSelect}
                                            <option value="1">Activo</option>
                                            <option value="2">Inactivo</option>
                                         `;
                        document.querySelector("#listStatus").innerHTML = htmlSelect;
                        $('#modalFormRol').modal('show');

                    }else{
                        swal("Error", objData.msg, "error");
                    }
                }
            }

            //$('#modalFormRol').modal('show');
        
        });
    });

}
*/


//FUNCION PARA ELIMINAR UN ROL
var obtener_data_eliminar = function(tbody, tableRoles)
{
        $(tbody).on("click", "button.eliminar", function(){
            
            //console.log('click');


            var idrol = this.getAttribute("rl");
            //alert(idrol);
            //console.log('hecho')

            swal(
            {
                 title: "Eliminar Rol",
                 text: "¿Esta seguro de Eliminar el Rol",
                 type: "warning",
                 showCancelButton: true,
                 confirmButtonText: "Si, eliminar",
                 cancelButtonText: "No, cancelar",
                 closeOnConfirm: false,
                 closeOnCancel: true

            },  function(isConfirm)

              
                {

                     if(isConfirm)
                     {
                    
                          var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                          var ajaxUrl = base_url+'/Roles/delRol/';
                          var strData = "idrol="+idrol;
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
                                 if(objData.status)
                                 {
                                      swal("Eliminar", objData.msg , "success");
                                      tableRoles.api().ajax.reload(function()
                                      {
                                           fntEditRol();
                                           fntDelRol();

                                      });
                                 }else{

                                   swal("Atencion!", objData.msg , "error");    

                                 }
                              } 
                          }

                     }
                

                    
                });
        

        });

}



/*function fntDelRol()
{
    //var btnDelRol = document.querySelectorAll(".btnDelRol");
    
    var btnDelRol = document.getElementById('btneliminar')
    //btnDelRol.forEach(function(btnDelRol)
    //{
        if(btnDelRol)
        {

      


        btnDelRol.addEventListener('click', function()
        {
            
            var idrol = this.getAttribute("rl");
            alert(idrol);
            //console.log('hecho')

            /*swal(
            {
                 title: "Eliminar Rol",
                 text: "¿Esta seguro de Eliminar el Rol",
                 type: "warning",
                 showCancelButton: true,
                 confirmButtonText: "Si, eliminar",
                 cancelButtonText: "No, cancelar",
                 closeOnConfirm: false,
                 closeOnCancel: true

            },  function(isConfirm)

              
                {

                     if(isConfirm)
                     {
                    
                          var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                          var ajaxUrl = base_url+'/Roles/delRol/';
                          var strData = "idrol="+idrol;
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
                                 if(objData.status)
                                 {
                                      swal("Eliminar", objData.msg , "success");
                                      tableRoles.api().ajax.reload(function()
                                      {
                                           fntEditRol();
                                           fntDelRol();

                                      });
                                 }else{

                                   swal("Atencion!", objData.msg , "error");    

                                 }
                              } 
                          }

                     }
                

                    
                });
            })
        };

    //});    
}
*/



// let btnEditRol = document.querySelector("#btneliminar");
    
// btnEditRol.addEventListener('click' , function()
// {
//     let idrol = this.getAttribute("rl");
//     alert(idrol);
// }); 













