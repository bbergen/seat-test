<?php

Route::group([
    'namespace' => 'Bryan\Seat\Test\Http\Controllers',
    // 'middleware' => ['web'],
    'prefix' => 'test'
], function () {
    Route::get('/{url}', [
        'as' => 'text.public',
        'uses' => 'TestController@getTest'
    ]);
});