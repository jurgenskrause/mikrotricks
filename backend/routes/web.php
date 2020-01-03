<?php

Route::get('/', 'HomeController@index');
Route::get('/mikrotik', 'MikrotikController@connect');
