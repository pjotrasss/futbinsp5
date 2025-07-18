import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: '0.0.0.0',
        port: 5173,
        hmr: {
            host: '192.168.1.27', // your host IP — the browser connects here
        },
        cors: true,
    },
    plugins: [
        laravel({
            input: ['resources/sass/navbar.scss', 'resources/js/app.js', 'resources/sass/app.scss'],
            refresh: true,
        })
        ],
    });
