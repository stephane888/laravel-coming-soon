<?php

/**
 * Laravel Coming Soon
 */
Route::group([
    'middleware'    => ['web'],
    'as'            => 'LaravelComingSoon::',
    'namespace'     => 'Stephane888\LaravelComingSoon\App\Http\Controllers',
], function () {
    Route::get('/comming-soon', 'LaravelComingSoon@index')->name('comming-soon');
});