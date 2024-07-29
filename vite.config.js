import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                // Asegúrate de que estos archivos existan en las rutas especificadas
                'resources/js/bootstrap.min.js',
                'resources/js/bootstrap.js',
                'resources/js/estiloBoton.js',
                'resources/js/estilosForm.js',
            ],
            refresh: true,
        }),
    ],
});
