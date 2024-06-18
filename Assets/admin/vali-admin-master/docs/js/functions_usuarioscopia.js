


// fetch('http://localhost/doctoreeedevelop/Usuarios/getUsuarios')
// .then((res) => res.json())
// .then(data => {

//     console.log(data);

//     fetch('./Usuarios/setUsuario', {    
//         method: 'POST',
//         body: datos
//     })
//     .then(res => res.json())
//     .then(data => {

//     tableUsuarios = $('#tableRoles').dataTable({

//         "aProcessing":true,
//         "aServerSide":true,
//         "language": {
//         "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
//         },
//         "ajax":{
//         "url": " "+base_url+"/Roles/getRoles",
    
//         "dataSrc":""
//         },
//         "columns":[
        
//         {"data":"idrol"},
//         {"data":"nombrerol"},
//         {"data":"descripcion"},
//         {"data": "status"},
//         {"data": "options"}
                    
//         ],
//         "resonsieve":"true",
//         "bDestroy": true,
//         "iDisplayLength": 10,
//         "order":[[0,"desc"]]   


//     });


//         document.querySelector('.tbody').innerHTML = output;


// });
// }


// document.addEventListener('DOMContentLoaded', function(){
    
    
//         $('.table').DataTable();
    

//         //formulario registro usuario
            
//         let formUsuario = document.getElementById("formadminUser");
            
//         formUsuario.addEventListener('submit', function(e)
//         {


//             e.preventDefault();
//             //console.log('me diste un click')

//             let datos = new FormData(formUsuario);

            
//             console.log(datos)
//             console.log(datos.get('nombreregfor'))
//             console.log(datos.get('correoregfor'))


//             var strNombre = document.querySelector('#nombreuser').value;
//             var strCorreo = document.querySelector('#correouser').value;
//             var strClave = document.querySelector('#claveuser').value;
//             var strClave2 = document.querySelector('#claveuser2').value;
//             var strTelefono = document.querySelector('#telefonouser').value;


//             if( strNombre == '' || strCorreo == '' || strClave == '' || strClave2 == '' || strTelefono == ''  )
//             {
//                 swal("Atencion" , "todos los campos son obligatorios.", "error");
//                 return false;
//             }


//             //fetch('./Post/post.php', {

//             fetch('./Usuarios/setUsuario', {    
//                 method: 'POST',
//                 body: datos
//             })
//                 .then(res => res.json())
//                 .then(data => {

//                     console.log(data)
                    
//                     if(data.status)
//                     {
//                         $('#registrousuario').modal("hide");
//                         formUsuario.reset();
//                         swal("Usuarios", data.msg ,"success");
//                     }else{
//                         swal("Error", data.msg, "error");
//                     }
                    
                    

//                 }) 

        
//         });

// });

// function openModal() {
//     console.log('click');    
//     $('#modalFormUsuario').modal('show');
// }


// //alert('function_usuarios');



// //document.addEventListener('DOMContentLoaded', function(){


//     //let tableUsuarios;


//     //tableUsuarios = $('#tableUsuarios').dataTable({ 

//     // fetch('http://localhost/doctoreeedevelop/Usuarios/getUsuarios')
//     // .then((res) => res.json())
//     // .then(response => {

//        //console.log(response);

//         // let output = '';
//         // for(let i in response)
//         // {
//         //        output +=`<tr>
//         //              <td>${response[i].idpersona}</td>
//         //              <td>${response[i].nombre}</td>
//         //              <td>${response[i].telefono}</td>
//         //              <td>${response[i].email_user}</td>
//         //              <td>${response[i].password}</td>
//         //              <td>${response[i].token}</td>
//         //              <td>${response[i].datacreated}</td>
//         //              <td>${response[i].rolid}</td>
//         //        </tr>`;
             
//         // }



//         // tableUsuarios = $('#tableRoles').dataTable({

//         //     "aProcessing":true,
//         //     "aServerSide":true,
//         //     "language": {
//         //         "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
//         //     },
//         //     "fetch":{
//         //          "url": " "+base_url+"/Roles/getRoles",
             
//         //          "dataSrc":""
//         //     },
//         //     "columns":[
                
//         //         {"data":"idrol"},
//         //         {"data":"nombrerol"},
//         //         {"data":"descripcion"},
//         //         {"data": "status"},
//         //         {"data": "options"}
                            
//         //     ],
//         //     "resonsieve":"true",
//         //     "bDestroy": true,
//         //     "iDisplayLength": 10,
//         //     "order":[[0,"desc"]]   
    
            
//         // });
        
//         //console.log(tableUsuarios)
//         //document.querySelector('.tbody').innerHTML = output;

//     //}).catch(error => console.log(error));

     
//     //});


//         //nuevo usuario
//     //  var formUsuario = document.querySelector("#formUsuario");
//     //  formUsuario.onsubmit = function(e)
//     //  {
//     //      e.preventDefault();

//     //      var strNombre = document.querySelector('#txtNombre').value;
//     //      var strCorreo = document.querySelector('#txtCorreo').value;
//     //      var strCorreo = document.querySelector('#txtPassword').value;
//     //      var strCorreo = document.querySelector('#txtPassword').value;

//     //  }
    
    
    
// //});



// // $(document).ready(function(){
    
// //     $('.table').DataTable()
// // }  

//     //     "aProcessing":true,
//     //     "aServerSide":true,
//     //     "language": {
//     //         "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
//     //     },
//     //     "ajax":{
//     //         "url": " "+base_url+"/Usuarios/getUsuarios",
         
//     //         "dataSrc":""
//     //     },
//     //     "columns":[
            
//     //         {"data":"idpersona"},
//     //         {"data":"nombre"},
//     //         {"data":"telefono"},
//     //         {"data":"email_user"},
//     //         {"data":"password"},
//     //         {"data":"token"},
//     //         {"data":"datacreated"},
//     //         {"data":"rolid"},
                        
//     //     ],
//     //     "resonsieve":"true",
//     //     "bDestroy": true,
//     //     "iDisplayLength": 10,
//     //     "order":[[0,"desc"]]   



//     //});
    
//     //$( '#tableUsuarios' ).dataTable().api();
    
// //})


// // function openModaluser(){
// //      $('#modalFormUser').modal('show');
// // }