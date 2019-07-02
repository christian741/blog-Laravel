@extends('MasterBlog')





@section('contenido')

      <!-- FOR EACH PUBLICACIONES -->
       <div class="container-fluid" style="background-color: #000000;color: white   ">
            <center><h1>Publicaciones</h1></center>
            
      </div>

      @foreach ($total_publicaciones as $categoria)

      <?php  $valor=$categoria->numeroPublicacion;?>
        <center><div class="container-fluid" style="background-color: #85C1E9"> Numero de Publicacion  :  {{$valor}}</div></center>
         <span class="border border-primary" style="text-align: center">
        
         <div class="row" style="background-color: #85C1E9;">
          <div class="col-md-5" style="background-color: #F1948A; color: #922B21  ">
            
            <center>Nombre: {{$categoria->usuario}} </center>
            <center>Tema: {{$categoria->tema}}  </center>
            </div>
         
        
        <div class="col-lg-7" style="background-color: #FADBD8  ">  
          <center>{{$categoria-> publicacion}}<br></center>
        </div>
        </div> 
        </span>
        @foreach ($total_comentarios as $comentarios) 

        @if ($comentarios->numeroBlog==$categoria->numeroPublicacion)

        <div class="container">
          <div class="row">
            <div class="col align-self-start" style="background-color: #58D68D  ">
               <center> Comentarios: </center>
            </div>
            <div class="col align-self-center" style="background-color: #82E0AA  ">
              <center> Nombre: {{$comentarios->usuarioComentando}}<br></center>
            </div>
            <div class="col align-self-end" style="background-color: #ABEBC6    ">
              <center>{{$comentarios->comentario}}</center>
            </div>
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


       </center>

     

         
  @endforeach
     <div class="container-fluid" style="text-align: center">
     <button type="button" style="padding-right: 100px;padding-left: 100px" data-toggle="modal" data-target=".Comentarios" class="btn btn-primary"><h2>Comentar</h2></button>
     </div>
         
   {!! Form::open(['url' => 'comentario']) !!}
            
              
        <div class="modal fade Comentarios" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

            <div class="container" style="padding-top: 10px;" >
            <input type="hidden" name="usuario" value= "<?php echo $valor1 ;?> ">
            <input type="text" name="numeroPublicacion" placeholder="Numero de Publicacion" >

              <textarea class="form-control" placeholder="Escriba aqui su comentario" name="comentario" rows="8"></textarea>
              

            </div>

                          <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                
                         </div>
              

               </div>
           </div>
       </div>
          {!! Form::close() !!}










@stop