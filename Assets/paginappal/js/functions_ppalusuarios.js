
//alert('functions_ppalusuarios.js');


document.addEventListener('DOMContentLoaded', function(){

    
    //formulario Login //formulario Login usuario//formulario Login usuario//formulario Login usuario


    let formLogin = document.getElementById("formLogin");
    
    if(formLogin){
        formLogin.addEventListener('submit', function(e)
        {


            e.preventDefault();
            //console.log('me diste un click login')
        
            let datoslog = new FormData(formLogin);

            
            //console.log(datoslog)
            //console.log(datoslog.get('correologfor'))
            //console.log(datoslog.get('clavelogfor'))


            
            var strCorreolog = document.querySelector('#correologfor').value;
            var strClavelog = document.querySelector('#clavelogfor').value;
            
            //console.log(strCorreolog);
            //console.log(strClavelog);


            if( strCorreolog == '' || strClavelog == '' )
            {
                swal("Atencion" , "todos los campos son obligatorios.", "error");
                return false;
            }


            //fetch('./Post/post.php', {

            //ENVIO DE DATOS DE LOGIN
            fetch( base_url+'/Registrarse/ingLogin', {    
                method: 'POST',
                body: datoslog
            })
                .then(res => res.json())
                .then(datalog => {

                    //console.log(datalog)
                    
                    if(datalog.status)
                    {
                         $('#loginusuario').modal("hide");
                         formLogin.reset();
                         swal("Login", datalog.msg ,"success");
                         location.reload();
                    }else{
                         swal("Error", datalog.msg, "error");
                    }
                    
                    

                }) 

        
        });

    }




    //formulario registro //formulario registro usuario//formulario registro usuario//formulario registro usuario

    
    let regformUsuario = document.getElementById('regisformUsuario');
       
    if (regformUsuario){
        regformUsuario.addEventListener('submit', function(e)
        {


            e.preventDefault();
            //console.log('me diste un click')
        
            let datos = new FormData(regformUsuario);

            
            //console.log(datos)
            //console.log(datos.get('nombreregfor'))
            //console.log(datos.get('correoregfor'))


            var strNombre = document.querySelector('#nombreregfor').value;
            var strCorreo = document.querySelector('#correoregfor').value;
            var strClave = document.querySelector('#claveregfor').value;
            var strClave2 = document.querySelector('#claveregfor2').value;
            var strTelefono = document.querySelector('#telefonoregfor').value;

            //console.log(strNombre);




            if( strNombre == '' || strCorreo == '' || strClave == '' || strClave2 == '' || strTelefono == ''  )
            {
                swal("Atencion" , "todos los campos son obligatorios.", "error");
                return false;
            }


            //fetch('./Post/post.php', {

            fetch( base_url+'/Registrarse/setUsuario', {    
                method: 'POST',
                body: datos
            })
                .then(res => res.json())
                .then(data => {

                    //console.log(data)
                    
                    if(data.status)
                    {
                        $('#modalregisusuario').modal("hide");
                         regisformUsuario.reset();
                         swal("Usuarios", data.msg ,"success");
                         location.reload();
                    }else{
                          swal("Error", data.msg, "error");
                    }
                    
                    

                });

        
        });

    }    


}); //fin del documentevent listener del evento