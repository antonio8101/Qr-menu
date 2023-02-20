import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import * as path from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/public.scss',
                'resources/sass/auth.scss',
                'resources/css/app.css',
                'resources/js/app.js',
                'public/build-privatearea/static/css/main.css',
                'public/build-privatearea/static/js/main.js'
            ],
            refresh: true,
        }),
    ],
    resolve:{
        alias:{
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    },
});
