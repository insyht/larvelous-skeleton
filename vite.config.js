import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            hotFile: 'public/vendor/insyht/larvelous-skeleton/larvelous-skeleton.hot',
            buildDirectory: 'vendor/insyht/larvelous-skeleton',
            input: [
                'resources/js/app.js',
                'resources/sass/larvelous-skeleton.scss'
            ],
            refresh: true,
        }),
    ],
});
