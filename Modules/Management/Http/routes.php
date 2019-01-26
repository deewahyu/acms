<?php

Route::group(['middleware' => 'web', 'prefix' => 'management', 'namespace' => 'Modules\Management\Http\Controllers'], function()
{
    Route::get('/', 'ManagementController@index');
    Route::post('/defenseGForm', 'DefenseController@defenseGForm');
    Route::get('/viewimportdefenseGForm', 'DefenseController@viewImportDefenseGForm');
    Route::get('/listofdefenseparticipants', 'DefenseController@index');
    Route::post('/printyudisium', 'DefenseController@printYudisium');
    
});
