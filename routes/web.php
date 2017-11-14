<?php



    Route::get('tasks', 'TasksController@index');
    Route::post('tasks', 'TasksController@index');

Route::get('tasks/create', 'TasksController@create');
Route::post('tasks/create', 'TasksController@store');


Route::get('tasks/edit/{id}', 'TasksController@edit');

Route::get('tasks/delete/{id}', 'TasksController@destroy');








