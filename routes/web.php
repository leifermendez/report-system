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

//Route::get('/', function () {
//    return view('welcome');
//})->middleware('auth');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('/', 'HomeController', ['only' => 'index']);
    Route::resource('/organizations', 'OrganizationsController');
    Route::resource('/projects', 'ProjectsController');
    Route::resource('/features', 'FeaturesController');
    Route::resource('/reports', 'ReportsController');
    Route::resource('/issues', 'IssuesController');
});


