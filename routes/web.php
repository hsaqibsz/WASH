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

 
Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/home', 'HomeController@index');



Auth::routes();


route::get('/projects', 'ProjectController@index')->name('project.index');
route::get('/projects/create', 'ProjectController@create')->name('project.create');
route::post('/project/store', 'ProjectController@store')->name('project.store');
route::get('/project/details/{id}', 'ProjectController@show')->name('project.show');
route::get('/project/edit/{id}', 'ProjectController@edit')->name('project.edit');
route::PUT('/project/update/{id}', 'ProjectController@update')->name('project.update');
route::get('/project/export/{type}', 'ProjectController@export')->name('project.export');



route::post('/register', 'UserController@register')->name('user.register');
route::get('/user/profile/edit/{id}', 'UserController@edit')->name('user.edit.profile');
route::post('/user/profile/update/{id}', 'UserController@update')->name('user.update.profile');

route::get('/register/profile/{id?}/', 'UserController@completeProfile1')->name('user.complete_profile1');
route::post('/register/profile/step2/{id?}', 'UserController@completeProfile2')->name('user.complete_profile2');
route::post('/register/profile/step3/{id?}', 'UserController@completeProfile3')->name('user.complete_profile3');
route::post('/register/profile/step4/{id?}', 'UserController@completeProfile4')->name('user.complete_profile4');
route::post('/register/profile/step5/{id?}', 'UserController@completeProfile5')->name('user.complete_profile5');
route::post('/register/profile/step6/{id?}', 'UserController@completeProfile6')->name('user.complete_profile6');
route::get('/register/profile/step7/{id?}', 'UserController@OpenExperience')->name('user.OpenExperience');
route::post('/register/profile/step7/{id?}', 'UserController@completeProfile7')->name('user.complete_profile7');
route::get('/register/profile/step8/{id?}', 'UserController@completeProfile8')->name('user.complete_profile8');

route::get('/hr/dashboard', 'UserController@dashboard')->name('hr.dashboard');
route::get('/hr/user/profile/{id}', 'UserController@profile')->name('user.profile');

route::group(['middleware' => 'admin'], function(){
Route::get('/users', 'HomeController@getUsers')->name('getUsers');
Route::get('/users/grantAdmin/{id}', 'HomeController@grantAdmin')->name('grantAdmin');
Route::get('/users/revokAdmin/{id}', 'HomeController@revokAdmin')->name('revokAdmin');
Route::get('/users/userEdit/{id}', 'HomeController@userEdit')->name('userEdit');
Route::PATCH('/users/usersUpdate/{id}', 'HomeController@usersUpdate')->name('usersUpdate');
Route::Delete('/users/userDelete/{id}', 'HomeController@userDelete')->name('userDelete');
Route::get('/users/addUser', 'HomeController@addUser')->name('addUser');
Route::post('/users/storeUser', 'HomeController@storeUser')->name('storeUser');

Route::post('/inventory/import', 'InventoryController@import')->name('inv.import');
//Route::get('/inventory/export', 'InventoryController@export')->name('inv.export');
Route::get('inventoryexport/{type}', array('as'=>'inv.export','uses'=>'InventoryController@export'));
Route::post('/inventory/search', 'InventoryController@search')->name('inv.search');
Route::post('/inventory/report', 'InventoryController@report')->name('inv.report');

Route::Resource('/inventory', 'InventoryController');

Route::Resource('/donor', 'DonorController');
Route::Resource('/supplier', 'SupplierController');
 
 });