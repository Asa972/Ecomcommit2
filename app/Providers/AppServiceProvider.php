<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

// Définir une longueur de chaîne par défaut pour éviter les erreurs avec les index
    public function boot(): void
    {
        //
    }
}
