<?php

Route::group(['middleware' => 'web', 'prefix' => 'timetable', 'namespace' => 'Modules\Timetable\Http\Controllers'], function()
{
    Route::get('/', 'TimetableController@index');
    Route::get('/entrytimetableimport', 'TimetableController@entryTimetable');
    Route::get('/entrysubjectimport', 'TimetableController@entrySubject');
    Route::get('/entryteacherimport', 'TimetableController@entryTeacher');
    Route::post('/fettimetableimport', 'TimetableController@fetImport');
    Route::post('/subjectimport', 'TimetableController@subjectImport');
    Route::post('/teacherimport', 'TimetableController@teacherImport');
    Route::get('/viewprodi', 'TimetableController@viewProdi');
    Route::get('/viewkelas', 'TimetableController@viewKelas');
    Route::get('/viewdosen', 'TimetableController@viewDosen');
    Route::get('/viewsiak', 'TimetableController@viewSiak');
    Route::get('/printsk', 'TimetableController@printSK');
    Route::post('/goprintsk', 'TimetableController@goPrintSK');
});
