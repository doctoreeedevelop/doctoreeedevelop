//alert('functions_usuarios.js');



//INICIO FETCH LLENADO DE LA TABLA DATATABLE
fetch('http://localhost/doctoreeedevelop/Usuarios/getUsuarios')
    
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
                      <td>${response[i].token}</td>
                      <td>${response[i].datacreated}</td>
                      <td>${response[i].rolid}</td>
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
        "columns":[
            
        {"data":"idpersona"},
        {"data":"nombre"},
        {"data":"telefono"},
        {"data":"email_user"},
        {"data":"password"},
        {"data":"token"},
        {"data":"datacreated"},
        {"data":"rolid"},
        {"data":"options"}
                        
        ],
        "resonsieve":"true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order":[[0,"desc"]]   

    });
   
});



//CARGA AUTOMATICA DE LOS ARCHIVOS
document.addEventListener('DOMContentLoaded', function()
{
       
    //EJECUTA YA EL FORMULARIO CON LOS DATOS -SUBMIT- PARA CREAR USURIO NUEVO -ACA SE HACE EL SUBMIT-         
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
        let strlistRolid = document.querySelector('#daysSelect').value;
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
                    }else{
                    swal("Error", data.msg, "error");
                }
            
            }); 
        
    });


    obtener_data_editar("#tableUser tbody", tableUser);   
    //obtener_data_eliminar("#tableUser tbody", tableUser);  


});//FIN DE CARGA AUTOMATICA DE LOS ARCHIVOS = 'DOMContentLoaded'



