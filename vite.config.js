import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                //css
                'resources/css/app.css',
                'resources/css/bootstrap.css',
                'resources/css/bootstrap.min.css',
                //js
                'resources/js/app.js',
                'resources/js/bootstrap.min.js',
                'resources/js/bootstrap.js',
                'resources/js/estiloBoton.js',
                'resources/js/estilosForm.js',
                //sass
                'resources/sass/_variables.scss',
                'resources/sass/app.scss'
            ],
            refresh: true,
        }),
    ],
});
