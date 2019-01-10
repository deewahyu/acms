<?php

Route::group(['middleware' => 'web', 'prefix' => 'submission', 'namespace' => 'Modules\Submission\Http\Controllers'], function()
{
    Route::get('/', 'SubmissionController@index');
});
