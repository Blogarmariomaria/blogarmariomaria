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
Route::view('/index', 'index');
Route::view('/home', 'home');
Route::view('/belleza', 'belleza');
Route::view('/belleza1', 'belleza1');
Route::view('/belleza2', 'belleza2');
Route::view('/moda', 'moda');
Route::view('/moda1', 'moda1');
Route::view('/moda2', 'moda2');
Route::view('/acercade', 'acercade');
Route::view('/contacto', 'contacto');
/*Principal del blog*/
Route::get('/', 'PostsController@index'); //pagina principal del blog
Route::get('/post/{id}', 'PostsController@post'); //entrada del blog
Route::get('/foros', 'ForoController@index'); // lista de categorias del foro
Route::get('/foros/{id}', 'ForoController@foro'); // lista de temas en una categoria del foro
Route::get('/temas/{id}', 'TemasController@hilo'); // comentarios de un tema

/*Rutas de entradas de blog*/
Route::get('/nueva_entrada', 'PostsController@nuevo'); // formulario alta de un post
Route::get('/editar_entrada/{id}', 'PostsController@editar');//formulario de edicion de un post
Route::post('/nueva_entrada', 'PostsController@crear');
Route::patch('/nueva_entrada', 'PostsController@actualizar');
Route::delete('/nueva_entrada', 'PostsController@eliminar');

/*Comentarios del blog*/
Route::get('/nuevo_comentario', 'ComentariosController@nuevo');//formulario de creacion de un comentario
Route::get('/nuevo_comentario/{id}', 'ComentariosController@editar');//formulario de edicion de un comentario
Route::post('/nuevo_comentario', 'ComentariosController@crear');
Route::patch('/nuevo_comentario', 'ComentariosController@actualizar');
Route::delete('/nuevo_comentario', 'ComentariosController@eliminar');

/*Temas en los foros*/
Route::get('/nuevo_tema', 'TemasController@nuevo');//formulario creacion de un tema
Route::get('/nuevo_tema/{id}', 'TemasController@editar');//formulario edicion un tema
Route::post('/nuevo_tema', 'TemasController@crear');
Route::patch('/nuevo_tema', 'TemasController@actualizar');
Route::delete('/nuevo_tema', 'TemasController@eliminar');

/*Respuestas en los foros*/
Route::get('/nueva_respuesta', 'RespuestasController@nuevo');//formulario nueva respuesta del foro
Route::get('/nueva_respuesta/{id}', 'RespuestasController@editar');//formulario de edicion de una respuesta del foro
Route::post('/nueva_respuesta', 'RespuestasController@crear');
Route::patch('/nueva_respuesta', 'RespuestasController@actualizar');
Route::delete('/nueva_respuesta', 'RespuestasController@eliminar');

/*Categorias del foro*/ 
Route::get('/nueva_categoria', 'RespuestasController@nuevo');//formulario nueva categoria del foro
Route::get('/nueva_categoria/{id}', 'RespuestasController@editar');//formulario de edicion de una categoria del foro
Route::post('/nueva_categoria', 'RespuestasController@crear');
Route::patch('/nueva_categoria', 'RespuestasController@actualizar');
Route::delete('/nueva_categoria', 'RespuestasController@eliminar');

/*
Route::get('blog', function(){
    return view('blog');
});
*/
//Logins
Auth::routes();

