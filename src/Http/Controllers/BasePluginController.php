<?php

namespace Insyht\LarvelousShop\Http\Controllers;

use Insyht\Larvelous\Http\Controllers\AbstractPluginController;

class BasePluginController extends AbstractPluginController
{
    protected function getBaseViteIncludes(): array
    {
        return [
            [
                'hotFile' => 'vendor/insyht/larvelous-skeleton/larvelous-skeleton.hot',
                'buildDirectory' => 'vendor/insyht/larvelous-skeleton',
                'entryPoints' => [
                    'resources/js/app.js',
                    'resources/sass/larvelous-skeleton.scss',
                ],
            ],
        ];
    }

    protected function getJsIncludes(): array
    {
        return [];
    }
}
