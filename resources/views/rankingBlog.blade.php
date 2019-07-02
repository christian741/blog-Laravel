@extends('MasterBlog')





@section('contenido')

   <?php $acumulador=0; ?>
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
        
        @foreach ($votaciones as $array)

          @if ($array->numeroBlog==$categoria->numeroPublicacion )
                 <?php  $acumulador++;
                        $acumulador= intval($acumulador)*5;

                 ?>
                 
                  
                  <div class="container" style="background: #F7DC6F  ; width: {{$acumulador}}px;">
                    Votos
                  </div> 
                  
          @endif    
        @endforeach

         
  @endforeach

   
    	
@stop