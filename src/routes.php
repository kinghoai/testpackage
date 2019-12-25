<?php

Route::group(['namespace' => 'Hoai\FirstPackage\Controllers'], function()
{
	Route::get('/test', ['uses' => 'HoaiController@getView']);
	Route::get('/test2', function () {
		return view('hoai::hoai');
	});
});

