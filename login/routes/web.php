<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/student', function () {
    return view('students.index');
})->name('student');

Route::resource('student', App\Http\Controllers\StudentController::class);
// Route::resource('/student/a',[ App\Http\Controllers\StudentController::class,'eleve']);

// Route::resource('showStudent',StudentControllerr::class, ['except' => ['showStudent']]);
// Route::get('/student/a','App\Http\Controllers\StudentController@s1')->name("eleve");
// Route::get('/student/show/{cne}','App\Http\Controllers\StudentController@show')->name("show");
// Route::post('/student/create','App\Http\Controllers\StudentController@create')->name("create");
// Route::get('/student','App\Http\Controllers\StudentController@store')->name("store");
// Route::post('/student/{cne}','App\Http\Controllers\StudentController@update')->name("update");
// Route::get('/student/edit/{cne}','App\Http\Controllers\StudentController@edit')->name("edit");
// Route::get('/student/{cne}','App\Http\Controllers\StudentController@delete')->name("delete");