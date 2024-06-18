//alert('functions_ppalimagenes.js');

//CARGA AUTOMATICA DE LOS ARCHIVOS
document.addEventListener('DOMContentLoaded', function()
{
       
    //MANDAR LA IMAGEN HACIA EL BACKEND
    let formUsuario = document.getElementById("formImg");

    
    document.getElementById('img').addEventListener('change', (e) => {
        console.log(e.target.files[0]);
        let name = e.target.files[0];
        let img = URL.createObjectURL(name);
        document.getElementById("imgPrevia").src = img;

    });

    document.getElementById("guardar").addEventListener("click", async (e) => {
        e.preventDefault()
        let formImg = document.getElementById("formImg");
        try
        {
            let response = await fetch(base_url+'/imagenes/setimagsec4',
            
            {
                method: "POST",
                body: new FormData(formImg)    
            }); 

            let data = await response.text();
            //console.log(data);


        }catch(error){

        }
    });


});