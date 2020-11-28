<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' =>['auth']], function(){

//Route::get('/alumnos','App\Http\Controllers\AlumnosController@index');
//Route::get('/alumnos/create','AlumnosController@create');
Route::resource('/alumnos','App\Http\Controllers\AlumnosController');
Route::resource('/puestos','App\Http\Controllers\PuestosController');
Route::resource('/empleados','App\Http\Controllers\EmpleadosController');
Route::resource('/conceptos','App\Http\Controllers\ConceptosController');
Route::resource('/pagosA','App\Http\Controllers\PagosAController');
Route::resource('/pagosE','App\Http\Controllers\PagosEController');
Route::resource('/soporte','App\Http\Controllers\SoporteController');
Route::get('/getDownload','App\Http\Controllers\SoporteController@getDownload');

Route::get('/email', 'App\Http\Controllers\EmailController@create');
Route::post('/email', 'App\Http\Controllers\EmailController@sendEmail')->name('send.email');
//Route::match(['get', 'post'], 'register', function(){
 //   return redirect('/');
//});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});
