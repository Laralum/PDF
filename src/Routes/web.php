<?php

Route::group([
        'middleware' => ['web', 'laralum.base', 'laralum.auth'],
        'prefix' => config('laralum.settings.base_url'),
        'namespace' => 'Laralum\PDF\Controllers',
        'as' => 'laralum::'
    ], function () {
        // First the suplementor, then the resource
        // https://laravel.com/docs/5.4/controllers#resource-controllers
        Route::get('pdf', 'PDFController@index')->name('pdf.index');
        Route::post('show', 'PDFController@show')->name('pdf.show');

});
