<?php

namespace Insyht\LarvelousSkeleton\Providers;

use Illuminate\Support\ServiceProvider;
use Insyht\LarvelousSkeleton\Console\InstallPlugin;

class SkeletonThemeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->publishes(
            [
                __DIR__ . '/../../public/vendor/insyht/larvelous-skeleton' => public_path('vendor/insyht/larvelous-skeleton'),
                __DIR__ . '/../../resources/js' => public_path('vendor/insyht/larvelous-skeleton/js')
            ],
            'insyht-larvelous-skeleton'
        );
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'insyht-larvelous-skeleton');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'insyht-larvelous-skeleton');

        // Todo Als Plugin::fresh_install === true, dan het InstallPlugin commando uitvoeren
        if ($this->app->runningInConsole()) {
            $this->commands(
                [
                    InstallPlugin::class,
                ]
            );
        }
    }
}
