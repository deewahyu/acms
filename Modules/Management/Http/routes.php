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
    Route::post('/'. '786415118:AAGVh5ixRGHkTQfx0fnV0X5yJhW_t4pCJZg' . '/webhook', 'TelegramController@handleRequest');
    Route::get('/set-hook', 'TelegramController@setWebHook');
    Route::get('/remove-hook', 'TelegramController@removeWebHook');
    Route::get('/getme', 'TelegramController@getMe');
    
});
