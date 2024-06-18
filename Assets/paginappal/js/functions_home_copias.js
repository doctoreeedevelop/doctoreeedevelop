alert('functions_home.js');


$(document).ready(function(){
    $('body').on('click', '.imagenes', async function(){
      
        var idimg = this.getAttribute("rl");
        alert($(this).attr('rl'));
        //console.log(idimg);
        //console.log("clickkkkkk");

        
        /*let datosimg = new FormData(formUsuario);

        
        
        fetch(base_url+'/home/getbusca1Img/'+idimg,        
        {    
        method: 'POST',
        body: datosimg
        })
        .then(res => res.json())
        .then(data => {
    
            console.log(data);
    
        });
        */   
        
        
        //console.log(nuevavar);
        const formnewData = new FormData();
        const json = JSON.stringify(idimg)
        formnewData.append('someData', json);

    
        //MANDA LOS DATOS RECIVIDOS OTRA VEZ AL JSON BACKEND
        try{  
              
            let response = await fetch(base_url+'/home/getbusca1Img/'+idimg ,
            //let response = await fetch(base_url+'/Views/home',
            {       
                method: 'POST',
                body: formnewData
            });
            
            let datanew = await response.text();
            console.log(datanew);
        
        }catch(error){

        }

       
            
            
    
        //});

    })
})



/*let imagenes = document.querySelectorAll(".imagenes");

document.addEventListener('DOMContentLoaded', function()
//window.addEventListener('load', function()
{



        imagenes.addEventListener( 'click', (e)=>{


        //e.preventDefault();
        console.log("click");
        console.log(e);
        //console.log(e.target.attributes.rl.textContent);
        //var idimg = this.getAttribute("rl");

        
    
        //console.log(nuevavar);
       /* const formnewData = new FormData();
        const json = JSON.stringify(idimg)
        formnewData.append('someData', json);

    
        //MANDA LOS DATOS RECIVIDOS OTRA VEZ AL JSON BACKEND
        fetch(base_url+'/home/getbusca1Img/'+idimg,        
        {    
        method: 'POST',
        body: formnewData
        })
        .then(res => res.json())
        .then(data => {
    
            console.log(data);
    
        });*/
        
    //});

//});


