<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/linkstorage', function () {
    //  Artisan::call('storage:link');
      \Illuminate\Support\Facades\Artisan::call('storage:link');
      echo 'ok';
});

