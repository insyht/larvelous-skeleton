<?php

namespace Insyht\LarvelousSkeletonTheme\Console;

use Illuminate\Console\Command;

class UninstallPlugin extends Command
{
    protected $hidden = true;
    protected $signature = 'insyht-larvelous-skeleton:uninstall';
    protected $description = 'Uninstall the Larvelous Skeleton plugin';

    public function handle()
    {
        $this->info('Uninstalling Larvelous Skeleton plugin...');

        $this->info('Uninstalled Larvelous Skeleton plugin');
    }
}
