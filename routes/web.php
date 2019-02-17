<?php

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['middleware' => ['web']], function () {
    Route::match('get', '/', [
        'uses' => 'IndexController@index',
        'as' => 'search',
    ]);

    Route::match('get', '/product/view/{productId}', [
        'uses' => 'IndexController@viewProduct',
        'as' => 'viewProduct',
    ]);
});