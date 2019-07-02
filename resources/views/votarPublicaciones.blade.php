@extends('MasterBlog')





@section('contenido')

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
        <?php 
          $publicacion=$categoria->numeroPublicacion;
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


       
	@endforeach
   <div class="container-fluid" style="text-align: center">
     <button type="button" style="padding-right: 100px;padding-left: 100px" data-toggle="modal" data-target=".Votacion" class="btn btn-primary"><h2>Votar</h2></button>
     </div>

  {!! Form::open(['url' => 'votarBlog']) !!}
         

        <div class="modal fade Votacion" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

                  <input type="hidden" name="usuario" value="<?php echo $valor1 ?>">
                  <input type="text" name="numeroPublicacion" placeholder="Numero de Publicacion">
                   <button type="check-box" class="btn btn-primary" name="puntaje" value="1">1</button>   
                   <button type="check-box" class="btn btn-primary" name="puntaje" value="2">2</button>  
                   <button type="check-box" class="btn btn-primary" name="puntaje" value="3">3</button>  
                   <button type="check-box" class="btn btn-primary" name="puntaje" value="4">4</button>  
                   <button type="check-box" class="btn btn-primary" name="puntaje" value="5">5</button>  
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Guardar Cambios</button>       
                </div>
               <!--  <button type="submit" id="postback" name="postback" class="boton">
                   <img src="http://www.forosdelweb.com/f18/img/boton_enviar.png"/> Enviar
                  </button> -->

               </div>
           </div>
       </div>
      {!! Form::close() !!}

@stop