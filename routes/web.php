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

// Read users from db
Route::get('/people_list', [
    
    'uses' => 'PersonsController@returnAll',
    'as' => 'people_list'
        
]);

// Form page view
Route::get('/form', function () {
    return view('form');
});

// Create new member
Route::post('/create/person', [
    
    'uses' => 'PersonsController@createUser'   
]);

//Delete member
Route::get('/delete/person{id}', [
    
    'uses' => 'PersonsController@deleteUser',
    'as' => 'person.delete'
]);

// Update member step1
Route::get('/person/update{id}', [
    
    'uses' => 'PersonsController@updateUser',
    'as' => 'person.update'
]);

// Update member step2
Route::post('/person/save/{id}', [
    
    'uses' => 'PersonsController@saveUser',
    'as' => 'person.save'
]);
