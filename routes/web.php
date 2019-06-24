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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/student', 'StudentController@allStudents');
Route::get('/fee', 'FeeController@allFees');
Route::get('/search', 'FeeController@search');
Route::get('/newstudent', 'StudentController@index');
Route::post('/register_student','StudentController@newStudent');
Route::post('/register_fee','FeeController@newFee');
Route::get('/newfee', 'FeeController@index');
Route::get('/student/{id}', 'StudentController@particularstudent');
//Route::get('/car', 'CarController@newCar');
