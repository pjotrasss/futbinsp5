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
            input: [
                'resources/js/app.js',
                'resources/js/clubs.js',
                'resources/styles/sass/navbar.scss',
                'resources/styles/sass/app.scss',
                'resources/styles/sass/clubs.scss'
            ],
            refresh: true,
        })
        ],
    });
