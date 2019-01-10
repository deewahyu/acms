<?php

Route::group(['middleware' => 'web', 'prefix' => 'submission', 'namespace' => 'Modules\Submission\Http\Controllers'], function()
{
    Route::get('/', 'SubmissionController@index');
    Route::get('/', 'PapersController@index');
    Route::get('/subpapers', 'SubPapersController@index');
    
});
