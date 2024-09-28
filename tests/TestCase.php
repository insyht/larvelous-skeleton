<?php

namespace Insyht\LarvelousSkeletonTheme\Tests;

use Insyht\LarvelousSkeletonTheme\Providers\SkeletonServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            SkeletonServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {

    }
}
