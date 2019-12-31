<?php

Route::get('/', 'HomeController@index');
Route::get('/login', 'HomeController@login');

Route::get('/mikrotik', 'MikrotikController@connect');