//ABRE EL MODAL DE USUARIO NUEVO
function openModal() {
     
    console.log('click');    
    document.querySelector('#idUsuario').value = "";
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnText').innerHTML = "Guardar";
    document.querySelector('#titleModal').innerHTML = "Nuevo Usuario";
    document.querySelector("#formadminUser").reset();  
    


    fetch(base_url+'/Roles/getRolBusca')
    .then(res => res.json())    
    .then(data => {

        //debugger
        //console.log(data[0].nombrerol);
        //console.log(data[1].nombrerol);
        //const tiporoles = (data.idrol);
        //console.log(tiporoles)
        //console.log(data.length)

        // let tiporoles = [];
        // let idrolbusca =[];



        // for(i=0; i < data.length; i++)
        // {
        //     //console.log(data[i].nombrerol)

        //     tiporoles.push(data[i].nombrerol);
        //     idrolbusca.push(data[i].idrol);
           
        // }


        //console.log(tiporoles)
        //console.log(idrolbusca)
        // for (const tiporol1  of tiporoles){
        //     console.log(tiporol1)
        // }

    
    //})    


    
    //const tiporoles = ['admin', 'usuario', 'colaborador'];
    //const tiporoles = ['26', '34', '35'];

    //const listRolid = document.getElementById('listRolid');
    //const daysList = document.getElementById('daysList');
    const selectDays = document.getElementById('daysSelect');
    const idrolselect = document.getElementById('selectidrol');
     
    const fragment = document.createDocumentFragment();
    const fragmentselrol = document.createDocumentFragment();
    // for(const tiporol of tiporoles)
    // {
    //     //console.log(tiporol);
    //     //daysList.innerHTML += `<li>${tiporol}</li>`
    //     const itemList = document.createElement('LI')
    //     itemList.textContent = tiporol
    //       fragment.appendChild(itemList)

    // }





    for(i=0; i < data.length; i++){
        
        
        const selectItem = document.createElement('OPTION');
        selectItem.setAttribute('value', data[i].nombrerol.toLowerCase());
        selectItem.textContent = data[i].nombrerol;
        fragment.appendChild(selectItem)

        const selectIdrol = document.createElement('OPTION');
        selectIdrol.setAttribute('value', data[i].idrol);
        selectIdrol.textContent = data[i].idrol;
        fragment.appendChild(selectIdrol);

       



    }






    // for (const tiporol of data)
    //  {
        
    //     console.log(tiporol)
        
    //     const selectItem = document.createElement('OPTION');
    //     selectItem.setAttribute('value', tiporol.toLowerCase());
    //     selectItem.textContent = tiporol;
    //     fragment.appendChild(selectItem)

    //  }
    
    
    
    
    //buenoooooooooooooooooooooooo
    // for (const tiporol of tiporoles)
    // {
    //     const selectItem = document.createElement('OPTION');
    //      selectItem.setAttribute('value', tiporol.toLowerCase());
    //      selectItem.textContent = tiporol;
    //      fragment.appendChild(selectItem)

    // }
    //fin buenoooooooooooooooooooooooo




    // //console.log(fragment);
    // //daysList.appendChild(fragment);
    selectDays.appendChild(fragment);
    //idrolselect.appendChild(fragmentselrol);

    })    
     
    
    
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
        $(tbody).on("click", "button.editar", function(){




            //alert('hola');
            //console.log('click');

            $('#modalFormUsuarios').modal('show');

            document.querySelector('#titleModal').innerHTML = "Actualizar Usuario";
            document.querySelector('.modal-header').classList.replace("headerRegister", "headerUpdate");
            document.querySelector('#btnActionForm').classList.replace("btn-primary", "btn-info");
            document.querySelector('#btnText').innerHTML= "Actualizar";
            document.getElementById('claveuseroculto1').style.display = 'none';
            document.getElementById('claveuseroculto2').style.display = 'none';


            var iduser = this.getAttribute("rl");
            //console.log(iduser);
            
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url+'/Usuarios/getUser/'+iduser;
            request.open("GET", ajaxUrl, true);
            request.send();

            request.onreadystatechange = function()
            {
                 
                 if(request.readyState == 4 && request.status == 200)
                 {
                    
                    console.log(request.responseText);

                    var objData = JSON.parse(request.responseText);

                    if(objData.status)
                    {
                        
                        document.querySelector("#idUsuario").value = objData.data.idpersona;
                        document.querySelector("#nombreuser").value = objData.data.nombre;
                        document.querySelector("#correouser").value = objData.data.email_user;
                        document.querySelector("#claveuser").value = objData.data.password;
                        document.querySelector("#claveuser2").value = objData.data.password;
                        document.querySelector("#telefonouser").value = objData.data.telefono;
                        document.querySelector("#listRolid").value = objData.data.rolid;
                        document.querySelector("#listStatus").value = objData.data.status;

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
   

}



//funcion eliminar usuarios
function fntDelUser()
{
    var btnDelUser = document.querySelectorAll(".btnDelUser");
    btnDelUser.forEach(function(btnDelUser)
    {
        btnDelUser.addEventListener('click', function()
        {
            var iduser = this.getAttribute("rl");
            alert(iduser);


            // swal(
            // {
            //     title: "Eliminar Rol",
            //     text: "¿Esta seguro de Eliminar el Rol",
            //     type: "warning",
            //     showCancelButton: true,
            //     confirmButtonText: "Si, eliminar",
            //     cancelButtonText: "No, cancelar",
            //     closeOnConfirm: false,
            //     closeOnCancel: true

            // },  function(isConfirm)


                
            //     {

            //         if(isConfirm)
            //         {
                    
            //              var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            //              var ajaxUrl = base_url+'/Roles/delRol/';
            //              var strData = "idrol="+idrol;
            //              request.open("POST",ajaxUrl,true);
            //              request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            //              request.send(strData);
            //              request.onreadystatechange = function()
            //              {

            //                 //console.log(request);
            //                  if(request.readyState == 4 && request.status == 200)
            //                  {
                                 
            //                     //console.log(request.responseText);
            //                     var objData = JSON.parse(request.responseText);
            //                     if(objData.status)
            //                     {
            //                          swal("Eliminar", objData.msg , "success");
            //                          tableRoles.api().ajax.reload(function()
            //                          {
            //                               fntEditRol();
            //                               fntDelRol();

            //                          });
            //                     }else{

            //                       swal("Atencion!", objData.msg , "error");    

            //                     }
            //                  } 
            //              }

            //         }
                


            //     });
        });

    });    
}