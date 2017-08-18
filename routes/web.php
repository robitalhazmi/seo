<?php
//get page
Route::get('/', 'DashboardController@getDashboard')->name('dashboard');
Route::get('majestic', 'DashboardController@getMajestic')->name('majestic');
Route::get('aharef', 'DashboardController@getHover')->name('aharef');
Route::get('login', 'LoginController@getLogin')->name('login');

//csv
Route::get('importExport', 'ExcelController@importExport');
Route::get('downloadExcel/{type}', 'ExcelController@downloadExcel');
Route::post('importExcel', 'ExcelController@importExcel');
