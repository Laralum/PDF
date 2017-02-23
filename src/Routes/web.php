<?php

Route::group([
        'middleware' => ['web', 'laralum.base', 'laralum.auth'],
        'prefix' => config('laralum.settings.base_url'),
        'namespace' => 'Laralum\PDF\Controllers',
        'as' => 'laralum::'
    ], function () {
        Route::get('PDF', 'PDFController@index')->name('pdf.index');
        Route::post('PDF/show', 'PDFController@show')->name('pdf.show');
});
