import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/bootstrap.min.css',
                'resources/css/fontawesome.min.css',
                'resources/css/datatables.min.css',

                'resources/js/jquery-3.7.0.slim.min.js',
                'resources/js/app.js',
                'resources/js/datatables.min.js',
                'resources/js/fontawesome.min.js'
            ],
            refresh: true,
        }),
    ],
});
