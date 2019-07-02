 @extends('MasterBlog')





@section('contenido')
                <div class="container-fluid" style="background-color: black ;color: white;text-align: center;padding-top: 20px">
                     <center><h1> CREA TU PUBLICACION</h1></center>
                 </div>
                 <div class="conteiner" style="padding-top: 20px;padding-right: 100px;padding-left: 100px;">
                      {!! Form::open(['url' => 'formularioCrearBlog']) !!}    
                             <label for="apellido">Tema </label>
                             <p></p>
                             <input type="text" name="tema" class="form-control" id="" placeholder="Tema">
                             <p></p>
                             <label for="nombre">Comentario</label>
                             <p></p>

                            <div class="container" style="padding-top: 10px;" >
                                <textarea class="form-control" placeholder="Escriba aqui su comentario" name="comentario" rows="8"></textarea>
                              </div>
                              <div class="container" style="padding-top: 10px;" >
                              <!--{!! Form::open(array('url' => 'subir','files'=> true)) !!}
                              {!! Form::file('file') !!}
                              {!! Form::submit('subir')!!}
                              {!! Form::close() !!}-->
                              </div>
                             <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                
                            </div>  
                      {!! Form::close() !!}
                 </div>
@stop