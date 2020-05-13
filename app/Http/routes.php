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
Route::get('/hola-mundo', function () {
    return view('hola-mundo');
});
Route::post('/hola-mundo', function () {
    return 'Hola mundo soy Víctor por post';
});
Route::get('contacto/{nombre?}/{edad?}', function ($nombre = "anonimo",$edad=NULL) {
/*     return view('contacto', array(
       "nombre" => $nombre,
       "edad" => $edad
    )); */
    return view('contacto.contacto')
            ->with('nombre',$nombre)
            ->with('edad',$edad)
            ->with('frutas',array('naranja','pera','aa','fresa','melon'));
})->where([
    'nombre'=> '[A-Za-z]+',
    'edad'=>'[0-9]+'
]);
/* Route::match(['get','post'],'contacto', function () {
    return view('contacto');
});
 */


Route::group(['prefix'=>'fruteria'],function(){
    Route::get('/frutas', 'FrutasController@getIndex');
    Route::get('/naranjas/{admin?}', [ 'middleware'=> 'EsAdmin',
        'uses'=> 'FrutasController@getNaranjas',
        'as'=>'naranjitas'
        ]);
    Route::get('/peras', 'FrutasController@anyPeras'); 
});

Route::post('/recibir', 'FrutasController@recibirFormulario'); 
Route::controller('notas', 'NotesController'); 


//Route::controller('frutas','FrutasController');