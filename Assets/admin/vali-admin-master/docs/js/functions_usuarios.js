//alert('functions_usuarios.js');



//INICIO FETCH LLENADO DE LA TABLA DATATABLE DE USUARIOS MODIFICA
fetch(base_url+'/Usuarios/getUsuarios')
    
    .then((res) => res.json())
    .then(response => {

        //console.log(response);

        let output = '';
        for(let i in response)
        {
            output +=`<tr>
                <td>${response[i].idpersona}</td>
                <td>${response[i].nombre}</td>
                <td>${response[i].telefono}</td>
                <td>${response[i].email_user}</td>
                <td>${response[i].password}</td>
                <td>${response[i].datacreated}</td>
                <td>${response[i].rolid}</td>
                <td>${response[i].status}</td>
            </tr>`;
             
        }

        document.querySelector('.tbody').innerHTML = output;

}); //FIN DE FETCH



//OBJETO DE LA DATATABLE MODIFICA VALORES Y COLUMNAS
var tableUser;
$(document).ready(function(){
    
        tableUser = $('#tableUser').DataTable({
      

        "aProcessing":true,
        "aServerSide":true,
        "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax":{
        "url": " "+base_url+"/Usuarios/getUsuarios",
         
        "dataSrc":""
        },
        "columns":
        [
            
            {"data":"idpersona"},
            {"data":"nombre"},
            {"data":"telefono"},
            {"data":"email_user"},
            {"data":"password"},
            {"data":"datacreated"},
            {"data":"rolid"},
            {"data":"status"},
            {"data":"options"}
                        
        ],
        
        
        // "columnDefs": [
        //     { width: "10px", targets: 0 },
        //     { width: "40px", targets: 1 },
        //     { width: "100px", targets: 2 },
        //     { width: "70px", targets: 3 },
        //     { width: "70px", targets: 4 },
        //     { width: "70px", targets: 5 },
        //     { width: "70px", targets: 6 },
        //     { width: "70px", targets: 7 },
        //     { width: "70px", targets: 8 }
        //   ],
        "resonsieve":"true",

        "bDestroy": true,
        "iDisplayLength": 10,
        "order":[[0,"desc"]],
           

    });
   
});



//CARGA AUTOMATICA DE LOS ARCHIVOS
document.addEventListener('DOMContentLoaded', function()
{
       
    //USUARIO NUEVO O ACTUALIZA EJECUTA YA EL FORMULARIO CON LOS DATOS -SUBMIT- PARA CREAR USURIO NUEVO -ACA SE HACE EL SUBMIT-         
    let formUsuario = document.getElementById("formadminUser");
            
    formUsuario.addEventListener('submit', function(e)
    {

        e.preventDefault();
        
        let datos = new FormData(formUsuario);

            
        //  console.log(datos)
        //  console.log(datos.get('nombreregfor'))
        //  console.log(datos.get('correoregfor'))

        


        let strNombre = document.querySelector('#nombreuser').value;
        let strCorreo = document.querySelector('#correouser').value;
        let strClave = document.querySelector('#claveuser').value;
        let strClave2 = document.querySelector('#claveuser2').value;    
        let strTelefono = document.querySelector('#telefonouser').value;
        let strlistRolid = document.querySelector('#selnomrol').value;
        let strlistStatus = document.querySelector('#listStatus').value;


        // fetch(base_url+'/Roles/getRolBuscaNom/'+strlistRolid)   
        // .then(res => res.json())
        // .then(data => {
        //     console.log(data);

        // })


        

        if( strNombre == '' || strCorreo == '' || strClave == '' || strClave2 == '' || strTelefono == ''  )
        {
            swal("Atencion" , "todos los campos son obligatorios.", "error");
            return false;
        }

        
        fetch(base_url+'/Usuarios/setUsuario',        
        {    
            method: 'POST',
            body: datos
        })
            .then(res => res.json())
            .then(data => {

                //console.log(data)
                    
                if(data.status)
                {
                    $('#modalFormUsuarios').modal("hide");
                    formUsuario.reset();
                    swal("Usuarios", data.msg ,"success");
                    location.reload();

                }else{
                    swal("Error", data.msg, "error");
                }
            
            }); 
        
    });

    //BOTONES DE ACTUALIZAR Y ELIMINAR
    obtener_data_editar("#tableUser tbody", tableUser);   
    obtener_data_eliminar("#tableUser tbody", tableUser);  


});//FIN DE CARGA AUTOMATICA DE LOS ARCHIVOS = 'DOMContentLoaded'



