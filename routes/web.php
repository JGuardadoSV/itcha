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
use App\Estudiantes;
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
});

Route::post('/registropost', function (Request $request) {
    
    Estudiantes::create($request->all());
    return 1;
});

Route::resource('estudiantes', EstudiantesController::class);

