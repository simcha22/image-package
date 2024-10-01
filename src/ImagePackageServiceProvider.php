<?php

namespace Simcha22\ImagePackage;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class ImagePackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Route::prefix('image-package')
            ->as('image-package.')
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
            });
    }
}
