<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

       
    </head>
    <body>

         
         
         <div class="container-fluid" style="background-color: #1019AB ;color: white;text-align: center;padding-top: 20px">
            <div class="row">
              <div class="col-lg-6">
                 <center><h1>BLOG-SYSTEM(MAKE FOR PROGRAMED :</h1> </center>

              </div>
              <div class="col-sm-3">
              @if(Session::has('usuario'))
               @foreach (Session::get('usuario') as $array)
            
                @foreach ($array as $word => $meaning)
                
                  @if($word=='nombre')
                  <dd><h1> Bienvenido : {{ $meaning }}</h1></dd>
                  @endif
                @endforeach
               
                @endforeach
              @endif
              </div>
              <div class="col-sm-3">
              {!! Form::open(['url' => 'cerrar']) !!}
              <button type="submit" class="btn btn-outline-light" >Cerrar Sesion</button>
              {!! Form::close() !!}
              </div>
            </div>
          </div>
            
           

        

       
          @yield('contenido')
                
                  
         
          

      <footer >
        <div class="container-fluid" style="">
            <div class="row">
              <div class="col-sm-3">
              {!! Form::open(['url' => 'vistablog']) !!}
              <button  type="submit"  class="btn btn-outline-secondary"><h2><div class="container-fluid" style="">Crear Blog </div></h2></button>
              
              {!! Form::close() !!}
              </div>
              <div class="col-sm-3" style="text-align: center;">
                {!! Form::open(['url' => 'Publicaciones']) !!}
              <button  type="submit"  class="btn btn-outline-secondary"><h2><div class="container-fluid" style="">Ver Blogs </div></h2></button>
              {!! Form::close() !!}
              </div>
              <div class="col-sm-3" style="text-align: center;">
                {!! Form::open(['url' => 'Votar']) !!}
              <button  type="submit"  class="btn btn-outline-secondary"><h2><div class="container-fluid" style="">Votar Blogs </div></h2></button>
              {!! Form::close() !!}
              </div>
              <div class="col-sm-3" style="text-align: center;">
                {!! Form::open(['url' => 'ranking']) !!}
              <button  type="submit"  class="btn btn-outline-secondary"><h2><div class="container-fluid" style="">Ver Ranking </div></h2></button>
              {!! Form::close() !!}
              </div>
            </div>
          </div>
        
      </footer>
         
        

       


    </body>
</html>
