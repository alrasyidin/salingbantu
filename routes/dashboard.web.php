<?php

Route::group(['prefix' => 'dashboard','namespace' => 'Dashboard'], function () {
    Route::get('/', 'HomeDashboardController@index');
    // Route::view('/', 'dashboard.index');
});