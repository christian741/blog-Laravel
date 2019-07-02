<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('formularioUsuarios','registroUsuarios@registro');
Route::post('entrarUsuario','registroUsuarios@verificarUsuario');
Route::post('cerrar','registroUsuarios@cerrarSesion');
Route::post('formularioCrearBlog','ComentariosController@ingresarBlog');
Route::post('vistablog','ComentariosController@formulario');
Route::post('Publicaciones','ComentariosController@mostrarPublicaciones');
Route::post('comentario','ComentariosController@comentariosPublicaciones');
Route::post('Votar','ComentariosController@votacionesRuta');
Route::post('votarBlog','ComentariosController@votacionesBlog');
Route::post('ranking','ComentariosController@ranking');





/*Route::get('Storage/{archivo}', function ($archivo) {

     $public_path = public_path();
     $url = $public_path.'/imagenes/'.$archivo;
     //verificamos si el archivo existe y lo retornamos
     if (Storage::exists($archivo))
     {
       return response()->download($url);
     }
     //si no se encuentra lanzamos un error 404.
     abort(404);

});*/