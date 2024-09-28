<?php

use Illuminate\Database\Migrations\Migration;
use Insyht\Larvelous\Models\Theme;

class InstallTheme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Theme::where('path', 'insyht/larvelous-skeleton-theme/resources/views')->exists()) {
            Theme::create([
                'name' => 'Skeleton',
                'path' => 'insyht/larvelous-skeleton-theme/resources/views',
                'namespace' => 'Insyht\LarvelousSkeletonTheme',
                'blade_prefix' => 'insyht-larvelous-skeleton-theme',
                'github_url' => 'https://github.com/insyht/larvelous-skeleton-theme',
                'image' => 'images/larvelous-theme.png',
                'active' => false,
                'author' => 'insyht',
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Theme::where('path', 'insyht/larvelous-skeleton-theme/resources/views')->delete();
    }
}
