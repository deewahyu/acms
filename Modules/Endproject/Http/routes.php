<?php

Route::group(['middleware' => 'web', 'prefix' => 'endproject', 'namespace' => 'Modules\Endproject\Http\Controllers'], function()
{
    Route::get('/', 'EndprojectController@index');
    Route::get('/student', 'StudentController@index');
    Route::get('/student/create', 'StudentController@create');
    Route::post('/student/store', 'StudentController@store');
    Route::get('/student/edit/{username}', 'StudentController@edit');
    Route::post('/student/update/{username}', 'StudentController@update');
    Route::get('/research', 'ResearchController@index');
    Route::get('/research/create', 'ResearchController@create');
    Route::post('/research/store', 'ResearchController@store');
    Route::get('/research/show/{id}', 'ResearchController@show');
    Route::get('/research/edit/{id}', 'ResearchController@edit');
    Route::post('/research/update', 'ResearchController@update');
    Route::get('/research/destroy/{id}', 'ResearchController@destroy');
});
