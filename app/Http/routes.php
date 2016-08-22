<?php

Route::get('login', 'WelcomeController@loginPage');
Route::post('do-login', 'WelcomeController@doLogin');
Route::get('sign-up', 'WelcomeController@singUpPage');
Route::post('do-sign-up', 'WelcomeController@doSingUp');
Route::get('logout', 'WelcomeController@doLogout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    /* API Urls */
    Route::group(['prefix' => 'api/v1'], function () {
        Route::get('todos', function () {
            return App\Todo::all();
        });
        Route::post('todo', '\App\Http\Controllers\Api\TodoApiController@saveTodo');
        Route::post('todo-delete', '\App\Http\Controllers\Api\TodoApiController@deleteTodo');
        Route::post('todo-status', '\App\Http\Controllers\Api\TodoApiController@changeTodoStatus');
    });
});
