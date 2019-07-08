<?php

Route::group(['prefix' => 'dashboard','middleware' => 'auth','namespace' => 'Dashboard'], function () {
    Route::get('/', 'HomeDashboardController@index');
    Route::get('setting', 'SettingProfileController@index')->name('dashboard.setting');
    Route::post('setting', 'SettingProfileController@store')->name('dashboard.setting.store');
    Route::view('form-changepassword', 'dashboard.setting-account.changepassword');
    Route::post('changepassword', 'SettingProfileController@changePassword');

});