<?php

Route::get('/', 'DashboardController@getDashboard');
Route::get('majestic', 'DashboardController@getMajestic');
Route::get('aharef', 'DashboardController@getHover');
