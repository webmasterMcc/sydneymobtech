import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
               'resources/js/swiperBanner.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    build: {
        manifest: true, // Make sure this is enabled to generate the manifest
        outDir: 'public/build',
      },
});
