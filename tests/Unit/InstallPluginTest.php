<?php

namespace Insyht\LarvelousSkeletonTheme\Tests\Unit;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Insyht\LarvelousShop\Tests\TestCase;

class InstallPluginTest extends TestCase
{
    /** @test */
    public function the_install_command_copies_the_configuration()
    {
        if (File::exists(config_path('insyht-larvelous-skeleton.php'))) {
            unlink(config_path('insyht-larvelous-skeleton.php'));
        }

        $this->assertFalse(File::exists(config_path('insyht-larvelous-skeleton.php')));

        Artisan::call('insyht-larvelous-skeleton:install');

        $this->assertTrue(File::exists(config_path('insyht-larvelous-skeleton.php')));
    }
}
