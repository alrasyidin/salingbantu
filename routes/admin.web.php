<?php

Route::group(['prefix' => 'admin', 'namespace' => "Admin"], function () {
    Route::group(['namespace' => "Auth"], function(){
        Route::get('/login', 'LoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'LoginController@login')->name('admin.login.post');
        Route::get('/forgotpassword', 'ResetPasswordController@showResetForm')->name('admin.forgot');
    });
    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/', 'HomeDashboardController@index');

    });
});

