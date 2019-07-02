<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use \Session;

class registroUsuarios extends Controller
{
    public function registro (Request $request){

      /*$file = $request->file('file');
 
       //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();
 
       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put($nombre,  \File::get($file));*/


    	$usuarios= new usuario;

    	$usuarios['primerNombre'] =$request['primerNombre'];
    	$usuarios['segundoNombre'] =$request['segundoNombre'];
    	$usuarios['primerApellido'] =$request['primerApellido'];
    	$usuarios['segundoApellido'] =$request['segundoApellido'];
    	$usuarios['edad'] =$request['edad'];
    	$usuarios['email'] =$request['email'];
    	$usuarios['direccion'] =$request['direccion'];
    	$usuarios['telefono'] =$request['telefono'];
    	$usuarios['password'] =$request['contraseña'];
     // $usuarios['imagen']=$nombre;
    	$usuarios->save();
         
         return view('welcome');
    	

    }

    public function verificarUsuario(Request $request){

        Session::forget('usuario');

        $correo=$request->input('email');
        $contraseña=$request->input('password');
        

        $dataCategoria = usuario::all();
        $array=$dataCategoria->toArray();
        
        for ($i=0; $i <sizeof($array) ; $i++) { 
            $valor=$array[$i];

            if ($valor['email']==$correo && $valor['password']==$contraseña){
                 if(Session::has('usuario')){
            
                        $dato = Session::get('usuario');
                        $dato[] = array(
                            'nombre'=>$valor['primerNombre'],
                            'apellido'=>$valor['primerApellido'],
                            'correo'=>$valor['email'],
                            
                        );                     

                        
                        
                        Session::put('usuario', $dato);  
                                        
                 }else{
                        $dato1[] = array(
                            'nombre'=>$valor['primerNombre'],
                            'apellido'=>$valor['primerApellido'],
                            'correo'=>$valor['email'],
                            
                        );         
                    
                      Session::put('usuario',$dato1);
                 
                 }

                 if(Session::has('usuario')){
                   return view ('MasterBlog');
                 }
                
            }
            
        }
              return view ('welcome');
        
    }

    public function cerrarSesion (){

          
             Session::forget('usuario');
         

          return view('welcome');
    }
}
