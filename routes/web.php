<?php



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::get('/zodiacs/today/{name}', 'ZodiacController@show');
