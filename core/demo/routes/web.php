<?php

Route::group(['namespace' => 'Botble\Demo\Http\Controllers'], function () {
    Route::get('/demo', 'DemoController@getIndex');
});