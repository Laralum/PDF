<?php

namespace Laralum\PDF;

use Illuminate\Support\ServiceProvider;

class PDFServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/Views', 'laralum_pdf');
        $this->loadTranslationsFrom(__DIR__.'/Translations', 'laralum_pdf');

        if (!$this->app->routesAreCached()) {
            require __DIR__.'/Routes/web.php';
        }

        $this->app->register('Barryvdh\\DomPDF\\ServiceProvider');
        $this->app->register('GrahamCampbell\\Markdown\\MarkdownServiceProvider');

        if (!file_exists(storage_path('fonts'))) {
            mkdir(storage_path('fonts'));
        }

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
