
<?php header_ppal($data) ?>
    
    
    
    <div class="vuetareasext">
        
        <p>Haga su listado de tareas y recordatorios, elimine y agregue cada q realice una labor</p>
        <div class="vuetareasint">

            <div class="container" id="app">
                <h3 class="text-center">{{titulo}}</h3>
                <input type="text" class="form-control my-3" v-model="nuevaTarea" v-on:keyup.enter="agregarTarea">
                <button class="btn btn-primary" @click="agregarTarea">Agregar</button>
            

                

                <div class="mt-3" v-for="(item, index) of tareas">
                    <div :class="[ 'alert', item.estado ? 'alert-success' : 'alert-danger' ]" role="alert">
                        <div class="d-flex justify-content-between align-items-center">

                            <div>
                                {{index}} - {{item.nombre}} - {{item.estado ? 'realizada' : 'pendiente'}}
                            </div>
                            <div>
                                <button class="btn btn-success btn-sm" @click="editarTarea(index)">OK</button>
                                <button class="btn btn-danger btn-sm" @click="eliminar(index)">X</button>
                            </div>


                        </div>
                        
                    </div>

                </div>
            
            
            
            
            </div>
        </div>
    </div>



<?php footer_ppal($data) ?>