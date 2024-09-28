<?php

namespace Insyht\LarvelousSkeletonTheme\Providers;

use Illuminate\Support\ServiceProvider;

class PluginServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->publishes(
            [
                __DIR__ . '/../resources/js' => public_path('js/insyht/larvelous-skeleton'),
            ],
            'insyht-larvelous-skeleton'
        );
    }
}
