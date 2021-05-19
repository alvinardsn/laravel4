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

// root

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'MahasiswaController@index');

// Students
// Route::get('/students', 'StudentsController@index'); // get menampilkan data
// Route::get('/students/create', 'StudentsController@create');
// Route::get('/students/{student}', 'StudentsController@show');
// Route::post('/students', 'StudentsController@store'); // post untuk menginsert data ke database
// Route::delete('/students/{student}', 'StudentsController@destroy'); // delete adalah method yg berasal dari @method('delete')
// Route::get('/students/{student}/edit', 'StudentsController@edit');
// Route::patch('/student/{student}', 'StudentsController@update');

Route::resource('students', 'StudentsController');
