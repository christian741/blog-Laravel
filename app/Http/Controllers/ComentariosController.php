<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\publicaciones;
use App\comentarios;
use App\votos;
use \Session;


class ComentariosController extends Controller

{

   // 
    public function ingresarBlog (Request $request){
         
     	$tema= new publicaciones;
        $tema2=publicaciones::all();
        $numeroPublicacion=sizeof($tema2)+1;
        echo $numeroPublicacion;

        if (Session::has('usuario')) {
              if(Session::has('usuario')){
                 foreach (Session::get('usuario') as $array){
            
                    foreach ($array as $word => $meaning){
               
                     if($word=='nombre'){
                       $tema['usuario']= $meaning;
                   }
                  }
                 }
               }    
            
        }
    	$tema['tema'] =$request['tema'];
    	$tema['publicacion'] =$request['comentario'];
        $tema['numeroPublicacion']=$numeroPublicacion;

        if($tema['usuario']==null || $tema['tema']==null || $tema['publicacion']==null){
             return view('Jpanel');
        }
    	
    	$tema->save();
     
       
    	return view('MasterBlog');
    }


    public function formulario(){

        return view('Jpanel');

    }


    public function mostrarPublicaciones(){

        $total_publicaciones = publicaciones::all();
        $total_comentarios =comentarios::all();
        

        $datos=[
            'total_publicaciones'=>$total_publicaciones,
            'total_comentarios'=>$total_comentarios,
        ];

        return view('TodasPublicaciones',$datos);


     }

    public function comentariosPublicaciones (Request $request){

        $total_publicaciones = publicaciones::all();
        $total_comentarios = comentarios::all();


        $comentarios= new comentarios;

        $comentarios['usuarioComentando']=$request['usuario'];
        $comentarios['numeroBlog']=$request['numeroPublicacion'];
        $comentarios['comentario']=$request['comentario'];

         $datos=[
            'total_publicaciones'=>$total_publicaciones,
            'total_comentarios'=>$total_comentarios,
        ];

        if ($comentarios['numeroBlog']<0 || $comentarios['numeroBlog']>sizeof($total_publicaciones)) {
            return view('TodasPublicaciones',$datos);
        }
      
        if($comentarios['comentario']==null){
             return view('TodasPublicaciones',$datos);
        }
        
        $comentarios->save();




        return view('TodasPublicaciones',$datos);   
     }



     /**
       =======================================================
                         Votaciones 
       =======================================================
     */
    public function votacionesRuta (){
        $total_publicaciones = publicaciones::all();
       
        
         $datos=[
            'total_publicaciones'=>$total_publicaciones,
            
        ];

       return view('votarPublicaciones',$datos);
     }


     public function votacionesBlog (Request $request){
        $total_publicaciones = publicaciones::all();

        $votaciones= new votos;

        $votaciones['usuario']=$request['usuario'];
        $votaciones['numeroBlog']=$request['numeroPublicacion'];
        $votaciones['votacion']=$request['puntaje'];


        $datos=[
            'total_publicaciones'=>$total_publicaciones,
            'votaciones'=>$votaciones,
           
        ];


         if ($votaciones['numeroBlog']<=0 || $votaciones['numeroBlog']>sizeof($total_publicaciones) || $votaciones['numeroBlog']==null) {
            return view('votarPublicaciones',$datos);
        }
    
        
        $votaciones->save();

       return view('votarPublicaciones',$datos);
     }

     public function ranking(){
        $total_publicaciones = publicaciones::all();
        $votaciones = votos::all();
        
         $datos=[
            'total_publicaciones'=>$total_publicaciones,
            'votaciones'=>$votaciones,
           
        ];
        return view('rankingBlog',$datos);
     }
    	
}



