<?php

Route::group(['middleware' => 'web', 'prefix' => 'management', 'namespace' => 'Modules\Management\Http\Controllers'], function()
{
    Route::get('/', 'ManagementController@index');
    Route::post('/defenseGForm', 'DefenseController@defenseGForm');
    Route::get('/viewimportdefenseGForm', 'DefenseController@viewImportDefenseGForm');
    Route::get('/listofdefenseparticipants', 'DefenseController@index');
    Route::post('/printyudisium', 'DefenseController@printYudisium');
    Route::get('/telegram-update', 'TelegramController@updatedActivity');
    Route::get('/send-message', 'TelegramController@sendMessage');
    Route::post('/store-message', 'TelegramController@storeMessage');
    Route::post('/'. env('TELEGRAM_BOT_TOKEN') . '/webhook', 'TelegramController@handleRequest');
    Route::post('/set-hook', 'TelegramController@setWebHook');
    
});
