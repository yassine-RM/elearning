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

Route::get('/', function () {
   return view('');
});
Route::get('/hello ', function () {
    return 'hello world';
  });
  Route::get('/admin', function () {
    return view('admin');
  });
  Route::get('/users/{id}', function ($id) {
    return 'this is user'.$id;
  });
  Route::get('/master', function () {
    return view('superadmin.master');
  });


 /* Route::get('/departement', function () {
    return view('superadmin.departement');
  });
  Route::resource('h','TestController');
  /*Route::get('/compteadmin', function () {
    return view('superadmin.compteadmin');
  });

  Route::get('/filiere', function () {
    return view('superadmin.filiere');
  });*/



//Administ
        Route::get('/compteadmin','AdministrateurController@index');
        Route::post('/newadmin','AdministrateurController@newadmin');
        Route::get('/getUpdated','AdministrateurController@getUpdated');
        Route::put('/newadmin','AdministrateurController@newUpdateD');
        Route::get('/deleteAdmin','AdministrateurController@deleteAdmin');



//departement
        Route::get('/departement','DepartementContoller@index');
        Route::post('/newDep','DepartementContoller@newDep');
        Route::get('/getUpdate','DepartementContoller@getUpdate');
        Route::put('/newDep','DepartementContoller@newUpdate');
        Route::get('/deleteDepart','DepartementContoller@deleteDepart');

//Cycle
Route::get('/cycle','CycleController@index');
Route::get('/newCycle','CycleController@newCycle');
Route::get('/getUpdateC','CycleController@getUpdateC');
Route::put('/newCycle','CycleController@newUpdateC');
Route::get('/deleteCyc','CycleController@deleteCyc');

//fili
Route::get('/filiere','FiliereController@index');
Route::post('/newFil','FiliereController@newFil');
Route::get('/getUpdateF','FiliereController@getUpdateF');
Route::put('/newFil','FiliereController@newUpdateF');
Route::get('/deletefil','FiliereController@deletefil');

//super
Route::get('/superAdmin','SuperController@index');
Route::get('/newSup','SuperController@newSup');
Route::get('/getUpdateS','SuperController@getUpdateS');
Route::put('/newSup','SuperController@newUpdateS');
Route::get('/deletesup','SuperController@deletesup');


