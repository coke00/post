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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', 'PaginaController@inicio')->name('inicio');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/inicio', 'PaginaController@inicio')->name('inicio');
Route::get('/inicio', function () {
  $posts = App\Post::all();
  $perfiles = App\Perfile::all();
  $categories = App\Categorie::all();
  $publicates = App\Publicate::all();
  $usertiposcorts = App\UsersTipoScort::all();
  $tiposcorts = App\TipoScort::all();
  $estados = App\Estado::all();
  $ciudades = App\Ciudade::all();
  return view('inicio', compact('posts','categories','perfiles','publicates','usertiposcorts','tiposcorts','estados','ciudades'));

});
Route::get('ciudad/{ciudad}', function($ciudad){
	$perfile = App\Perfile::where('ciudad', '=', $ciudad)->firstOrFail();
  $posts = App\Post::all();
  $perfiles = App\Perfile::all();
  $categories = App\Categorie::all();
  $publicates = App\Publicate::all();
  $usertiposcorts = App\UsersTipoScort::all();
  $tiposcorts = App\TipoScort::all();
  $estados = App\Estado::all();
  $ciudades = App\Ciudade::all();
  return view('ciudad', compact('posts','categories','perfile','perfiles','publicates','usertiposcorts','tiposcorts','estados','ciudades'));

});
Route::get('/', function () {
  $posts = App\Post::all();
  $perfiles = App\Perfile::all();
  $categories = App\Categorie::all();
  $publicates = App\Publicate::all();
  $usertiposcorts = App\UsersTipoScort::all();
  $tiposcorts = App\TipoScort::all();
  $estados = App\Estado::all();
  $ciudades = App\Ciudade::all();
  return view('inicio', compact('posts','categories','perfiles','publicates','usertiposcorts','tiposcorts','estados','ciudades'));

});

Route::group(['prefix' => '/acceder'], function () {
    Voyager::routes();
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('post/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->firstOrFail();
	return view('post', compact('post'));
});
Route::get('perfile/{slug}', function($slug){
	$perfile = App\Perfile::where('slug', '=', $slug)->firstOrFail();
  $caracteristicas = App\CaracteristicasDetallada::all();
  $perfil_caracteristicas = App\PerfilCaracteristica::all();//::where('author_id','=', $perfile->author_id)->firstOrFail();
  $ciudades = App\Ciudade::where('id','=', $perfile->ciudad)->firstOrFail();
  $servicios = App\Servicio::all();
  $perfil_servicios = App\PerfilServicio::all();//where('perfile_id','=', $perfile->id)->firstOrFail();
  $albumes = App\Albume::all();
  $usertiposcorts = App\UsersTipoScort::all();
  $tiposcorts = App\TipoScort::all();
  return view('perfile', compact('perfile','caracteristicas','perfil_caracteristicas','ciudades','servicios','perfil_servicios','albumes','usertiposcorts','tiposcorts'));
});

Route::get('publicate/{slug}', function($slug){
	$post = App\Publicate::where('slug', '=', $slug)->firstOrFail();
	return view('publicate', compact('publicate'));
});
