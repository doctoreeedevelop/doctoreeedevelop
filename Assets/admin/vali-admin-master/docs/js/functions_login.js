
//alert('functions_login.php');


$('.login-content [data-toggle="flip"]').click(function() {
    $('.login-box').toggleClass('flipped');
    return false;
});

document.addEventListener('DOMContentLoaded', function()
{
    if(document.querySelector("#formLogin"))
    {
        let formLogin = document.querySelector("#formLogin");
        formLogin.onsubmit = function(e)
        {
            e.preventDefault();

            let strEmail = document.querySelector('#txtEmail').value;
            let strPassword = document.querySelector('#txtPassword').value;

            if(strEmail == "" || strPassword == "")
            {
                swal("Por Favor", "Llena los campos Correo y Contraseña", "error");
                return false;

            }else{

                var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject;
                var ajaxUrl = base_url+'/Login/loginUser';
                var formData = new FormData(formLogin);
                request.open("POST", ajaxUrl, true);
                request.send(formData);

                //console.log(request);  

                request.onreadystatechange = function()
                {
                
                    if (request.readyState !=4) return;
                    if (request.status == 200)
                    {

                        //console.log(request.responseText);
                        var objData = JSON.parse(request.responseText);
                        if (objData.status)
                        {
                            swal("Bienvenido", objData.msg, "success");
                            window.location = base_url+'/Dashboard';
                        
                        }else{

                            swal("Atencion", objData.msg, "error");
                            document.querySelector('#txtPassword').value = ""; 

                        }
                    }else{

                        swal("Atencion", "Error en el proceso", "error");

                    } 

                    return false;

                }


            }


        }
    }

}, false);