//USUARIO NUEVO ABRE EL MODAL DE USUARIO NUEVO
function openModal() {
     
    console.log('click');    
    document.querySelector('#idUsuario').value = "";
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnText').innerHTML = "Guardar";
    document.querySelector('#titleModal').innerHTML = "Nuevo Usuario";
    document.querySelector("#formadminUser").reset();  
    


    
    //function muestraselect(str){

        //var conexion;

        // if (str == "")
        // {
        //     document.getElementById("txtHint").innerHTML="";
        //     return;
        // }
        
        const selnomrol = document.getElementById('selnomrol');

        fetch(base_url+'/Roles/getRolBusca')
        .then(res => res.json())    
        .then(data => {

        //     document.getElementById("div").innerHTML = data;
             //console.log(data[0]);
             //debugger

            for (const item of data){
                  selnomrol.innerHTML += `<li>${item}</li>` 
            }

        });

        // const selnomrol = document.getElementById('selnomrol');

        // var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        // var ajaxUrl = base_url+'/Roles/getRolBusca';
        // //request.open("GET", "ajaxUrl?c="+str, true);
        // request.open("GET", ajaxUrl, true);
        // request.send();

        // request.onreadystatechange = function()
        // {
             
        //     if(request.readyState == 4 && request.status == 200)
        //     {
        //         console.log(request.responseText);
        //         //debugger
        //         var objData = JSON.parse(request.responseText);
        //         //console.log(objData.data)
        //         //document.getElementById('selnomrol').innerHTML = objData.data

        //         // for(i=0; i < length(objData); i++)
        //         // {
        //         //      document.getElementById('selnomrol').innerHTML = objData.data[i]['nombrerol']
        //         // }
                
        //         for (const item of objData.data){
        //              selnomrol.innerHTML = `<li>${item}</li>` 
        //         }





        //     }
        // }


    //}          
    
    $('#modalFormUsuarios').modal('show');


}//FIN DE FUNCION OPEN MODAL



//LLAMADO AUTOMATICO DE LAS FUNCIONES
window.addEventListener('load', function()
{
    
    //fntEditUser();
    //fntDelUser();

}, false);



//FUNCION EDITAR USUARIOS
var obtener_data_editar = function(tbody, tableUser)
{
        $(tbody).on("click", "button.editar", function()
        {

            //alert('hola');
            console.log('click');

            $('#modalFormUsuarios').modal('show');

            document.querySelector('#titleModal').innerHTML = "Actualizar Usuario";
            document.querySelector('.modal-header').classList.replace("headerRegister", "headerUpdate");
            document.querySelector('#btnActionForm').classList.replace("btn-primary", "btn-info");
            document.querySelector('#btnText').innerHTML= "Actualizar";
            // document.getElementById('claveuseroculto1').style.display = 'none';
            // document.getElementById('claveuseroculto2').style.display = 'none';

            const selnomrol = document.getElementById('selnomrol');
            var iduser = this.getAttribute("rl");
               
            
            fetch(base_url+'/Usuarios/getUser/'+iduser)
            .then(res => res.json())    
            .then(ObjData => {
 
                editarres(ObjData);

            });

            fetch(base_url+'/Roles/getRolBusca')
            .then(res => res.json())    
            .then(data => {
                   
                //console.log(data)
                for (const item of data){
                    selnomrol.innerHTML += `<li>${item}</li>` 
                }


            }); 
            
            function editarres(objData)
            {

                    if(objData.data.status)
                    {
                        document.querySelector("#idUsuario").value = objData.data.idpersona;
                        document.querySelector("#nombreuser").value = objData.data.nombre;
                        document.querySelector("#correouser").value = objData.data.email_user;
                        document.querySelector("#claveuser").value = objData.data.password;
                        document.querySelector("#claveuser2").value = objData.data.password;
                        document.querySelector("#telefonouser").value = objData.data.telefono;
                        document.querySelector("#selnomrol").value = selnomrol;
                        document.querySelector("#listStatus").value = objData.data.status;

                        console.log(objData.data.status);
                    
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

        });
      
} //FIN FUNCION EDITAR USUARIOS
   


//FUNCION ELIMINAR USUARIOS
var obtener_data_eliminar = function(tbody, tableUser)
{

    $(tbody).on("click", "button.eliminar", function()
    {

        console.log('click');

        var iduser = this.getAttribute("rl");

        //alert(iduser);

        swal(
        {
            title: "Eliminar Usuario",
            text: "¿Esta seguro de Eliminar el Usuario",
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
               
                
                fetch(base_url+'/Usuarios/delUser/'+iduser)
                .then(res => res.json())    
                .then(objData => {
     
                    eliminares(objData);
    
                });

                function eliminares(objData)
                {
                    console.log(objData);
                    if(objData.status)
                    {
                        swal("eliminar", objData.msg , "success");
                    }else
                    {
                        swal("atencion", objData.msg, "error")
                    }


                    
                }


            }




        });




    });

};









  