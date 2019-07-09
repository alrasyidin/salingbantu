<?php

Route::group(['prefix' => 'dashboard','middleware' => 'auth','namespace' => 'Dashboard'], function () {
    Route::get('/', 'HomeDashboardController@index');
    Route::get('setting', 'SettingProfileController@index')->name('dashboard.setting');
    Route::post('setting', 'SettingProfileController@store')->name('dashboard.setting.store');
    Route::view('form-changepassword', 'dashboard.setting-account.changepassword');
    Route::post('changepassword', 'SettingProfileController@changePassword');

    Route::get('campaign', 'CampaignController@index');
    Route::get('campaign/create/{id?}', 'CampaignController@create')->name('create.campaign');
    Route::post('campaign/store', 'CampaignController@store')->name('store.campaign');
    Route::get('campaign/data', 'CampaignController@data');
    Route::delete('campaign/{id}', 'CampaignController@destroy');
    Route::post('campaign/delete-image/{id}', 'CampaignController@deleteCampaignImg');

});