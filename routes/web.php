<?php
//get page
Route::get('/', 'DashboardController@getDashboard')->name('dashboard');
Route::get('majestic', 'DashboardController@getMajestic')->name('majestic');
Route::get('aharef', 'DashboardController@getHover')->name('aharef');
Route::get('login', 'LoginController@getLogin')->name('login');
Route::get('csv', 'DashboardController@getCSV')->name('csv');
//csv
Route::post('importExcel', 'ExcelController@importExcel')->name('import');
Route::get('downloadExcel/{type}/{table}', 'ExcelController@downloadExcel')->name('export');
//postData
Route::post('login','LoginController@postLogin')->name('login.post');
