<?php

namespace Insyht\LarvelousSkeleton\Console;

use Illuminate\Console\Command;

class InstallPlugin extends Command
{
    protected $hidden = true;
    protected $signature = 'insyht-larvelous-skeleton:install';
    protected $description = 'Install the Larvelous Skeleton plugin';

    public function handle()
    {
        $this->info('Installing Larvelous Skeleton plugin...');

        $this->info('Publishing configuration...');
        $this->publishConfiguration(true);
        // todo also execute the other stuff from the SkeletonServiceProvider like migrations. Don't forget to add them to the unit test!

        $this->info('Installed Larvelous Skeleton plugin');
    }

    protected function publishConfiguration($forcePublish = false)
    {
        $params = [
            '--provider' => "Insyht\LarvelousSkeleton\SkeletonServiceProvider",
            '--tag' => "config"
        ];

        if ($forcePublish === true) {
            $params['--force'] = true;
        }

        $this->call('vendor:publish', $params);
    }
}
