<?php

Route::group([
        'middleware' => ['web', 'laralum.base'],
        'namespace'  => 'Laralum\PDF\Controllers',
        'as'         => 'laralum_public::',
    ], function () {
        Route::post('PDF/show', 'PDFController@show')->name('pdf.show');
        Route::post('PDF/download/{name?}', 'PDFController@download')->name('pdf.download');
    });

Route::group([
        'middleware' => ['web', 'laralum.base', 'laralum.auth'],
        'prefix'     => config('laralum.settings.base_url'),
        'namespace'  => 'Laralum\PDF\Controllers',
        'as'         => 'laralum::',
    ], function () {
        // Route::get('PDF', 'PDFController@index')->name('pdf.index');
        Route::post('PDF/show', 'PDFController@show')->name('pdf.show');
        Route::post('PDF/download/{name?}', 'PDFController@download')->name('pdf.download');
    });
