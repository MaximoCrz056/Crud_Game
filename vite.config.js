import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/bootstrap.min.js',
                'resources/js/bootstrap.js',
                'resources/css/bootstrap.js',
                'resources/css/bootstrap.min.js',
                'resources/js/estilosBoton.js',
                'resources/js/estilosForm.js',
            ],
            refresh: true,
        }),
    ],
});
