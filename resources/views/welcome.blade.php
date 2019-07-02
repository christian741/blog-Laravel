<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

       
    </head>
    <body>
        <div class="container-fluid" style="background-color: #1019AB ;color: white;text-align: center;padding-top: 20px">
                     <center><h1> BLOG-SYSTEM(MAKE FOR PROGRAMED</h1></center>
                 </div>
    
             
           
         <div class="container">
          <div class="row">
            <div class="col-sm">   
            </div>
            <div class="col-md-6">
            </div>
            <div class="col-sm">
            </div>
          </div>
        </div>



       <div class="conteiner">
        <div class="row">
            <div class="col-lg-3" style="padding-left: 400px;padding-right: 400px">
              <button type="button" style="padding-left: 100px;padding-right: 100px" data-toggle="modal" class="btn btn-outline-secondary" data-target=".Registro"><center>Registro</center></button>
            </div>
            <div class="col-lg-3" style="">
               <button type="button" data-toggle="modal" style="padding-left: 100px;padding-right: 100px" class="btn btn-outline-primary" data-target=".Login" >Login</button>
            </div>
        </div>
        </div>
        <!--                               MODAL        REGISTRO                                    -->
        <div class="modal fade Registro" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

                 <div class="container-fluid" style="background-color: black;color: white;text-align: center;">
                     <h1>REGISTRO</h1>
                 </div>
                 <div class="conteiner" style="padding-top: 20px;padding-right: 100px;padding-left: 100px;">
                      {!! Form::open(['url' => 'formularioUsuarios' , 'file'=>'true'] ) !!}
                          <div class="form-row">
                             <div class="form-group col-md-6">
                             <label for="nombre">Primer Nombre</label>
                             <input type="text" name="primerNombre" class="form-control" id="" placeholder="Primer Nombre" >
                             </div>
                             <div class="form-group col-md-6">
                             <label for="apellido">Segundo Nombre</label>
                             <input type="text" name="segundoNombre" class="form-control" id="" placeholder="Segundo Nombre">
                             </div>
                             </div>
                             <div class="form-row">
                             <div class="form-group col -md-6">
                             <label for="apellido">Primer Apellido</label>
                             <input type="text" name="primerApellido" class="form-control" id="" placeholder="Primer Apellido" >
                             </div>
                             <div class="form-group col-md-6">
                             <label for="numeroDocumento">Segundo Apellido</label>
                             <input type="text" name="segundoApellido" class="form-control" id="" placeholder="Segundo Apellido" >
                             </div>
                             </div>
                             <div class="form-row">
                             <div class="form-group col-md-6">
                             <label for="ciudad">Edad</label>
                             <input type="number" name="edad" class="form-control" id="" placeholder="Edad" >
                             </div>
                             <div class="form-group col-md-6">
                             <label for="edad">Email</label>
                             <input type="email" name="email" class="form-control" id="" placeholder="Email" >
                             </div>
                            </div>
                            <div class="form-row">
                             <div class="form-group col-md-6">
                             <label for="ciudad">Direccion</label>
                             <input type="text" name="direccion" class="form-control" id="" placeholder="Direccion" >
                             </div>
                             <div class="form-group col-md-6">
                             <label for="edad">Telefono</label>
                             <input type="text" name="telefono" class="form-control" id="" placeholder="Telefono" >
                             </div>
                            </div>
                             <div class="form-row">
                             <div class="form-group col-md-6">
                             <label for="ciudad">Contraseña</label>
                             <input type="password" name="contraseña" class="form-control" id="" placeholder="Contraseña" >
                             </div>
                            </div>
                        
                                              
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                                
                      {!! Form::close() !!}
                      </div>
            </div>
          </div>
        </div>

   
        <!--                               MODAL        LOGIN                               -->
        <div class="modal fade Login" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

                  <div class="container-fluid" style="background-color: black;color: white;text-align: center;">
                     <h1>LOGIN</h1>
                 </div>
                  <div class="conteiner" style="padding-top: 20px;padding-right: 100px;padding-left: 100px;">
                      {!! Form::open(['url' => 'entrarUsuario']) !!}
                      <div class="row">
                            <div class="col">
                            </div>
                            <div class="col-lg-12">
                             <label for="nombre">Correo</label>
                             <input type="email" name="email" class="form-control" id="" placeholder="Correo" required="">
                            </div>
                            <div class="col">
                            </div>
                          </div>
                     <div class="row">
                        <div class="col">
                        </div>
                        <div class="col-lg-12">
                           <label for="nombre">Password</label>
                           <input type="password" name="password" class="form-control" id="" placeholder="Password" required="">
                        </div>
                        <div class="col">
                        </div>
                      </div>
                       <div class="row">
                        <div class="col">
                        </div>
                        <div class="col-lg-12">
                          
                        </div>
                        <div class="col">
                        </div>
                      </div>

                       <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                    
                                
                      {!! Form::close() !!}
                  </div>
              
            </div>
          </div>
        </div>
         
       


    </body>
</html>
