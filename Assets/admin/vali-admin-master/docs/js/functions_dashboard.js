//alert('functions_dashboard.js');


//INICIO FETCH LLENADO DE LA TABLA DATATABLE DE DASHBOARD SOLO LECTURA
// fetch(base_url+'/Dashboard/getUsuariosDash')
    
//     .then((res) => res.json())
//     .then(response => {

//         //console.log(response);

//         var outputdash = '';
//         for(var i in response)
//         {
//               outputdash +=
//               `<tr>
//                        <td>${response[i].idpersona}</td>
//                        <td>${response[i].nombre}</td>
//                        <td>${response[i].telefono}</td>
//                        <td>${response[i].email_user}</td>
//                        <td>${response[i].datacreated}</td>
//                        <td>${response[i].rolid}</td>
//                        <td>${response[i].status}</td>
//               </tr>`;
             
//         }

//         document.querySelector('.tbodydash').innerHTML = outputdash;

// }); //FIN DE FETCH



//OBJETO DE LA DATATABLE MODIFICA VALORES Y COLUMNAS
var tableUserdash;
$(document).ready(function(){
    
        tableUserdash = $('#tableUserdash').DataTable({
      

        "aProcessing":true,
        "aServerSide":true,
        "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax":{
        "url": " "+base_url+"/Dashboard/getUsuariosDash",
         
        "dataSrc":""
        },
        "columns":
        [
            
            {"data":"idpersona"},
            {"data":"nombre"},
            {"data":"telefono"},
            {"data":"email_user"},
            {"data":"datacreated"},
            {"data":"rolid"},
            {"data":"status"},
            
                        
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