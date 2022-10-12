<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@index')->name('home');

Route::get('nova', 'MainController@criar')->name('nova');
Route::post('save', 'MainController@save')->name('guardar-terefa');

Route::get('taskdone/{id}', 'MainController@taskdone')->name('taskdone');

Route::get('taskundone/{id}', 'MainController@taskundone')->name('taskundone');

Route::get('editar/{id}', 'MainController@editar')->name('editar');
Route::get('updatetask/{id}', 'MainController@updatetask')->name('updatetask');

Route::get('invisivel/{id}', 'MainController@invisivel')->name('invisivel');
Route::get('visivel/{id}', 'MainController@visivel')->name('visivel');

Route::get('invisivel', 'MainController@tarefainvisivel')->name('tarefainvisivel');