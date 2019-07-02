
@extends('MasterBlog')





@section('contenido')

      <!-- FOR EACH PUBLICACIONES -->

      @foreach ($total_publicaciones as $categoria)
      
       <div class="row">
          <div class="col-md-12">Nombre: {{$categoria->usuario}}<br>
            Tema: {{$categoria->tema}}
          </div>
        <div class="col-12" style="">  
          {{$categoria-> publicacion}}<br>
        </div>

        </div> 

        @foreach ($total_comentarios as $comentarios) 

        @if ($comentarios->numeroBlog==$categoria->numeroPublicacion)
        <div class="row">
        
          <div class="col-md-12">Nombre: {{$comentarios->usuarioComentando}}<br>
          </div>
         <span class="" style="margin: auto;">
        <div class="col-12" style="">  
            {{$comentarios->comentario}}<br>
        </div>

        </div> 

        @endif
        @endforeach  

          <?php 
          
       
          if(Session::has('usuario')){
             foreach (Session::get('usuario') as $array){
                foreach ($array as $word => $meaning){
                
                  if($word=='nombre'){
                     $valor1=$meaning;
                   }
                }
               
            }

          }
           ?>
          </span>
        
          
          
          <button type="button" data-toggle="modal" data-target=".Comentarios" class="btn btn-primary">Comentar</button>

         
              <?php 
           
       $valor=$categoria->numeroPublicacion;
       echo $valor;

       ?>

       </center>

       {!! Form::open(['url' => 'comentario']) !!}
            
              
        <div class="modal fade Comentarios" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

            <div class="container" style="padding-top: 10px;" >
            <input type="text" name="usuario" value= "<?php echo $valor1 ;?> ">
            <input type="text" name="numeroPublicacion" value= "<?php echo $valor ;?> ">
              <textarea class="form-control" placeholder="Escriba aqui su comentario" name="comentario" rows="8"></textarea>
              

            </div>

                          <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                
                         </div>
              

               </div>
           </div>
       </div>
          {!! Form::close() !!}


         
  @endforeach


 









@stop