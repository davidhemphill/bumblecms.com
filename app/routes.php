<?php

Route::get('/', [
    'uses' => 'HomeController@index',
    'as'   => 'home',
]);

Route::resource('home', 'HomeController', [
    'except' => ['show', 'edit', 'update', 'destroy']
]);

Route::resource('docs', 'PageController', [
    'except' => ['edit', 'update', 'destroy']
]);
